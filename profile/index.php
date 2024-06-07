<?php require_once '../conection/index.php'; ?>
<?php  require_once 'assets/session.php'; ?>
<?php define('main', 420);
if (isset($_COOKIE['user'])) {
	$data = '';
	if (isset($_GET['download'])) {
		$data =  '?download=' . $_GET['download'];
	};
	echo "<script>window.location.href='dashboard/" . $data . "';</script>";
}
?>



<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
	<?php
	// fav section
	if (file_exists('../assets/custom/quick_info.php')) {
		require_once '../assets/custom/quick_info.php';
	} else {
		echo "Not found Quick Info";
	}

	?>


	<link href="style.css" rel="stylesheet">

	<!-- =======================================================
    starting ttcm v-0002
  ======================================================== -->
</head>

<body>
	<main id="main">
		<?php
		// header or navbar section
		if (file_exists('../assets/custom/header.php')) {
			require_once '../assets/custom/header.php';
		} else {
			echo "Not found header";
		}
		?>

		<section class="form_login_register">

			<form class="login_form" method="post">
				<h3>Login Here</h3>
				<label for="username">Email</label>
				<input type="text" placeholder="Email" name="email" id="username">

				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Password" id="password">

				<p class="text-center"><a class="my-3 d-block mx-auto" href="/lostpassword/">Forgotten your password?</a></p>
				<button type="submit" name="submit_login" value="Submit">Log In</button>
				<a class="my-3 btn btn-dark bg-black rounded d-block text-light" href="login_with_github/"><i class="bi bi-github text-light mr-2 d-inline-block "></i>&nbsp; Login With Github</a>
				<p class="text-center mt-3">
					<a class="cursor-pointer" onclick="switch_form('register_form')">Do you haven't any account Register One?</a>
				</p>
			</form>


			<form class="register_form" method="post">
				<h3>Register Here</h3>
				<label for="name">Name</label>
				<input required type="text" placeholder="Name " value="" name="name" id="name">

				<label for="email">Email</label>
				<input required type="email" placeholder="Email " value="" name="email" id="email">

				<label for="phone">Phone</label>
				<input required type="text" placeholder="Phone " value="" name="phone" id="phone">

				<label for="password">Password</label>
				<input required type="password" name="password" placeholder="Password" id="password">

				<button type="submit" name="submit_register" value="Submit">
					<!-- <div class="loding" role="status"></div>
					<i class="bi bi-box-arrow-in-right"></i> -->
					Signup Now
				</button>
				<p class="text-center my-3">
					<a class="cursor-pointer" onclick="switch_form('login_form')">Already Have an Account. Login Now.</a>
				</p>
			</form>
		</section>



		<div class="status_code" style="display: none;">
			<!-- error fixed -->
		</div>
	</main><!-- End #main -->
	<?php
	// header or navbar section
	if (file_exists('../assets/custom/footer.php')) {
		require_once '../assets/custom/footer.php';
	} else {
		echo "Not found footer";
	}
	?>
	<script>
		let login_form = document.querySelector('.login_form');
		let register_form = document.querySelector('.register_form');


		// sweet alery
		function alery_with_sweet(i_icon, i_title) {
			swal({
				icon: i_icon,
				title: i_title,
				// timer: 3000,
			})
		}


		// show one insted another register form login form
		function switch_form(data) {
			if (data == 'register_form') {
				login_form.style.display = 'none';
				register_form.style.display = 'block';
			} else if (data == 'login_form') {
				login_form.style.display = 'block';
				register_form.style.display = 'none';
			}
		}


		// register form
		register_form.addEventListener('submit', function(e) {
			e.preventDefault();
			const http = new XMLHttpRequest();
			http.open("post", "login_registration_ajax.php");
			// http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

			let formdata = new FormData(register_form);
			// let formdata = "param1=value1&param2=value2";
			formdata.append('submit_register', true);
			http.onload = function() {
				let data = JSON.parse(this.responseText);
				// console.log(data.i_icon)
				// alery_with_sweet(data.i_icon, data.i_title);
				if (data.i_icon == 'success') {
					// window.location.href = '';
					let xhttp505 = new XMLHttpRequest;

					let formdata505 = new FormData();
					formdata505.append('suscription_success', true);
					formdata505.append('email', data.i_email);
					formdata505.append('code', data.i_code);
					xhttp505.onload = function() {

						let data404 = JSON.parse(this.responseText);
						swal({
							icon: data404.i_icon,
							title: data404.i_text,
							text: data404.i_description
						});


					}

					xhttp505.open("POST", "<?= $url_email_send; ?>");
					xhttp505.send(formdata505);
				} else {
					alery_with_sweet(data.i_icon, data.i_title);
				}
			}
			http.error = function() {
				alery_with_sweet('error', 'Please try later');
			}

			http.send(formdata);
		})


		// login form
		login_form.addEventListener('submit', function(e) {
			e.preventDefault();
			const http = new XMLHttpRequest();
			http.open("post", "login_registration_ajax.php");
			// http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

			let formdata = new FormData(login_form);
			// console.log(formdata)
			// let formdata = "param1=value1&param2=value2";
			formdata.append('submit_login', true);
			http.onload = function() {
				let data = JSON.parse(this.responseText);
				// console.log(data.i_icon)
				alery_with_sweet(data.i_icon, data.i_title);
				if (data.i_icon == 'success') {
					window.location.href = '';
				}
			}
			http.error = function() {
				alery_with_sweet('error', 'Please try later');
			}

			http.send(formdata);
		})
	</script>
</body>

</html>