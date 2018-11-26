<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 4th Part - Exo 7</title>
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
            <h1>PPH - Partie 4 : Les Fonctions.</h1>
            <h4 class="red-text">Exercice 7 : </h4>
            <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être : <br />
    Homme <br />
    Femme<br />
La fonction doit renvoyer en fonction des paramètres : <br />
    Vous êtes un homme et vous êtes majeur <br />
    Vous êtes un homme et vous êtes mineur <br />
    Vous êtes une femme et vous êtes majeur <br />
    Vous êtes une femme et vous êtes mineur <br />
Gérer tous les cas.</p>
            <div class="container">
            <div class="row center"><div class="col l6 green-text ">Transgenre, Transââge :</div>
                <div class="col l6 red-text"><?php
        $age = rand(1, 36);
        $number = rand(1, 2);
        if ($number == 1) {
            $gender = "Homme";
        } else {
            $gender = "Femme";
        }
        echo $age.' | ';
        echo $gender.' - ';
function sexnage($age, $gender){
        if ($age >= 18){
            if ($gender == "Homme") {
            return "Doudou est un Grand Mââââle !";
        } 
        else 
            {
            return "Louloute est Majeuuure et vaccinée !";
        }} 
        else if ($gender == "Homme") {
            return "Kirikou n'est pas grand mais il est vaillant !";
        } else {
            return "Karaba est une petite sorcière !";
        }
} echo sexnage($age, $gender)
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