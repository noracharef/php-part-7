<?php

    if (isset($_POST["submit"])) {
        setcookie("login", $_POST["login"], time()+3600);
        setcookie("password", $_POST["password"], time() +3600);
        echo "Vos infos de connexion<br> votre identifiant est : " . $userLogin = $_POST["login"];
        echo "<br> votre mot de passe est : " . $userPassword = $_POST["password"];
    }

    ?>  

