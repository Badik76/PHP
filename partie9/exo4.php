<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 9th Part - Exo 4</title>
        <link rel="shortcut icon" href="./assets/img/doigt.png"/>
        <meta name="author" content="Badik76" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="./assets/import/Materialize/css/materialize.min.css"  media="screen" />
        <!-- Import personnal stylesheet -->
        <link type="text/css" rel="stylesheet" href="./assets/css/style.css" />
        <!--Let browser know website is optimized for mobile-->
    </head>
    <body>
        <div>
            <h1>PHP - Partie 9 : Les Dates.</h1>
            <h2 class="red-text">Exercice 4 : </h2>
            <p>Afficher le timestamp du jour. <br />
                Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
            <div class="container">
                <div class="row center"><div class="col l3 green-text ">On joue avec l'heure heiiiin. </div>
                    <div class="col l9 red-text">
                        <?php
                        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
                        echo (strftime("%A %d %B %Y %H:%M:%S")).'<br />';
                     //   $timestamp = 1542893330;
                       echo $timestamp = strtotime('02-09-2016 15:00')
                        //echo date('m/d/Y', '1542893330');
                        ?>
                    </div>
                </div>              
            </div>
        </div>
        <div class="container-fluid rem10">
            2018 - Made by Badik 🖕 with <i class="fas fa-heart red-text"></i>
        </div>
        <!--Scripts-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="./assets/import/Materialize/js/materialize.min.js"></script>
        <script src="./assets/js/script.js"></script>
    </body>
</html>