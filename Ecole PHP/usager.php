<?php
include('fonctions\connectDB.php');

global $studentcheck;
if (isset($_GET['submitcours']))
{
    $codecours = $_GET['Codecours'];
    $titre = $_GET['Titre'];
    $duree = $_GET['Duree'];
    $querycours  = "CALL addCours('$codecours', '$titre', '$duree')"; 
    $resultcours = $conn->query($querycours);
    
    if (!$resultcours) 
        {
            die ("Échec d'accès à la base de données : " . $conn->error);            
        }
    else
    {
$prof2 = <<<_END
        <h1>Page Prof</h1>        
            <fieldset>
                <legend>Ajouter un cours</legend>
                <form action='usager.php'>
                    <p><label for="Codecours">Code du cours : </label>
                    <input pattern="[0-9]{5}" maxlength="5" type="text" name="Codecours" id="Codecours" required /></p>
                    <p><label for="Titre">Titre : </label>
                    <input maxlength="45" type="text" name="Titre" id="Titre" required /></p>
                    <p><label for="Duree">Durée (en heure) : </label>
                    <input min="10" max="300" type="number" name="Duree" id="Duree" required /></p>                    
                    <input type="submit" name="submitcours" id="submitcours" value="Soumettre" />                   
                </form>
                
          
            </fieldset>
        <br>
            <fieldset>
                <legend>Supprimer un cours</legend>
                <form action='usager.php'>
_END;
include('fonctions\connectDB.php');

$prof3 = <<<_END

                    <input type="submit" name="submitdel" id="submitdel" value="Supprimer" />
                    
                </form>
          
            </fieldset>
_END;
$coursajoute = "<p>Le cours (" .$codecours.")".$titre. " d'une durée de ". $duree ." heures a été ajouté avec succès!<p>";
echo $prof2;
include('fonctions\testSelect.php');
echo $prof3;
echo $coursajoute;
   
    }

}
?>
<?php
    if (isset($_GET['submitdel']))
    {
    $titrecoursdel = $_GET['coursdel'];
    $querycoursdel  = "CALL deleteCours('$titrecoursdel')"; 
    $resultcoursdel = $conn->query($querycoursdel);
        if (!$resultcoursdel) 
        {
            $coursdelete = "<p>Le cours ". $titrecoursdel . " n'a pu être supprimé puisque des étudiants y sont inscrit.</p>";           
        }         
        else
        {
            $coursdelete = "<p>Le cours ". $titrecoursdel . " a été supprimé avec succès!</p>";       
        }
$prof4 = <<<_END
        <h1>Page Prof</h1>        
            <fieldset>
                <legend>Ajouter un cours</legend>
                <form action='usager.php'>
                    <p><label for="Codecours">Code du cours : </label>
                    <input pattern="[0-9]{5}" maxlength="5" type="text" name="Codecours" id="Codecours" required /></p>
                    <p><label for="Titre">Titre : </label>
                    <input maxlength="45" type="text" name="Titre" id="Titre" required /></p>
                    <p><label for="Duree">Durée (en heure) : </label>
                    <input min="10" max="300" type="number" name="Duree" id="Duree" required /></p>                    
                    <input type="submit" name="submitcours" id="submitcours" value="Soumettre" />                   
                </form>
                
          
            </fieldset>
        <br>
            <fieldset>
                <legend>Supprimer un cours</legend>
                <form action='usager.php'>
_END;
$prof5 = <<<_END

                    <input type="submit" name="submitdel" id="submitdel" value="Supprimer" />
                    
                </form>
          
            </fieldset>
_END;
        
            echo $prof4;
            include('fonctions\testSelect.php');
            echo $prof5;
            echo $coursdelete;
            
        }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel ="stylesheet" href="StyleSheet.css" />
        <title>École PHP</title>
    </head>
    <body>

<?php
include('fonctions\connectDB.php');
if (isset($_GET['submit']))
{
    $username = $_GET['Username'];
    $password = $_GET['Password'];
    
    if ($username === "magister" && $password === "signum")
    {
     
     $student = false;
$prof = <<<_END
        <h1>Page Prof</h1>        
            <fieldset>
                <legend>Ajouter un cours</legend>
                <form action='usager.php'>
                    <p><label for="Codecours">Code du cours : </label>
                    <input pattern="[0-9]{5}" maxlength="5" type="text" name="Codecours" id="Codecours" required /></p>
                    <p><label for="Titre">Titre : </label>
                    <input maxlength="45" type="text" name="Titre" id="Titre" required /></p>
                    <p><label for="Duree">Durée (en heure) : </label>
                    <input min="10" max="300" type="number" name="Duree" id="Duree" required /></p>                    
                    <input type="submit" name="submitcours" id="submitcours" value="Soumettre" />                   
                </form>
                
          
            </fieldset>
        <br>
            <fieldset>
                <legend>Supprimer un cours</legend>
                <form>
_END;

$prof0 = <<<_END

                    <input type="submit" name="submitdel" id="submitdel" value="Supprimer" />
                    
                </form>
          
            </fieldset>
_END;

echo $prof;
include('fonctions\testSelect.php');
echo $prof0;
    }   
    
    
    else
    {      
        $studentcheck = true;
        $query  = "CALL checkLogin('$username', '$password', @name, @resultat)"; 
	$result = $conn->query($query);
	if (!$result) 
        {
            die ("Échec d'accès à la base de données : " . $conn->error);
        }
        if (isset($_GET['submit']) && $studentcheck)
        {
            if (isset($_GET['Username']))
            {
                setcookie('Username', $_GET['Username'], time() + 60 * 60 * 24 * 365, "", "", false, true);
            }                
        }
        $query2 = "SELECT @name AS nom";
        $result2 = $conn->query($query2);
        if ($result2) 
        {
            $res=mysqli_query($conn,$query2); 
            $name=mysqli_fetch_object($res);
        }

        echo "<h1>Page étudiant</h1>" ;   
        echo "<h2>Bonjour " . $name->nom ."!</h2>";
        
        
               
        
        
        
$student = <<<_END
<fieldset><br>
<legend>Inscription à un cours</legend>                
<form>
_END;


echo $student;
include('fonctions\coursInscription.php');
$student2 = <<<_END
<input type="submit" name="submitins" id="submitins" value="Inscription" />                    
</form>       
</fieldset>
<fieldset>
<legend>Mes cours</legend>
_END;
$student3 = <<<_END


</fieldset>

_END;
echo $student2;
include('fonctions\coursaffiche.php');
echo $student3;
        }
    }
include('fonctions\connectDB.php');
if (isset($_GET['submitins']))
        {   
            global $studentcookie;
            $studentcookie = $_COOKIE['Username'];
            $titreajout = $_GET['coursinsc'];
            $queryinsc  = "CALL addInscription('$studentcookie', '$titreajout')"; 
            $resultinsc = $conn->query($queryinsc);                
    
            if (!$resultinsc) 
            {                
                die ("Échec d'accès à la base de données : " . $conn->error);            
            }
            else
            {          
                echo "<h1>Page étudiant</h1>" ;   
                echo "<h2>Bonjour " . $_COOKIE['Username'] ."!</h2>";
                $student4 =<<<_END
<fieldset><br>
<legend>Inscription à un cours</legend>                
<form>
_END;
                echo $student4;
include('fonctions\coursInscription.php');
$student5 = <<<_END
<input type="submit" name="submitins" id="submitins" value="Inscription" />                    
</form>       
</fieldset>
<fieldset>
<legend>Mes cours</legend>
_END;
$student6 = <<<_END


</fieldset>

_END;
echo $student5;
include('fonctions\coursaffiche.php');
echo $student6;
            }
        }

include('fonctions\footer.php');
?>


        

    </body>
</html>
