<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 4th Part - Exo 4</title>
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
            <h4 class="red-text">Exercice 4 : </h4>
            <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner : <br />
                Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième <br />
                Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième <br />
                Les deux nombres sont identiques si les deux nombres sont égaux</p>
            <div class="container">
                <div class="row center"><div class="col l6 green-text ">On compare tranquillou</div>
                    <div class="col l6 red-text"><?php
                        $number1 = rand(0, 100);
                        $number2 = rand(0, 100);
                        echo $number1 . '|';
                        echo $number2 . ' - ';

                        function comparatenumber($number1, $number2) {
                            if ($number1 > $number2) {
                                return $number1 . ' est plus grand que tout';
                            } else if ($number1 < $number2) {
                                return $number1 . ' est ridicule à coté de ' . $number2;
                            } else {
                                return 'les deux nombres sont identiques maggle !';
                            }
                        }

                        echo comparatenumber($number1, $number2)
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