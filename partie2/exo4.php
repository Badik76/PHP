<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 2nd Part - Exo 4</title>
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
            <h4 class="red-text">Exercice 4 : </h4>
            <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. <br />
                Cette échelle va de 1 à 9. <br />
Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
            <table>
                 <tr>
                    <th>Magnitude</th>
                    <th>Phrase</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Micro-séisme impossible à ressentir.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Séisme capable de tout détruire sur une très vaste zone.</td>
                </tr>
             </table>
            <p>Gérer tous les cas. <br />
Utilser autre chose que des if else</p>
            <div class="container">
            <div class="row center">
                <div class="col l6 red-text"><?php
        $magnitude = rand(1,9);
        $arrayMagnitude[]='Micro-séisme impossible à ressentir';
        $arrayMagnitude[]='Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
        $arrayMagnitude[]='Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
        $arrayMagnitude[]='Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
        $arrayMagnitude[]='Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
        $arrayMagnitude[]='Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
        $arrayMagnitude[]='Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
        $arrayMagnitude[]='Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
        $arrayMagnitude[]='Séisme capable de tout détruire sur une très vaste zone.';
        echo $arrayMagnitude[$magnitude];
        
        ?>
                </div>
            <div class="col l6 green-text "><?php echo "$magnitude"?></div>
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