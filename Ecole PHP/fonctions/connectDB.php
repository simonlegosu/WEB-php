<?php

	$user = 'root';
	$pass = 'laval';
	$host = 'localhost';
	$db = 'ecolephp';
  
	$conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) 
        {
            die($conn->connect_error);
        }
?>



