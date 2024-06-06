<?php 
	require_once('../../conection/index.php');
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		
		$success_delete=mysqli_query($con,"DELETE FROM `important_link` WHERE `id`='$id'");
		if($success_delete){
			echo 'Delete';
		}else{
			echo '<p class="text-white bg-danger p-2 rounded ">Note: Please try again</p>';
		}
	}else{
		echo '<p class="text-white bg-danger p-2 rounded ">Note: Please try again</p>';
	}

 ?>