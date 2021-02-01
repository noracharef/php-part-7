<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 7 exercice 2</title>
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
        <h2>Exercice 2<h2>
                <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.<br>
                    Ces variables auront été définies directement dans le code.<br>
                    Il faudra afficher le contenu de ces variables sur la deuxième page.
                <p>

                    <?php
                     session_start();
                     echo "Votre Nom : " . $_SESSION["lastname"] . "<br>" ;
                     echo "Votre prénom : " . $_SESSION["firstname"]. "<br>";
                     echo "Votre age : " . $_SESSION["age"] . " ans";
                     ?>
                     <div>
                         <a href="exo2.php">Revenir à la première page</a>
                     </div>
                
</body>

</html>