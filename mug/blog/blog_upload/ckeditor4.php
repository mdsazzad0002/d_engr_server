    <?php

	require_once '../../../conection/index.php';

	if (isset($_POST['update'])) {
		$id = $_POST['update'];
		$content = $_POST['editor'];
		$content = str_replace("'", "\'", $content);

		$name = $_POST['name'];
		$name = str_replace("'", "\'", $name);
		$image = $_POST['image'];
		$image = str_replace("'", "\'", $image);


		$suc = $con->query("UPDATE `blog` SET `name`='$name',`image`='$image',`description`='$content' WHERE `id`='$id'");
		if ($suc) {
			echo 'update success';
		} else {
			echo "Please try again";
		}
	} else if (isset($_POST['editor'])) {
		$content = $_POST['editor'];
		$content = str_replace("'", "\'", $content);

		$name = $_POST['name'];
		$name = str_replace("'", "\'", $name);
		$image = $_POST['image'];
		$image = str_replace("'", "\'", $image);


		$suc = $con->query("INSERT `blog` SET `name`='$name',`image`='$image',`description`='$content'");
		if ($suc) {
			echo 'insert success';
		} else {
			echo "Please try again";
		}
	}

	?>