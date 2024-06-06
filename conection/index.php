<?php

	$host= 'localhost';
	$username='root';
	$password='';
	$dbname='d_web';
	$con=new mysqli($host, $username, $password, $dbname);
	

    // Check connection
    if ($con -> connect_errno) {
      echo "Failed to connect to MySQL: " . $con -> connect_error;
      exit();
    }
?>
	