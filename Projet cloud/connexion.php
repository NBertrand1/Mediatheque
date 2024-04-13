<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <title>Connexion</title>
</head>
<body>
    <form class="container" action="verif.php" method="post">
        <h1>CONNEXION</h1>
        <p>Salut, j'espere que vous allez bien. Veuillez remplir vos informations afin de pouvoir vous connecter.</p>
        <div class="nom">
            <label for="name">Nom(s) :</label>
            <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
        </div>
        <div class="mdp">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        </div>
        <input type="submit" value="Connexion">
        <div class="stay-connect">
            <input type="checkbox">
            <p>Se souvenir de moi</p>
        </div>
        <div class="create-account">
            <h6>Vous n'avez pas de compte ? Pas grave <a href="inscription.php">Cliquez ici !</a></h6>

        </div>
        <footer id="footer">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Beker Services © 2024</p>
        </footer>
    </form>
</body>
</html>