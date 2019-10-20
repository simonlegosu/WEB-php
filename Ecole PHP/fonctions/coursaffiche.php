<?php
//pour afficher cours inscrit
include('fonctions\connectDB.php');
	if ($conn->connect_error) 
        {
            die($conn->connect_error);
        }            
        if (!isset($username))
        {
            $username = $studentcookie;
        }
	$query  = "CALL afficherCoursIncrit('$username')";
	$result = $conn->query($query);
	if (!$result) 
        {
            die ("Échec d'accès à la base de données : " . $conn->error);
        }

	$rows = $result->num_rows;
            echo "<table id='tCours'><tr> <th>Code cours</th> <th>Titre</th><th>Durée(heures)</th></tr>";

	for ($j = 0 ; $j < $rows ; ++$j)
	{
        $result->data_seek($j);
  	$row = $result->fetch_array(MYSQLI_NUM);
        echo "<tr>";
          	for ($k = 0 ; $k < 3 ; ++$k) 
                {            
                    echo "<td>$row[$k]</td>";
                    
                    
                } 
        echo "</tr>";
        }
        echo "</table>";
?>

