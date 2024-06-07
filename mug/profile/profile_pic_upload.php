<?php

require_once '../../conection/index.php';

$data_alert = array();
$data_alert['i_icon'] = 'error';
$data_alert['i_title'] = 'Please Try later';
if (isset($_POST['user_type'])) {
	$user_type = $_POST['user_type'];
	// who user inserted data


	function generateRandomString($length = 100)
	{
		return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
	}


	if (isset($_FILES['profile_pic'])) {
		$file = $_FILES['profile_pic'];
		$file_name = generateRandomString() . $file['name'];
		$file_name = str_replace("'", "\'", $file_name);
		$tmp_name = $file['tmp_name'];

		$s_r_pic = mysqli_fetch_assoc($con->query("SELECT * FROM `admin_user` WHERE `email`='$user_type'"))['file'];
		if (!empty($s_r_pic)) {
			if (file_exists(ROOT_PATH.'assets/img/'. $s_r_pic)) {
				unlink(ROOT_PATH.'assets/img/'. $s_r_pic);
			}
		}


		$update = $con->query("UPDATE `admin_user` SET `file`='$file_name' WHERE `email` ='$user_type'");
		if ($update) {
			$move = move_uploaded_file($tmp_name, ROOT_PATH.'assets/img/'. $file_name);
			if ($move) {
				$data_alert['i_icon'] = 'success';
				$data_alert['i_title'] = 'Successfully Updated';
			} else {
				$data_alert['i_icon'] = 'warning';
				$data_alert['i_title'] = 'Unable to copy file ';
			}
		}
	} else {
		$data_alert['i_icon'] = 'warning';
		$data_alert['i_title'] = 'Picture not found';
	}
} else {
	$data_alert['i_icon'] = 'error';
	$data_alert['i_title'] = 'User Fatch Failed';
}

$data_alert = json_encode($data_alert);
echo $data_alert;
