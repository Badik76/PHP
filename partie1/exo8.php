<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 1st Part - Exo 8</title>
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
            <h4 class="red-text">Exercice 8 : </h4>
            <p>Créer 3 variables. <br />
Dans la première mettre le résultat de l'opération 3 + 4. <br />
Dans la deuxième mettre le résultat de l'opération 5 * 20. <br />
Dans la troisième mettre le résultat de l'opération 45 / 5. <br />
Afficher le contenu des variables.</p>
            <div class="container">
            <div class="row center"><div class="col l6 green-text ">J'affiche le résultat de l'opération 3 + 4 : </div>
                <div class="col l6 red-text"><?php
        $calc1 = 3 + 4;
        $calc2 = 5 * 20;
        $calc3 = 45 / 5;
        echo "$calc1";
        ?></div>
            </div>  
            <div class="row center"><div class="col l6 green-text ">J'affiche le résultat de l'opération 5 * 20 : </div>
                <div class="col l6 red-text"><?php
        echo "$calc2";
        ?></div>
            </div>  
              <div class="row center"><div class="col l6 green-text ">J'affiche le résultat de l'opération 45 / 5 : </div>
                <div class="col l6 red-text"><?php
        echo "$calc3";
        ?></div>
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