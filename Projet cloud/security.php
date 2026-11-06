<?php
declare(strict_types=1);

/**
 * Shared security helpers for the Mediatheque PHP application.
 */
function start_secure_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    ini_set('session.use_strict_mode', '1');
    ini_set('session.use_only_cookies', '1');
    ini_set('session.use_trans_sid', '0');

    $isHttps = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => $isHttps,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    session_start();
}

function csrf_token(): string
{
    start_secure_session();

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

function verify_csrf_token(): bool
{
    start_secure_session();

    $submittedToken = $_POST['csrf_token'] ?? '';

    return is_string($submittedToken)
        && isset($_SESSION['csrf_token'])
        && hash_equals($_SESSION['csrf_token'], $submittedToken);
}

function require_authenticated_user(): void
{
    start_secure_session();

    if (empty($_SESSION['auth']) || empty($_SESSION['user_id'])) {
        header('Location: connexion.php');
        exit;
    }
}
/**
 * Resolve a PDF path strictly inside the library directory.
 * Returns null for missing files, non-PDF files, and traversal/symlink escapes.
 */
function resolve_library_pdf(string $relativePath, string $libraryDirectory): ?string
{
    if ($relativePath === '' || str_contains($relativePath, "\0")) {
        return null;
    }

    $baseDirectory = realpath($libraryDirectory);
    if ($baseDirectory === false) {
        return null;
    }

    $candidate = realpath($baseDirectory . DIRECTORY_SEPARATOR
        . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $relativePath));

    if ($candidate === false
        || !str_starts_with($candidate, $baseDirectory . DIRECTORY_SEPARATOR)
        || !is_file($candidate)
        || strtolower(pathinfo($candidate, PATHINFO_EXTENSION)) !== 'pdf') {
        return null;
    }

    return $candidate;
}
