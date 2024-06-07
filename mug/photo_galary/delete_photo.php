<?php 
	require_once('../../conection/index.php');
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		$s_photo=$con->query("SELECT * FROM `photo_galary` WHERE `id`='$id'");
		while ($r_photo=$s_photo->fetch_assoc()) {
			$file=$r_photo['file'];
			if(file_exists(ROOT_PATH.'assets/img/'.$file)){
				unlink(ROOT_PATH.'assets/img/'.$file);
			}

			$success_delete=mysqli_query($con,"DELETE FROM `photo_galary` WHERE `id`='$id'");
			if($success_delete){
				echo 'Delete';
			}else{
				echo '<p class="text-white bg-danger p-2 rounded ">Note: We are Failed</p>';
			}
		}
		
	}else{
		echo '<p class="text-white bg-danger p-2 rounded ">Note: Please try again</p>';
	}

 ?>