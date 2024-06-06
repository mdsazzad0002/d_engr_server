<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Some crateion for nessary</title>
	<link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
	<?php require_once '../../conection/index.php'; ?>

</head>

<body>
	<?php
	if (isset($_POST['submit'])) {

		// used
		// admin
		$create_admin_user = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `admin_user`(id int not null AUTO_INCREMENT, name varchar(200), email varchar(100), phone varchar(50), control varchar(50), description varchar(5000), password varchar(1000), file varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

		if (mysqli_num_rows($con->query("SELECT * FROM `admin_user`")) == 0) {
			$pass = md5('123456');
			$con->query("INSERT INTO `admin_user`(`email`, `control`,`password`) VALUES ('admin@gmail.com','full','$pass')");
		}





		//used
		// logo fiture
		$con->query("CREATE TABLE IF NOT EXISTS `logo`(id int not null AUTO_INCREMENT, file varchar(1000), type varchar(250), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

		//used
		// website name
		$con->query("CREATE TABLE IF NOT EXISTS `web_title`(id int not null AUTO_INCREMENT, title varchar(1500), type varchar(150), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");



		//used
		// contact information
		$con->query("CREATE TABLE IF NOT EXISTS `information`(id int not null AUTO_INCREMENT, name varchar(200), phone varchar(150), facebook varchar(350), email varchar(350), twitter varchar(350), whatsapp varchar(305), location varchar(1500), website varchar(1500), area varchar(1500), maps varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


		// visitor
		$con->query("CREATE TABLE IF NOT EXISTS `visitor`(id int not null AUTO_INCREMENT, ip varchar(155),  date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

		// employ info
		$create_employ_info = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `employ`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), email varchar(150),phone varchar(15), facebook varchar(100), title varchar(150), youtube varchar(1500), file varchar(1000), describ varchar(5000), user_type varchar(150), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


		// message or suscribe
		$con->query("CREATE TABLE IF NOT EXISTS `message`(id int not null AUTO_INCREMENT, name varchar(150), email varchar(150), subject varchar(5000), message varchar(5000), status varchar(150), user_type varchar(150), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

		// suscribe
		$con->query("CREATE TABLE IF NOT EXISTS `suscribe`(id int not null AUTO_INCREMENT, name varchar(150), email varchar(150), subject varchar(5000), message varchar(5000), status varchar(150), user_type varchar(150), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");
		// notice
		$create_notice = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `notice`(id int(15) NOT NULL AUTO_INCREMENT, title varchar(250), description varchar(1000), video varchar(150), link varchar(1500), alert varchar(150), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

		//  of blog
		$create_instraction = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `blog`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250),image varchar(250), description varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


		// used
		// faq
		$create_faq = $con->query('CREATE TABLE IF NOT EXISTS `faq`(id int not null AUTO_INCREMENT, ask varchar(1500), ans varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))');


		// project management
		$create_p = $con->query("CREATE TABLE IF NOT EXISTS `project_info`(id int not null AUTO_INCREMENT, file varchar(200), video varchar(1000), demo varchar(1000), name varchar(150), feture varchar(700),  user_type varchar(1500), description varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY key(id))");


		// used
		// important link
		$create_footer = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `important_link`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), description varchar(5000), type varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


		//used
		// photo glary
		$create_photo_galary = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `photo_galary`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), type varchar(150), link varchar(2000), file varchar(5000), user_type varchar(1500), description varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");



		$create_quick_notification = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `notification`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), type varchar(150), link varchar(2000), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");
	}



	?>
	<div class="container">
		<br>
		<form method="post" action="">
			<div class="row justify-content-md-center">
				<div class="col-md-4 col-sm-12">
					<h1 class="text-center text-italic">Information</h1>
					<p>We are some create dynamicy table. You can click button <span class="text-danger bg-light">create new first time</span> Thank you. </p>
					<button class="btn btn-primary w-100" type="submit" name="submit">Create New first time</button>
					<br>
					<br>
					<a class="link" href="/mug/">Go to your home page thank?</a>
				</div>
			</div>
		</form>
	</div>
</body>

</html>