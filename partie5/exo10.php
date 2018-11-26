<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 5th Part - Exo 10</title>
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
            <h1>PPH - Partie 5 : Les Tableaux.</h1>
            <h4 class="red-text">Exercice 10 : </h4>
            <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. <br />
                Cela pourra être, par exemple, de la forme : <br />
                "Le département" + nom du département + "a le numéro" + numéro du département</p>
            <div class="container">
                <div class="row center"><div class="col l3 green-text ">OoOOooh le zoliiie Tabloïdable.</div>
                    <div class="col l9 red-text"><?php
                        $departement = array(
                            "02" => "Aisne",
                            "51" => "Marne",
                            "59" => "Nord",
                            "60" => "Oise",
                            "62" => "Pas-de-Calais",
                            "80" => "Somme",
                        );
                        foreach ($departement as $x => $x_value) {
                            echo ' Je vous présente le département : ' . $x_value . ' ,dont le numéro est le suivant : ' . $x . '<br />';
                        }
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