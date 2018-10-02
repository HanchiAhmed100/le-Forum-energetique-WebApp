<?php 
    session_start();
    include_once 'assets/Verif.php';
    $Name = $_SESSION['nom'];
    $LastName = $_SESSION['prenom'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/uikit.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <script src="script/jquery.js"></script>
    <script src="script/uikit.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/uikit-icons.min.js"></script>
    <script src="script/main.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="index.html">Accueil</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Dashboard.php">Dashboard</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <?php
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>'.$Name.' '.$LastName.'</b> <span class="caret"></span></a>';
                    ?>
                        <ul class="dropdown-menu">
                        <li><a href="dashboard.php">Gestion des participants</a></li>
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="assets/Logout.php">Deconnexion</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="uk-padding-small"></div>
    <div class="uk-padding-small">

        <?php 
            include_once 'Class/event.class.php';
            $post = new event();
            $p = $post->GetOneNew($_GET['u']);
            while($s = $p -> fetch() ){
                echo'
                    <h1 class="uk-heading-line uk-text-center"><span style="font-size:38px">'.$s['groupName'].'</span></h1>
                    <ul class="uk-list uk-list-striped">
                        <li>Nom du Leader : '.$s['LName'].'</li>
                        <li>Mail du Leader : '.$s['LMail'].'</li>
                        <li>Telephone du Leader : '.$s['LTel'].'</li>
                        <li>Nom du 2eme Participant : '.$s['SName'].'</li>
                        <li>Mail du 2eme Participant : '.$s['SMail'].'</li>
                        <li>Telephone du 2eme Participant : '.$s['STel'].'</li>
                        <li>Nom du 3eme Participant : '.$s['TName'].'</li>
                        <li>Mail du 3eme Participant : '.$s['TMail'].'</li>
                        <li>Telephone du 2eme Participant : '.$s['TTel'].'</li>
                        <li>Nom du 4eme Participant : '.$s['FName'].'</li>
                        <li>Mail du 4eme Participant : '.$s['FMail'].'</li>
                        <li>Nom du 4eme Participant : '.$s['FTel'].'</li>
                        <li>Univesité : '.$s['university'].'</li>
                        <li>Cité : '.$s['city'].'</li>
                        <li class="uk-text-center">Ce groupe a été inscrit à : '.$s['create_at'].'</li>
                    </ul>
                
                ';
            }
        ?>
    </div>

</div>
</div> 
<section></section>
<footer class="footer uk-padding-large uk-section uk-section-secondary uk-light" id="foot">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="muted-text uk-text-left">Navigation : </h3>
                            <ul class="uk-list uk-text-left">
                                <li class="active"><a href="index.html#home-slide" >Accueil</a></li>
                                <li><a href="index.html#persentation">Presentation</a></li>
                                <li><a href="index.html#objectifs" >Objectifs</a></li>
                                <li><a href="index.html#responsable">Responsable</a></li>
                                <li><a href="index.html#event">La competition Energétique</a></li>
                                <li><a href="index.html#form" >Inscription à la competition </a></li>
                                <li><a href="index.html#foot">Contact </a></li>

                        </div>
                    </div>
                </div>
                <div class="col-sm-5 uk-margin">
                    <div class="row text-justify">
                        <div class="col-xs-12">
                            <H4>Vous pouvez nous rejoindre sur <a href="https://www.facebook.com/EnergyClub2018/"><i class="fa fa-facebook fa-2x"></i></a></H4>
                        </div>
                        <div class="col-xs-12">
                            <h4><i class="fa fa-phone"></i> Telephone : 27 276 821</h4>
                        </div>
                        <div class="col-xs-12">
                            <h4><i class="fa fa-comment"></i> Messanger : @EnergyClub2018 </h4>
                        </div>
                        <div class="col-xs-12">
                            <h4><i class="fa fa-map-marker"></i> Adresse : Rue Ibn El Jazzar - Monastir - 5000 Rue Ibn Jazzar, Monastir 5035</h4>
                        </div>
                        <div class="col-xs-12">
                            <h4><i class="fa fa-globe"></i>
                                <a href="http://www.enim.rnu.tn/index.php/fr/">Site officiel de l'ENIM</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="uk-light">
            <div class="container">
                <div class="row">
                    <p>&copy; All right reserved 2018 </p>
                    <p class="pull-right">Created & Designed by <a href="#">Hanchi Ahmed</a></p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>