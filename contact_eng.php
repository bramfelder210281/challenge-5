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

    <title>Canteen | Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
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
                        <a href="index_eng.php">Home</a>
                    </li>
                    <li>
                        <a href="about_eng.php">About</a>
                    </li>
                    <li>
                        <a href="menu_eng.php">Menu</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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
                    <h2 class="intro-text text-center">Contact
                        <strong>Leeuwlicious</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1705.8160197922825!2d5.716931601059868!3d50.84610500020323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0e98e86c9f62b%3A0x952ffbf18f188c5c!2sVISTA%20college!5e0!3m2!1snl!2snl!4v1605261643030!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>06-12345678</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:vista@cafetaria.nl">vista@cafetaria.nl</a></strong>
                    </p>
                    <p>Address:
                        <strong>Sibemaweg 20
                            <br>6224 DC Maastricht</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>FAQ</strong>
                    </h2>
                    <hr>
                     <div class="FAQ">
                         <p style=
                         "text-align:center;
                         font-size:15px;">
                          Here you can find answers to our frequently asked questions.
                    </p>
                     </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Question 1</strong>
                    </h2>
                    <hr>
                     <div class="FAQ">
                         <p style=
                         "text-align:center;
                         font-size:15px;">
                         <br />
                         <strong>Where can I find the menu?</strong>
                           <br />
                           <br />
                           You can head over to the <a href="menu_eng.php"><u>menu</u></a> page to see our entire menu.
                           <br />
                           <br />
                           <br />  
                          </p>
                     </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Question 2</strong>
                    </h2>
                    <hr>
                     <div class="FAQ">
                         <p style=
                         "text-align:center;
                         font-size:15px;">
                         <br />
                           <strong>What are the opening and closing times?</strong>
                          <br />
                          <br />
                           We are open from Monday till Friday between 9AM to 4PM.
                           <br />
                           <br />
                           <br />
                         </p>  
                     </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Question 3</strong>
                    </h2>
                    <hr>
                     <div class="FAQ">
                         <p style=
                         "text-align:center;
                         font-size:15px;">
                         <br />
                           <strong>How can I get in touch with you guys?</strong>
                           <br />
                           <br />
                           You can find our information on the contact page.
                           <br />
                           <br />
                           <br />
                           </p> 
                     </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Question 4</strong>
                    </h2>
                    <hr>
                     <div class="FAQ">
                         <p style=
                         "text-align:center;
                         font-size:15px;">
                          <strong>how to change the sites language?</strong>
                           <br />
                           <br />
                           There is a small flag located on the homepage, click to switch languages.
                           <br />
                           <br />
                           <br />
                           </p> 
                     </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Question 5</strong>
                    </h2>
                    <hr>
                     <div class="FAQ">
                         <p style=
                         "text-align:center;
                         font-size:15px;">
                          <strong>Where can I find information about the precautions considering the covid-19 pandemic?</strong>
                           <br />
                           <br />
                           On the homepage you can find all the information about the precautions about the pandemic. 
                           <br />
                           <br />
                           <br />
                           </p> 
                     </div>
                </div>
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
