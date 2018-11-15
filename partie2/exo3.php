<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 2nd Part - Exo 3</title>
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
            <h4 class="red-text">Exercice 3 : </h4>
            <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
            <ul><li>Homme</li>
                <li>Femme</li></ul>
            <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ol><li>Vous êtes un homme et vous êtes majeur</li>
    <li>Vous êtes un homme et vous êtes mineur</li>
    <li>Vous êtes une femme et vous êtes majeure</li>
    <li>Vous êtes une femme et vous êtes mineure</li></ol>
<p>Gérer tous les cas.</p>
            <div class="container">
            <div class="row center">
                <div class="col l6 red-text"><?php
        $age = rand(1, 36);
        $number = rand(1, 2);
        if ($number == 1) {
            $gender = "Homme";
        } else {
            $gender = "Femme";
        }

        if ($age >= 18){
            if ($gender == "Homme") {
            echo "Doudou est un Grand Mââââle !";
        } 
        else 
            {
            echo "Louloute est Majeuuure et vaccinée !";
        }} 
        else if ($gender == "Homme") {
            echo "Kirikou n'est pas grand mais il est vaillant !";
        } else {
            echo "Karaba est une petite sorcière !";
        }
        ?>
                </div>
            <div class="col l6 green-text "><?php echo "$age ans et $gender"?></div>
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