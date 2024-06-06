<?php 
	require '../../conection/index.php';
	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		if (isset($_POST['file'])) {
			$file=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `id`='$id'"))['file'];
			if(file_exists('../../image/logo/'.$file)){
				$suc=unlink('../../image/logo/'.$file);
				$suc=$con->query("DELETE FROM `$tb` WHERE `id`='$id'");
				if ($suc) {
					 echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success file Delete</p>";
				}
			}
		}


		if (isset($_POST['tb'])) {
			$tb=$_POST['tb'];
			$suc=$con->query("DELETE FROM `$tb` WHERE `id`='$id'");
			if ($suc) {
				 echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success Data Delete</p>";
			}
		}

	}
	
 ?>