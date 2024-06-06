<?php 
	require_once '../assets/session.php';
	require_once '../../conection/index.php';

	if (!isset($_POST['id'])) {
		if (!empty($_POST['ask']) AND !empty($_POST['ans'])) {
			$ask=$_POST['ask'];
			$ask=str_replace("'","\'",$ask);

			$ans=$_POST['ans'];
			$ans=str_replace("'","\'",$ans);

			$suc=$con->query("INSERT INTO `faq`( `ask`, `ans`, `user_type`) VALUES ('$ask','$ans','$user_type')");
			if ($suc) {
				echo "<p class='p-3 bg-success rounded text-light'>We are Success insert Data</p>";

			}else{
				echo "<p class='p-3 bg-danger rounded text-light'>Some thing is worng please try again</p>";
			}
		}else{
			echo "<p class='p-3 bg-danger rounded text-light'>You are try empty value</p>";
		}
	}else{
		if (isset($_POST['id'])) {
	        $id=$_POST['id'];
	        
	        $ask=$_POST['ask'];
			$ask=str_replace("'","\'",$ask);

			$ans=$_POST['ans'];
			$ans=str_replace("'","\'",$ans);

	       $con->query("UPDATE `faq` SET `ask`='$ask',`ans`='$ans' WHERE `id`='$id'");
	       echo "<p class='p-3 bg-success rounded text-light'>We are Success Update Data</p>";
	     }
	}

 ?>