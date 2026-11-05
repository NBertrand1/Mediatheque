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
    <title>Connexion</title>
</head>
<body>
    <form class="container" action="verif.php" method="post">
        <h1>CONNEXION</h1>
        <p>Veuillez renseigner vos identifiants pour vous connecter.</p>
        <?php if (!empty($_SESSION['erreur'])): ?>
            <p role="alert"><?= htmlspecialchars($_SESSION['erreur'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php unset($_SESSION['erreur']); ?>
        <?php endif; ?>
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>">
        <div class="nom">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" autocomplete="username" required>
        </div>
        <div class="mdp">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" autocomplete="current-password" required>
        </div>
        <input type="submit" value="Connexion">
        <div class="create-account">
            <h6>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous ici</a></h6>
        </div>
        <footer id="footer">
            <p class="copyright">Beker Services © 2024</p>
        </footer>
    </form>
</body>
</html>
