<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is Some crateion for nessary</title>
	<?php require_once '../../conection/index.php'; ?>
	<link rel="stylesheet" type="text/css" href="<?= APP_URL;?>assets/vendor/bootstrap/css/bootstrap.min.css">

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

		//  of blog
		$create_instraction = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `blog`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250),image varchar(250), description varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


		// faq
		$create_faq = $con->query('CREATE TABLE IF NOT EXISTS `faq`(id int not null AUTO_INCREMENT, ask varchar(1500), ans varchar(5000), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))');


		// project Catagory
		$create_catagory
			= $con->query("CREATE TABLE IF NOT EXISTS `project_catagory`(id int not null AUTO_INCREMENT,  catagory varchar(100),  user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY key(id))");

		// project management
		$create_p = $con->query("CREATE TABLE IF NOT EXISTS `project_info`(id int not null AUTO_INCREMENT, file varchar(200), video varchar(1000), demo varchar(1000), name varchar(150), feture varchar(700), catagory varchar(100),  user_type varchar(1500), description varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY key(id))");


		// used
		// important link
		$create_footer = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `important_link`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), description varchar(5000), type varchar(1500), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");


		//used
		// photo glary
		$create_photo_galary = mysqli_query($con, "CREATE TABLE IF NOT EXISTS `photo_galary`(id int(15) NOT NULL AUTO_INCREMENT, name varchar(250), type varchar(150), link varchar(2000), file varchar(5000), user_type varchar(1500), description varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");



		// /////////////////////////////////////////////////////////////////////////
		// Suscribe plan and user management
		///////////////////////////////////////////////////////////////////////////

		$suscription = $con->query("CREATE TABLE IF NOT EXISTS `suscription`(id int not null auto_increment,  oauth_uid varchar(11), username varchar(100), location varchar(300), from_source varchar(100), name varchar(100), email varchar(150), phone varchar(20), file varchar(750), password varchar(1000),  country varchar(50), expire varchar(50), requested varchar(150), download_times int(11), status varchar(20), plan varchar(50), checkpoint varchar(150), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,   primary key(id))");


		 
		$payment = $con->query("CREATE TABLE IF NOT EXISTS `payment`(id int not null auto_increment, email varchar(150), payment int(11), t_id varchar(100),  currency varchar(20), paymentMethod varchar(100),   status varchar(150), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,   primary key(id))");


		// 6/7/24
		$general_setting = $con->query("CREATE TABLE IF NOT EXISTS `general_setting`(id int not null auto_increment, name varchar(150), value varchar(2000), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, primary key(id))");

		


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
					<a class="link" href="<?= ADMIN_APP_URL?>">Go to your home page thank?</a>
				</div>
			</div>
		</form>
	</div>
</body>

</html>