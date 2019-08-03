<?php
    session_start();
$characts = 'abcdefghijklmnopqrstuvwxyz';
$characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$characts .= '1234567890';
$code_aleatoire = '';

for($i=0;$i < 10;$i++)
{
    $code_aleatoire .= $characts[ rand() % strlen($characts) ];
}

    echo $_SESSION['user']=$code_aleatoire;

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>rezABet | accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles.css">

<body  data-target=".navbar" data-offset="60">
<header class="header-fixed">
    <nav class="navbar navbar-default navbar-fixed-top" id="menu">
        <div class="container">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <h1 id="monlogo">rezA<span id="bleu">Bet</span></h1>

                    <!--<img src="img/logo.png" class="img-cirle img-responsive logo" id="monlogo">-->
                </div>
                <div class="collapse navbar-collapse" id="monmenu">
                    <ul class="nav navbar-nav navbar-right">
                        <li style="margin-right: 180px;"><a href="accueil.php"><p class="connexion">connexion</p></a></li>
                        <li class="active"><a href="accueil.php">accueil</a></li>
                        <li><a href="">Faire un pari</a></li>



                    </ul>

                </div>
            </div>
        </div>
    </nav>
</header>
<!------------------------------Fin header------------------------------------------------------->
<!------------------------------debut slider------------------------------------------------------->

<div class="container-fluid" id="accueil" style="margin-top: 65px">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div id="moncarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#moncarousel" data-slide-to="0" class="active"></li>
                <li data-target="#moncarousel" data-slide-to="1"></li>
                <li data-target="#moncarousel" data-slide-to="2"></li>
                <li data-target="#moncarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="../public/img/slide/image1.jpg" class="defil" style="width: 100%; height:440px;">
                    <div class="carousel-caption">
                        <h3>Ici c'est La conquête des gains</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="../public/img/slide/image2.jpg" style="width: 100%; height: 440px;">
                    <div class="carousel-caption">
                        <h4>À l'assaut de tous les championnats</h4>
                    </div>
                </div>
                <div class="item ">
                    <img src="../public/img/slide/image4.jpg" style="width: 100%; height: 440px;">
                    <div class="carousel-caption">
                        <h3>Nous vous offrons les meilleurs côtes</h3>
                    </div>
                </div>
                <div class="item ">
                    <img src="../public/img/slide/image5.jpg" style="width: 100%; height: 440px;">
                    <div class="carousel-caption">
                        <h3>Gagnez de l'argent en regardant votre sport favori</h3>
                    </div>
                </div>

            </div>

            <a href="#moncarousel" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a href="#moncarousel" class="right carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <section id="feedback">
            <h3 class="text-center text-uppercase">prochain match</h3>
            <div id="feedbackcarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#feedbackcarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#feedbackcarousel" data-slide-to="1"></li>
                    <li data-target="#feedbackcarousel" data-slide-to="2"></li>
                    <li data-target="#feedbackcarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">

                    <div class="item ">
                        <h6><em>"Le classico d'espagne, le plus match le plus suivi du monde."</em></h6>
                        <img src="">
                        <img src="../public/img/slide/match1.jpg" class="img-responsive" style="width: 100%; height: 260px;">
                        <h6 class="commentateur text-uppercase text-center">réal de madrid <span style="font-size: 30px">vs </span>barcelone</h6>
                    </div>
                    <div class="item">
                        <h6><em>"le derbi de France opposant les clubs mythiques de la ligue1 !"</em></h6>
                        <img src="../public/img/slide/match2.jpeg" class="img-responsive" style="width: 100%; height: 260px;">
                        <h6 class="commentateur text-uppercase text-center">olympique de marseille <span style="font-size: 30px">vs </span>paris saint-germain</h6>
                    </div>
                    <div class="item active">
                        <h6><em>"Duel au sommet du big four entre les sky blues et les reds."</em></h6>
                        <img src="../public/img/slide/match3.jpg" class="img-responsive" style="width: 100%; height: 260px;">
                        <h6 class="commentateur text-uppercase text-center">Manchester city <span style="font-size: 30px">vs </span>liverpool</h6>
                    </div>
                    <div class="item ">
                        <h6><em>"La Juve compte imposer son rythme dès ce début de championnat"</em></h6>
                        <img src="../public/img/slide/match4.png" class="img-responsive" style="width: 100%; height: 260px;">
                        <h6 class="commentateur text-uppercase text-center">Juventus <span style="font-size: 30px">vs </span>Milan Ac</h6>
                    </div>

                </div>


            </div>
        </section>
    </div>
</div>
<div class="container" style="margin-top: 10px">
    <table class="table-bordered table-responsive table-striped" style="width: 100%">
        <thead>
            <th class="text-center">Match</th>
            <th class="text-center">pronostic</th>
            <th class="text-center">mise</th>
            <th class="text-center">option</th>
        </thead>
        <tbody>
            <form action="/index.php" method="post">
                <tr>
                    <td>
                        <h6 class="commentateur text-uppercase text-center">
                            réal madrid <span style="font-size: 15px; font-weight: bold">vs </span>barcelone
                        </h6>
                    </td>
                    <td class="text-center">

                        <label for="rma">RMA</label><input type="radio" name="gender" value="male" id="rma" style="margin-right: 50px">
                        <label for="nul">NUL</label><input type="radio" name="gender" value="female" id="nul" style="margin-right: 50px">
                        <label for="bcn">BCN</label><input type="radio" name="gender" value="other" id="bcn">

                    </td>
                    <td>
                        <input type="number"> <span style="font-size: 20px">£</span>
                    </td>

                    <td class="text-center">
                        <button class="btn btn-success" type="submit" name="valider" value="rmabcn">valider</button>
                    </td>
                </tr>
            </form>
            <form action="/index.php" method="post">
                <tr>
                    <td>
                        <h6 class="commentateur text-uppercase text-center">
                            Marseille <span style="font-size: 15px; font-weight: bold">vs </span>paris saint-germain
                        </h6>
                    </td>
                    <td class="text-center">

                        <label for="om">OM</label><input type="radio" name="ompsg" value="om" id="om" style="margin-right: 50px">
                        <label for="nul">NUL</label><input type="radio" name="ompsg" value="nul" id="nul" style="margin-right: 50px">
                        <label for="psg">PSG</label><input type="radio" name="ompsg" value="psg" id="psg">

                    </td>
                    <td>
                        <input type="number" name="amount_ompsg"> <span style="font-size: 20px">£</span>
                    </td>

                    <td class="text-center">
                        <button class="btn btn-success" type="submit" name="valider" value="ompsg">valider</button>
                    </td>
                </tr>
            </form>
            <form action="/index.php" method="post">
                <tr>
                    <td>
                        <h6 class="commentateur text-uppercase text-center">
                            City <span style="font-size: 15px; font-weight: bold">vs </span>Liverpool
                        </h6>
                    </td>
                    <td class="text-center">

                        <label for="city">CITY</label><input type="radio" name="cityliv" value="city" id="city" style="margin-right: 50px">
                        <label for="nul">NUL</label><input type="radio" name="cityliv" value="nul" id="nul" style="margin-right: 50px">
                        <label for="liv">LIV</label><input type="radio" name="cityliv" value="liv" id="liv">

                    </td>
                    <td>
                        <input type="number" name="amount_cityliv"> <span style="font-size: 20px">£</span>
                    </td>

                    <td class="text-center">
                        <button class="btn btn-success" type="submit" name="valider" value="cityliv">valider</button>
                    </td>
                </tr>
            </form>
            <form action="../index.php" method="post">
                <tr>
                    <td>
                        <h6 class="commentateur text-uppercase text-center">
                            Juventus <span style="font-size: 15px; font-weight: bold">vs </span>Milan
                        </h6>
                    </td>
                    <td class="text-center">

                        <label for="juv">JUV</label><input type="radio" name="juvmil" value="juv" id="juv" style="margin-right: 50px">
                        <label for="nul">NUL</label><input type="radio" name="juvmil" value="nul" id="nul" style="margin-right: 50px">
                        <label for="mil">MIL</label><input type="radio" name="juvmil" value="mil" id="mil">

                    </td>
                    <td>
                        <input type="number" name="amount_juvmil"> <span style="font-size: 20px">£</span>
                    </td>

                    <td class="text-center">
                        <button class="btn btn-success" type="submit" name="valider" value="juvmil">valider</button>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>

</div>
<

<script src="../public/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
