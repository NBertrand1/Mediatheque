<?php
declare(strict_types=1);

require_once __DIR__ . '/security.php';
start_secure_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <title>Inscription</title>
</head>
<body>
    <form class="container" action="verif-inscription.php" method="post">
        <h1>INSCRIPTION</h1>
        <p>Veuillez remplir les informations ci-dessous pour créer votre compte.</p>
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>">
        <div class="nom">
            <label for="username">Nom(s) :</label>
            <input type="text" id="username" name="username" placeholder="Nom" autocomplete="username" required>
        </div>
        <div class="prenom">
            <label for="surname">Prénom(s) :</label>
            <input type="text" id="surname" name="surname" placeholder="Prénom" required>
        </div>
        <div class="email">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Adresse email" autocomplete="email" required>
        </div>
        <div class="mdp">
            <label for="password">Mot de passe (12 caractères minimum) :</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" autocomplete="new-password" minlength="12" required>
        </div>
        <input type="submit" value="Inscription">
        <div class="connect-account">
            <h6>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous ici</a></h6>
        </div>
        <footer id="footer">
            <p class="copyright">Beker Services © 2024</p>
        </footer>
    </form>
</body>
</html>
