<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 7 exercice 1</title>
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
        <h2>Exercice 1<h2>
                <p>Faire une page HTML permettant de donner à l'utilisateur :<br>
                    son User Agent<br>
                    son adresse ip<br>
                    le nom du serveur<br>
                <p>

                    <?php
                    echo "Votre adresse ip est" . $_SERVER['REMOTE_ADDR'] . "<br>";
                    echo "<br> Le nom de votre serveur est " . $_SERVER['SERVER_NAME'] . "<br>";
                    echo "<br> Votre user agent est " . $_SERVER['HTTP_USER_AGENT'];
                    ?>
</body>

</html>