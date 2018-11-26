
<form id="form" method="post" action="user7.php" enctype="multipart/form-data">
        <select name="gender">
        <option>Monsieur</option>
        <option>Madame</option>
    </select>
    Prénom: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br />
    Nom de Famille: <input type="text" name="firstname" value="<?php echo $firstname; ?>">
    <span class="error">* <?php echo $firstnameErr; ?></span>
    <br />            
    <?php 
    if (isset($_GET['exo']) and $_GET['exo']>=6){
         ?>
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
    <?php
    } ?>
</form>
