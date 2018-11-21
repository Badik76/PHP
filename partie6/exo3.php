<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 6th Part - Exo 3</title>
        <link rel="shortcut icon" href="assets/img/doigt.png"/>
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
            <h1>PHP - Partie 6 : Les Paramètres d'URL.</h1>
            <h4 class="red-text">Exercice 3 : </h4>
            <p>Faire une page index.php. <br />
                Tester sur cette page que tous les paramètres de cette URL existent et les afficher: <br />
                <a href='exo3.php?startDate=2/05/2016&endDate=27/11/2016'>index.php?startDate=2/05/2016&endDate=27/11/2016</a></p>
            <div class="container">
                <div class="row center"><div class="col l6 green-text "><a href='exo3.php?startDate=24/12/2018&endDate=01/01/2019'>Aller Hop, retirons les données, GRATOS !</a></div>
                    <div class="col l6 red-text"><?php
                        if (isset($_GET['startDate'], $_GET['endDate'])) {
                            echo 'Date de naissance : ' . $_GET['startDate'] . ' | Date de mort : ' . $_GET['endDate'] . '<br />'
                            . 'Mouhahahahhahahahah ! Welcome Hell';
                        } else {
                            echo 'Y\'à une couille dans le paté! ';
                        }
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
        <script src="assets/import/Materialize/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>