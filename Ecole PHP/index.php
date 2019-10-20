<?php
if (isset($_GET['logout']))
{
    setcookie('Username', "", time() -3600, "", "", false, true);
   
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>École PHP</title>
    </head>   

<?php
include('fonctions\connectDB.php')
?>
    <body>
        <h1>Accueil</h1>        
            <fieldset>
                <legend>Indentifiez-vous</legend>

                <form method="GET" action="usager.php">
                    <p><label for="Username">Username : </label>
                    <input type="text" name="Username" id="Username" autofocus="true" required /></p>
                    <p><label for="Password">Password : </label>
                    <input type="password" name="Password" id="Password" required/></p>
                    <input type="submit" value="Valider" name="submit" id="submit"/>
                </form>           
            </fieldset>
        <p>Si vous n'avez pas de compte, vous pouvez vous en créer un en cliquant sur le bouton ci-dessous.</p>
        <form action="newStudent.php">
            <input type="submit" value="Créer un compte" name="newstud" id="newstud"/>
        </form>
      
    </body>
</html>
        

    

