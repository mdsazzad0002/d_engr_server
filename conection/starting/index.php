<?php 
	// it is only work localhost server so you can delete it
	$host='localhost';
	$username='root';
	$password='';
	$con=new mysqli($host,$username,$password);
	if($con->connect_error){
		die("Connection failed: ". $con-> connect_error);
	}
	//$sql_crate_data="";
	if($con->query("CREATE DATABASE IF NOT EXISTS `ttcm`") === TRUE){
		echo 'Database create successfully';
		echo "<script> window.location.href='first_conection.php'</script>";
		
		
	}else{
		echo 'failed to create database'.$con->query("CREATE DATABASE IF NOT EXISTS `ttcm`");
	}

 ?>