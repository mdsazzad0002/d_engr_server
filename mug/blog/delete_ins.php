<?php 
	require_once('../../conection/index.php');
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		
		$success_delete=mysqli_query($con,"DELETE FROM `blog` WHERE `id`='$id'");
		if($success_delete){
			echo "Deleted";
		}
	}
