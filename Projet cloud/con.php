<?php
declare(strict_types=1);

/*
 * Configure these variables in the PHP hosting environment:
 * DB_HOST, DB_NAME, DB_USER and DB_PASS.
 * Never commit production credentials to this repository.
 */

$host = getenv('DB_HOST') ?: 'localhost';
$database = getenv('DB_NAME') ?: 'projet_cloud';
$username = getenv('DB_USER');
$password = getenv('DB_PASS');

if ($username === false || $password === false) {
    error_log('Mediatheque database configuration is incomplete.');
    http_response_code(500);
    exit('Service temporairement indisponible.');
}

try {
    $db = new PDO(
        "mysql:host={$host};dbname={$database};charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $exception) {
    error_log('Mediatheque database connection failed: ' . $exception->getMessage());
    http_response_code(500);
    exit('Service temporairement indisponible.');
}
