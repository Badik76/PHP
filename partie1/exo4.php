<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 1st Part - Exo 4</title>
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
            <h1>PPH - Partie 1 : Les Variables.</h1>
            <p class="red-text">Exercice 4 : </p>
            <p>Créer une variable de type string, <br />une variable de type int, <br /> une variable de type float, <br /> une variable de type booléan <br /> et les initialiser avec une valeur de votre choix.
Les afficher.</p>
            <div class="container">
            <div class="row center"><div class="col l6 green-text ">J'affiche ma variable "string" </div>
                <div class="col l6 red-text"><?php
        $string = "Nous ne vennons pas du même monde, Bertonni !";
        echo $string;
        ?></div></div>
                <div class="row "><div class="col l6 green-text center">J'affiche ma variable "int" </div>
                  <div class="col l6 red-text center"><?php
        $int = 12;
        echo $int;
        ?></div></div>
                <div class="row center"><div class="col l6 green-text">J'affiche ma variable "float" </div>
                <div class="col l6 red-text"><?php
        $float = 666.666;
        echo $float;
        ?></div>
        </div>
                <div class="row center"><div class="col l6 green-text">J'affiche ma variable "booléan" </div>
                <div class="col l6 red-text"><?php
        $bool = 9;
        if ($bool <= 10){
        echo $bool;
        }
        ?></div>
        </div>
            </div></div>
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