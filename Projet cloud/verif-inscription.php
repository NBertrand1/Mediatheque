<?php

    // Connexion à la base de données (remplacez les paramètres par les vôtres)
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "projet_cloud";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connexion échouée : " . $e->getMessage();
        exit();
    }
    
    // Vérification des données reçues du formulaire
    if (isset($_POST['username']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = trim($_POST['username']);
        $surname = trim($_POST['surname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    
        // Validation des données
        $errors = [];
    
        if (empty($username)) {
            $errors[] = "Veuillez saisir votre nom.";
        }
        if (empty($surname)) {
            $errors[] = "Veuillez saisir votre prénom.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Veuillez saisir une adresse email valide.";
        }
        if (strlen($password) < 8) {
            $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
        }
    
        // Vérifier la disponibilité de l'email dans la base de données
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            $errors[] = "Cette adresse email est déjà utilisée.";
        }
    
        // Si aucune erreur, inscrire l'utilisateur
        if (empty($errors)) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, surname, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$username, $surname, $email, $password_hash]);

            
            // Redirection ou message de confirmation
            header("Location: index.html");
            exit();
        } else {
            // Afficher les erreurs
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
        }
    }
    
?>