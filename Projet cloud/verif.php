<?php
declare(strict_types=1);

require_once __DIR__ . '/security.php';
start_secure_session();

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !verify_csrf_token()) {
    http_response_code(400);
    exit('Requête invalide. Veuillez réessayer depuis le formulaire.');
}

$username = trim((string) ($_POST['username'] ?? ''));
$password = $_POST['password'] ?? '';

if ($username === '' || !is_string($password) || $password === '') {
    $_SESSION['erreur'] = 'Veuillez renseigner vos identifiants.';
    header('Location: connexion.php');
    exit;
}

try {
    require __DIR__ . '/con.php';

    $statement = $db->prepare(
        'SELECT username, password FROM users WHERE username = :username LIMIT 1'
    );
    $statement->execute(['username' => $username]);
    $user = $statement->fetch();
} catch (Throwable $exception) {
    error_log('Mediatheque login failed: ' . $exception->getMessage());
    $_SESSION['erreur'] = 'Connexion temporairement indisponible.';
    header('Location: connexion.php');
    exit;
}

if (!$user || !password_verify($password, $user['password'])) {
    $_SESSION['erreur'] = 'Identifiants invalides.';
    header('Location: connexion.php');
    exit;
}

session_regenerate_id(true);
$_SESSION['auth'] = true;
$_SESSION['user_id'] = $user['username'];
$_SESSION['username'] = $user['username'];
unset($_SESSION['csrf_token'], $_SESSION['erreur']);

header('Location: accueil.php');
exit;
