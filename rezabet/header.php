<?php
/**
 * Created by PhpStorm.
 * User: Reza Opias
 * Date: 26/02/2019
 * Time: 10:32
 */
if (isset($_GET["menu"])){
    $menu=$_GET["menu"];
}else{
    $menu="";
}
$db=Database::connect();

?>

<header class="header-fixed">

    <nav class="navbar navbar-inverse navbar-fixed-top" id="menu">
        <div class="container">
            <div class="container">
                <?php
                if (isset ($id_user)) {
                ?>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a href="envoi.php">
                        <h1 class="monlogo" <?php if (!isset($id_user)) { echo "style=text-align='center'"; } ?>>rezA<span id="bleu">Bet</span></h1>
                    </a>
                    <!--<img src="img/logo.png" class="img-cirle img-responsive logo" id="monlogo">-->
                </div>

                <div class="collapse navbar-collapse" id="monmenu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php if ($menu=="envoi"){echo "active";}?>"><a href="envoi.php?menu=envoi">Envoyer de l'argent</a></li>
                        <li class="<?php if ($menu=="suivre"){echo "active";}?>"><a href="suivre.php?menu=suivre">Suivre un transfert</a></li>

                    </ul>

                    <div class="dropdown pull-right div-img">
                        <span class=" dropdown-toggle" type="" data-toggle="dropdown">
                            <?php if (!empty($photo_user)){ ?>
                                <img class="img-circle icone " src="img/profil/<?php echo $photo_user; ?>" alt="">
                            <?php }else{?>
                            <span class="glyphicon glyphicon-user icone-defaut img-circle "></span>
                            <?php } ?>
                        </span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="historique.php   "><span class="glyphicon glyphicon-calendar"></span> Historique</a></li>
                            <li><a class="dropdown-item" href="notification.php   "><span class="glyphicon glyphicon-calendar"></span> notificcation</a></li>
                            <li><a class="dropdown-item" href="parametre.php"><span class="glyphicon glyphicon-cog"></span> Paramètres</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="index.php"><span class="glyphicon glyphicon-off"> Déconnexion</span></a></li>
                        </ul>
                    </div>
                    <span class="pull-right nom-bar"><?php echo $nom_user." ".$prenom_user;?></span>
                </div>
                <?php }else{ ?>
                    <a href="index.php"><h1 class="monlogo" style="text-align: center;">rezA<span id="bleu">Bet</span></h1></a>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>