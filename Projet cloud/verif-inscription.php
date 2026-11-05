<?php
declare(strict_types=1);

require_once __DIR__ . '/security.php';
start_secure_session();

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !verify_csrf_token()) {
    http_response_code(400);
    exit('Requête invalide. Veuillez réessayer depuis le formulaire.');
}

$username = trim((string) ($_POST['username'] ?? ''));
$surname = trim((string) ($_POST['surname'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

$errors = [];

if ($username === '' || $surname === '') {
    $errors[] = 'Veuillez renseigner votre nom et votre prénom.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Veuillez saisir une adresse email valide.';
}
if (!is_string($password) || strlen($password) < 12) {
    $errors[] = 'Le mot de passe doit contenir au moins 12 caractères.';
}

if ($errors) {
    http_response_code(422);
    foreach ($errors as $error) {
        echo '<p>' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</p>';
    }
    echo '<p><a href="inscription.php">Retour au formulaire</a></p>';
    exit;
}

try {
    require __DIR__ . '/con.php';

    $existingUser = $db->prepare(
        'SELECT username FROM users WHERE username = :username OR email = :email LIMIT 1'
    );
    $existingUser->execute(['username' => $username, 'email' => $email]);

    if ($existingUser->fetch()) {
        http_response_code(409);
        exit('Ce nom d’utilisateur ou cette adresse email est déjà utilisé.');
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $insert = $db->prepare(
        'INSERT INTO users (username, surname, email, password) VALUES (:username, :surname, :email, :password)'
    );
    $insert->execute([
        'username' => $username,
        'surname' => $surname,
        'email' => $email,
        'password' => $passwordHash,
    ]);
} catch (Throwable $exception) {
    error_log('Mediatheque registration failed: ' . $exception->getMessage());
    http_response_code(500);
    exit('Inscription temporairement indisponible.');
}

header('Location: connexion.php');
exit;
