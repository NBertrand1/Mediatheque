<?php
declare(strict_types=1);

require_once __DIR__ . '/security.php';
require_authenticated_user();

$requestedFile = $_GET['file'] ?? null;
if (!is_string($requestedFile) || $requestedFile === '') {
    http_response_code(400);
    exit('Document invalide.');
}

$pdfPath = resolve_library_pdf($requestedFile, __DIR__ . '/Livres');
if ($pdfPath === null) {
    http_response_code(404);
    exit('Document introuvable.');
}

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($pdfPath) . '"');
header('Content-Length: ' . (string) filesize($pdfPath));
header('Cache-Control: private, no-store, max-age=0');
header('X-Content-Type-Options: nosniff');

readfile($pdfPath);
exit;
