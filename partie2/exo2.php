<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 2nd Part - Exo 2</title>
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
            <h1>PPH - Partie 2 : Les Conditions.</h1>
            <h4 class="red-text">Exercice 2 : </h4>
            <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur. <br />
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. <br />
Bonus : L'écrire de deux manières différentes.</p>
            <div class="container">
            <div class="row center">
                <div class="col l6 red-text"><?php
          $number = rand(1, 2);
          if ($number == 1) {
              $isEasy = "true";
          } else {
              $isEasy = "false";
          }

        if ($isEasy == "true"){
            echo "C'est facile, va au sexshop !";
        } 
        else 
            {
            echo "C'est difficile, retourne au bac à sable !";
            echo " <br /> $isEasy";
        }?>
                </div>
                <div class="col l6 green-text "><?php echo "$IsEasy"?></div>
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