<?php 
	require_once '../../conection/index.php';
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		if (isset($_GET['tb'])) {
			$tb=$_GET['tb'];
			if (isset($_GET['re'])) {
				$re=$_GET['re'];
				if (isset($_GET['loc'])) {
					$loc=$_GET['loc'];
					$file=mysqli_fetch_assoc($con->query("SELECT * FROM `$tb` WHERE `id`='$id'"))['file'];
					$file_full_loc='../../image/'.$loc.'/'.$file;
			
					if (file_exists($file_full_loc)) {
						$suc=unlink($file_full_loc);
						if ($suc) {
							$success=$con->query("DELETE FROM `$tb` WHERE `id`='$id'");
							if ($success) {
								echo "<script>window.location.href='../".$re."'</script>";
							}else{
								echo "unable to delete data";
							}
							
						}else{
							echo "unable to delete file";

						}
					}else{
						echo 'file not exists';
					}
					
				}else{
					$success=$con->query("DELETE FROM `$tb` WHERE `id`='$id'");
					if ($success) {
						echo "<script>window.location.href='../".$re."'</script>";
					}else{
						echo "Unable to delete data";
					}
					
				}
			}else{
				echo "redirect not found";
			}
			
		}else{
			echo "table not found";
		}
		
	}else{
		echo 'id not found';
	}


 ?>
 <br>
 <br>
 <a href="../<?php if (isset($re)) {
 	echo $re;
 } ?>">Go back safely</a>

 <br>
 <br>
 <a href="?id=<?php if (isset($id)) {echo $id; }?>&tb=<?php if (isset($tb)) {echo $tb; }?>&re=<?php if (isset($re)) {echo $re; }?>&">Are you sure here not file? Delete data from Database?</a>
 or
 <a href="mailto:mdsazzad0002@gmail.com">gmail</a>
 <a href="tel:8801305348489">01305348489</a>
