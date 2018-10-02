<?php 
    session_start();
    include_once 'assets/Verif.php';
    $id = $_SESSION['id'];
    $Name = $_SESSION['nom'];
    $LastName = $_SESSION['prenom'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>ENIM Club energetique</title>
     <link rel="icon" sizes="144x144" href="images/77.png">
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

    <div class="uk-padding-small">
    <?php
                if(!empty($_GET['u'])){
                    echo' vous allez effacer un compte d\'admin ! pour continuer <a href="?supp='.$_GET['u'].'"> cliquer ici </a>';
                }
                if(!empty($_GET['E'])){
                    if($_GET['E'] == "OK"){
                        echo 'Vous avez ajouter un Admin ';
                    }

                    if($_GET['E'] == "E"){
                        echo 'il y a eu un problem veuillez ressaiez !';
                    }
                    
                }
            ?>
        <h2>Les admin du site : </h2>
        <div class="uk-overflow-auto">
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Nom et Prenom</th>
                    <th>Adresse Mail</th>
                </tr>
            </thead>
            <tbody>

        <?php 
            include_once 'Class/login.class.php';
            $post = new login();
            $p = $post->getUser($id);
            while($s = $p -> fetch() ){
                echo '<tr>
                        <td><a href="Admin.php?u='.$s['id'].'""><i class="fa fa-remove"></i></a></td>
                        <td>'.$s['nom'].' '.$s['prenom'].'</td>
                        <td>'.$s['mail'].'</td>
                    </tr>
            ' ;
            }
        
        
        ?>


            </tbody>
        </table>
        <div class="col-sm-6 col-sm-offset-3 text-center">
            <h2>Pour Ajouter un autre admin :</h2>
            <form method="post">
                <input class="uk-margin uk-input" type="text" placeholder="Nom :" name="nom" required>
                <input class="uk-margin uk-input" type="text" placeholder="Prenom :" name="prenom" required>
                <input class="uk-margin uk-input" type="mail" placeholder="Adresse Mail :" name="mail" required>
                <input class="uk-margin uk-input" type="password" placeholder="Mot de Passe :" name="pass" required>
                <input type="submit" name="set" class=" btn-block uk-button">
            </form>
        </div>
    </div>
</div> <svg id="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" style="position:relative; padding-bottom:o; margin-bottom:0; fill: #222; stroke: #222; bottom:0px;" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0 100 C 20 0 20 0 100 100 Z"></path></svg>
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
                    <p class="pull-right">Created & Designed by <a href="notification.php?M=H">Hanchi Ahmed</a></p>
                </div>
            </div>
        </div>
    </footer>
    <?php
        if(isset($_POST['set'])){
             include_once 'class/login.class.php';
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $mail=$_POST['mail'];
            $motdepasse=$_POST['pass'];
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $login = new login();
                $login->check($mail);
                $hashMDP = $login->passwordhash($motdepasse);	
                $login->register($nom,$prenom,$mail,$hashMDP);
                header('location:Admin.php?E=Ok');
            }else{
                header('location:Admin.php?E=E');
            }

        }
        if(!empty($_GET['supp'])){
            include_once 'Class/login.class.php';
            $p = new login();
            $p -> drop($_GET['supp']);
            header('location:admin.php');
        }
    ?>

</body>
</html>