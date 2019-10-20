<!DOCTYPE html>
<?php
include('fonctions\connectDB.php');
if (isset($_GET['submit']))
{
    $username = $_GET['newUsername'];
    $password = $_GET['newPassword'];
    $nom = $_GET['newNom'];
    $notel = $_GET['notel'];
    $email = $_GET['courriel'];
    $query  = "CALL addStudent('$username', '$password', '$nom', '$notel', '$email')"; 
	$result = $conn->query($query);
	if (!$result) 
        {
            die ("Échec d'accès à la base de données : " . $conn->error);
            $confirm = "<p>Il y a eu une erreur lors de la création de votre compte.</p>";
        }
        else
        {
        $confirm = <<<_END
            <p>Votre compte a été enregistré avec succès.</p>
            <form action="index.php">
            <input type="submit" value="Login" name="login" id="login"/>
        </form>            
_END;
        
        }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>École PHP</title>
    </head> 
<?php
include('fonctions\connectDB.php')
?>
    <body>
        <h1>Inscription d'un nouvel étudiant</h1>        
            <fieldset>
                <legend>Saisissez les informations ci-dessous</legend>

                <form method="GET" action="newStudent.php">
                    <p><label for="newUsername">Username : </label>
                        <input maxlength="15" type="text" name="newUsername" id="newUsername" autofocus="true" required /></p>
                    <p><label for="newPassword">Password : </label>
                        <input maxlength="15" type="password" name="newPassword" id="newPassword" required/></p>                    
                    <p><label for="newNom">Nom : </label>
                        <input maxlength="45" type="text" name="newNom" id="newNom" autofocus="true" required /></p>
                    <p><label for="notel">No de téléphone : </label>
                        <input maxlength="10" type="tel" pattern="[0-9]{10}" name="notel" id="notel" required/></p>
                    <p><label for="courriel">Courriel : </label>
                        <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="45" type="email" name="courriel" id="courriel" autofocus="true" required /></p>
                    <input type="submit" value="Valider" name="submit" id="submit"/>
                </form>           
            </fieldset>
        <?php
        if (isset($_GET['submit']))
        {
        echo $confirm; 
        }?>
    </body>
</html>
