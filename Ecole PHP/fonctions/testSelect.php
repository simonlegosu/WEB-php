<?php
//pour prof
include('fonctions\connectDB.php');
	if ($conn->connect_error) 
        {
            die($conn->connect_error);
        }

	$query  = "CALL afficherCours";
	$result = $conn->query($query);
	if (!$result) 
        {
            die ("Échec d'accès à la base de données : " . $conn->error);
        }

	$rows = $result->num_rows;
	echo "<select name='coursdel' id='coursdel'>";
	for ($j = 0 ; $j < $rows ; ++$j)
	{
        $result->data_seek($j);
  	$row = $result->fetch_array(MYSQLI_NUM);
        echo "<option>";
          	for ($k = 0 ; $k < 1 ; ++$k) 
                {            
                    echo "$row[$k]";         
                } 
        echo "</option>";
        }
        echo "</select>";
?>
