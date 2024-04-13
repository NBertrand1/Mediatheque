<?php

include("con.php");

session_start();

// Définir les variables de connexion à la base de données
$host = "localhost";
$username = "root";
$password = "root";
$database = "projet_cloud";

// Connexion à la base de données
$db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

// Récuperation des informations du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Requête SQL pour vérifier l'utilisateur
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();

// Vérifier si l'utilisateur existe
$user = $stmt->fetch();

if ($user) {
    // Récupération du hachage du mot de passe
    $hashedPassword = $user['password'];

    // Comparaison du mot de passe saisi avec le hachage
    if (password_verify($password, $hashedPassword)) {
        // Authentification réussie
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $username;
        header('Location: accueil.php');
        exit;
    } else {
        // Echec de l'authentification : mot de passe incorrect
        $_SESSION['erreur'] = "Mot de passe incorrect.";
        header('Location: index.html');
        exit;
    }
} else {
    // Erreur d'authentification : utilisateur non trouvé
    $_SESSION['erreur'] = "Nom d'utilisateur incorrect.";
    header('Location: index.html');
    exit;
}

?>
