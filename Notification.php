<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>ENIM Club energetique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/uikit.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <link rel="icon" sizes="144x144" href="images/77.png">
    <script src="script/jquery.js"></script>
    <script src="script/uikit.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/uikit-icons.min.js"></script>
    <script src="script/main.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" uk-parallax="target:#form;background-color:#18bc91,#15a589; viewport: 0.5;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html" >Accueil</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" method="post" action="assets/GetAuth.php">
                                            <div class="form-group">
                                                <input type="email" class="uk-input" style="color:black;border-radius:0px" name="mail" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="uk-input" name="pass" style="color:black;border-radius:0px" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success btn-block">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="uk-padding-large uk-margin-large"></div>
    <div class="uk-padding-large uk-margin-large">

        <?php 
            if(!empty($_GET['M'])){
                if($_GET['M']== 'E'){
                    echo"<h1 class='text-center'> il y a eu un problem veuillez ressaiez :( </h1>";
                }
                if($_GET['M']== 'OK'){
                    echo"<h1 class='text-center'> Vous avez été inscrit pour l'evenement :) </h1>";
                }
                if($_GET['M']== 'H'){
                    echo"<h1 class='text-center'>Developpeur Web & Mobile <BR>Email : hanchi.ahmed@yahoo.fr <br> Tel : (+216) 24 065 231 </h1>";
                }

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
                    <p class="pull-right">Created & Designed by <a href="notification.php?M=H">Hanchi Ahmed</a></p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>