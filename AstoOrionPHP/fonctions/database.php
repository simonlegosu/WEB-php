<?php

	$user = 'root';
	$pass = 'laval';
	$host = 'localhost';
	$db = 'orion';
  
	$conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) 
        {
            die($conn->connect_error);
        }

	$query  = "SELECT * FROM produits";
	$result = $conn->query($query);
	if (!$result) 
        {
            die ("Échec d'accès à la base de données : " . $conn->error);
        }

	$rows = $result->num_rows;
	echo "<table id='tProds'><tr> <th>NoProduit</th> <th>Description</th><th>Prix</th></tr>";

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

