<?php session_start();
    include_once("includes/inloguitlog.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>kantine | About</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- header -->
    <?php Include("includes/header.php"); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Leeuwlicious</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="menu.php">Menu</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Over
                        <strong>Leeuwlicious</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/tonijn.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>Leeuwlicious is een van de beste school cafetaria's door heel limburg.</p>
                    <p>We verkopen een groot aanbod van verse broodjes en ook snacks. We serveren gerechten met vlees en non-vegan producten, maar hebben ook een groot assortiment van vegan/vegitarisch eten.</p>
                    <p>Een van onze favorieten is het tonijnbroodje. Het is gezond, zoals de rest van onze broodjes, want dat is hoogstnodig voor de studenten. We verkopen ook een aantal minder gezonde producten, zoals energy drank of chocola.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Ons
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/per3.jpg" alt="">
                    <h3>Martien Meiland
                        <small>"Wat goeeed!!" Ja, ja dat klopt, Martien Meiland is onze gastheer. Hij serveert het eten aan onze studenten.</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/per5.jpg" alt="">
                    <h3>Bart Wijenberg
                        <small>Bart is onze sous chef. Hij wordt vaak uitgescholden door Gordon, maar dat is onvermijdbaar als je met Ramsey moet werken.</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/per6.jpg" alt="">
                    <h3>Gordon Ramsey
                        <small>Dat heb je goed gehoord, Ramsey is onze hoofd kok. De studenten zijn meestal bang voor hem, daarom laten we hem in de keuken werken, weg van dingen om te oordelen.</small>
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

      <!-- fOOTER -->
      <?php Include("includes/footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
