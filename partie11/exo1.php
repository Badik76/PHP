<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 11th Part - Calculatrice</title>
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
            <h1>PHP - Partie 11 : TP</h1>
            <h2 class="green-text">Calculatrice</h2>
            <p>Compléter le fichier fourni pour que la calculatrice fonctionne.<br />
                <b>Bonus</b> : Ajouter un bouton de remise à zéro.</p>
            <div class="container">
                <div class="row center">
                    <div class="col red-text">
                        <h1>Une calculatrice en PHP</h1>
                        <form action="exo1.php" method="post">
                            <input type="text" name="chiffre1" value="0"/>
                            <input type="text" name="chiffre2" value="0"/>
                            <input type="submit" name="addition" value="+"/>
                            <input type="submit" name="soustraction" value="-"/>
                            <input type="submit" name="multiplication" value="*"/>
                            <input type="submit" name="division" value="/"/>
                        </form>
                        <p>Résultat : </p>
                        <?php
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