<?php

    if (isset($_POST["submit"])) {
        $userLogin = $_POST["login"];
        setcookie("login", $_POST["login"], time()+3600);
        setcookie("password", $_POST["password"], time() +3600);
        echo "Vos infos de connexion<br> votre identifiant est : " .$_COOKIE["login"];
        echo "<br> votre mot de passe est : " .$_COOKIE["password"];
    }
