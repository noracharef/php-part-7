
<?php

if (isset($_POST["submit"])) {

    setcookie("login", $_POST["login"], time() +  3600);
    setcookie("password", $_POST["password"], time() + 3600);
    header("Location: index5.php"); //REFRESH PHP Permet de bloquer l'acces de certaines pages par ex si la personne n'est pas connecté. 
}
echo "Vos infos de connexion<br> votre identifiant est : " . $_COOKIE["login"] ?? "vous n'avez pas de cookie login";
echo "<br> votre mot de passe est : " . $_COOKIE["password"] ?? "vous n'avez pas de cookie mot de passe";
?>


<?php

if (isset($_POST["submitCaption"])) {

        setcookie('caption', $_POST['caption'], time() + 86400);
}

?>


