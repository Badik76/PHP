<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 8th Part - Exo 2</title>
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
            <h2 class="red-text">Exercice 2 : </h2>
            <p>Sur la page index, faire un liens vers une autre page.<br />
                Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. <br />
                Ces variables auront été définies directement dans le code.<br />
                Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
            <div class="container">
                <div class="row center"><div class="col l3 green-text ">Aller Hop, retirons les données, GRATOS </div>
                    <div class="col l9 red-text">
                        <?php
                        echo 'Bienvenue à la page numéro 1';

                        $_SESSION['lastname'] = 'OUSSAMA';
                        $_SESSION['firstname'] = 'Ben Laden';
                        $_SESSION['age'] = 'Mort depuis quelques temps, y parait.';

// Fonctionne si le cookie a été accepté
                        echo '<br /><a href="exo2_1.php">exo2_1</a>';
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