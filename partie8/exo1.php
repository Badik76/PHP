<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 8th Part - Exo 1</title>
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
            <h1>PHP - Partie 8 : Variables superglobales, sessions et cookies.</h1>
            <h2 class="red-text">Exercice 1 : </h2>
            <p>Faire une page HTML permettant de donner à l'utilisateur :<br />
                son User Agent<br />
                son adresse ip<br />
                le nom du serveur</p>
            <div class="container">
                <div class="row center"><div class="col l3 green-text ">Aller Hop, retirons les données, GRATOS </div>
                    <div class="col l9 red-text">
                        <?php
                        echo $_SERVER['HTTP_USER_AGENT'] . '<br />'; // recup le navigateur/environnement
                        echo $_SERVER['SERVER_ADDR'] . '<br />'; //recup l'IP
                        echo $_SERVER['SERVER_NAME'] . '<br />'; // nom du serveur hébergeur
                        //  echo $_SERVER['HTTP_HOST']; idem server_name
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