<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 1st Part - Exo 3</title>
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
            <p class="red-text">Exercice 3 : </p>
            <p>Créer une variable km. L'initialiser à 1. Afficher son contenu.<br />
                Changer sa valeur par 3. Afficher son contenu.<br />
Changer sa valeur par 125. Afficher son contenu.</p>
            <div class="row center ml200"><div class="col 6 green-text ">J'affiche ma variable $km = 1 </div>
                <div class="col 6 red-text"><?php
        $km = 1;
        echo $km;
        ?></div>
                <div class="col 4 green-text">J'affiche ma variable $km = 3 </div>
                  <div class="col 4 red-text"><?php
        $km = 3;
        echo $km;
        ?></div>
                <div class="col 4 green-text">J'affiche ma variable $km = 125 </div>
                <div class="col 4 red-text"><?php
        $km = 125;
        echo $km;
        ?></div>
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