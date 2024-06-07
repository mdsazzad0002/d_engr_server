<?php 
	require_once '../conection/index.php';
	if ($_REQUEST['verify_code']) {
		$verify_code=$_REQUEST['verify_code'];

		$verify_email=$_REQUEST['verify_email'];

		$row=mysqli_num_rows($con->query("SELECT * FROM `suscribe` WHERE `email`='$verify_email' AND `status`='$verify_code'"));
		if ($row==1) {
			 $suc=$con->query("UPDATE `suscribe` SET`status`='active' WHERE  `email`='$verify_email'");
        	if ($suc) {
        		echo "<p class='bg-success p-2 rounded text-light d-block'>Note: We are Success verify email</p>";
        	}else{
        		echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: We are sorry verify</p>";
        	}
		}else{
			echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Verify code not match</p>";
		}

	}else{
		echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: We are Not found Expected data</p>";
	}



 ?>

<script>
setTimeout(() => {
	window.location.href="<?=APP_URL?>";
}, 2500);

</script>