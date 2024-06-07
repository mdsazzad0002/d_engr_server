<?php 
	require_once('../../conection/index.php');
	if(isset($_POST['id'])){

			$id=$_POST['id'];

		$select_file=mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`='$id'"))['file'];
		if(file_exists(ROOT_PATH.'assets/img/'.$select_file)){
			unlink(ROOT_PATH.'assets/img/'.$select_file);
		}else{
			echo "We are not found file";
		}
	
		
		$success_delete=mysqli_query($con,"DELETE FROM `project_info` WHERE `id`='$id'");
		if($success_delete){
			echo 'Delete';
		}else{
			echo 'Note: Please try again';
		}
	}else{
		echo 'Note: Please try again';
	}

 ?>