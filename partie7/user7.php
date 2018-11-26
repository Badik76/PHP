<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>PHP 7th Part - User</title>
        <link rel="shortcut icon" href="./assets/img/doigt.png"/>
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
            <h1>PHP - Partie 7 : Les Formulaires.</h1>
            <h2 class="red-text">User.php</h2>
            <p>Faire une page index.php. <br />
                Créer un formulaire demandant le nom et le prénom. <br />
                Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
            <div class="container">
                <div class="row center"><div class="col l3 green-text ">Les Beaux résultats du Formulaire !</div>
                    <div class="col l9 red-text"><pre><?php
// define variables and set to empty values
                            $nameErr = $firstnameErr = $comment = $gender = "";
//                            echo __FILE__.'<br />';                         
//                            echo basename(__FILE__);

                            if (isset($_POST['name']) and isset($_POST['firstname']) and isset($_POST['comment']) and isset($_POST['gender'])) {

                                $name = test_input($_POST["name"]);
                                // check if name only contains letters and whitespace

                                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                                    $nameErr = "Seulement des lettres et des espaces";
                                }

                                $firstname = test_input($_POST["firstname"]);
                                // check if name only contains letters and whitespace

                                if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
                                    $firstnameErr = "Seulement des lettres et des espaces";
                                }
                            }

                            function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }

                            echo $_POST['gender'] . ' <br />';

                            echo $_POST["name"] . ' est mon prénom tandis que ' . $_POST["firstname"] . ' est mon nom de famille <br />';
                            
                            $target_dir = "./";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
                            if (isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                if ($check !== false) {
                                    echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;                   
                                } else {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                }
                            }
// Check if file already exists
                            if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }
// Check file size
                            if ($_FILES["fileToUpload"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
// Allow certain file formats
                            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
// Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                                    echo $_FILES["$target_file"];
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                            ?></pre>
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
  <script src="./assets/import/Materialize/js/materialize.min.js"></script>
  <script src="./assets/js/script.js"></script>
</body>
</html>