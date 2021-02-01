<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 7 exercice 3</title>
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <nav>
        <ul>
            <li><a href="exo1.php">Ex 1</a></li>
            <li><a href="exo2.php">Ex 2</a></li>
            <li><a href="exo3.php">Ex 3</a></li>
            <li><a href="exo4.php">Ex 4</a></li>
            <li><a href="exo5.php">Ex 5</a></li>
        </ul>

        <h1>PHP Partie 7 : Variables superglobales, sessions et cookies</h1>
        <h2>Exercice 3<h2>
                <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.<br>
                <p>

                <form method="POST" action="index3.php">
                    <div>
                        <label for="login">Votre identifiant :</label>
                        <input type="text" id="login" name="login" required>
                    </div>
                    <div>
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="button">
                        <button type="submit" name="submit">Envoyer</button>
                    </div>
                </form>

</body>

</html>

