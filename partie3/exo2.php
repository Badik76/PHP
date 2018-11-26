<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 3rd Part - Exo 2</title>
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
            <h1>PPH - Partie 3 : Les Boucles.</h1>
            <h4 class="red-text">Exercice 2 : </h4>
            <p>Créer deux variables. <br />
                Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. <br />
Tant que la première variable n'est pas supérieure à 20 : <br />

    multiplier la première variable avec la deuxième <br />
    afficher le résultat <br />
    incrementer la première variable</p>
            <div class="container">
            <div class="row center">
                <div class="col l6 red-text"><?php
        $number1 = 0;
        $number2 = rand(1, 100);      

        for ($n=0; $n<20; $n++) {
            echo ($number1 * $number2).'  ';
            ++$number1;
                                }
   ?>
                </div>
                <div class="col l6 green-text "> <?php echo "$number1 et $number2" ?> </div>
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