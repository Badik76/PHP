<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 8th Part - Exo 3</title>
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
            <h2 class="red-text">Exercice 3 : </h2>
            <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.<br />
                A la validation du formulaire, stocker les informations dans un cookie.</p>
            <div class="container">
                <div class="row center"><div><p  class="green-text ">Aller Hop, retirons les données, GRATOS </p>
                        <h3>Formulaire d'inscription </h3>
                        <form class="col l6" name="login" method="post" action="exo3.php">
                            Pseudo: <input type="text" name="username"><br>
                            Password: <input type="password" name="password"><br>
                            S'enregistrer: <input type="checkbox" name="rememberme" value="1"><br>
                            <input type="submit" name="submit" value="Login!" />
                    </div>
                    <div class="col l6 red-text">
                        <?php
                        /* These are our valid username and passwords */
                        setcookie('username', $_POST['username'], time() + 60 * 60 * 24 * 365, '*'); // '*' permet d'avoir acces au cookie partout sur le site.
                        setcookie('password', md5($_POST['password']), time() + 60 * 60 * 24 * 365, '*');
                        $_COOKIE['username'];
                        $_COOKIE['password'];
                        echo $_COOKIE['username'] . ' | ' . $_COOKIE['password'];                        
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