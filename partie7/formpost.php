<form method="post" action="userpost.php">  
    Prénom: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br />
    Nom de Famille: <input type="text" name="firstname" value="<?php echo $firstname; ?>">
    <span class="error">* <?php echo $firstnameErr; ?></span>
    <br />            
    <input type="submit" name="submit" value="Submit">  
</form>