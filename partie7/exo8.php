<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 7th Part - Exo 6</title>
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
            <h1>PHP - Partie 7 : Les Formulaires.</h1>
            <h4 class="red-text">Exercice 6 : </h4>
            <p>Sur le formulaire de l'exercice 6, <br />
                en plus de ce qui est demandé sur les exercices précédent, <br />
                vérifier que le fichier transmis est bien un fichier pdf.</p>               
            <div class="container">
                <div class="row center"><div class="col l3 green-text ">Aller Hop, retirons les données, GRATOS </div>
                    <div class="col l9 red-text">
                        <?php
                        $name = $firstname = $gender = "";
                        include('form8.php');
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