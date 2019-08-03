<?php

if (isset($_GET["menu"]) and $_GET['menu']=="connexion") {
    echo 'connexion';
}elseif(isset($_POST[valider])){
    if ($_POST['valider']=='rmabcn'){

    }
}
else{
    header('location:view/accueil.php');
}