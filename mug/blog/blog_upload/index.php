<?php
require_once '../../../conection/index.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ck edit powered by this site</title>
	<link href="=<?= APP_URL;?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script src="ckeditor.js"></script>
	<style type="text/css">
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			padding: 50px 9%;
		}

		form {
			display: block;
			flex-direction: column;
			align-items: center;
			justify-content: center;

		}

		select,
		input[type=submit] {
			outline: none;
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			margin: 14px 0 10px 0;
			background: navy;
			color: white;
			font-size: 17px;
			/* font-weight: bold; */
			font-style: italic;
		}

		textarea {
			width: 100%;
		}



		input[type='text'] {
			width: 100%;
			padding: 10px 15px;
			margin-bottom: 10px;
		}

		.status {
			font-size: 22px;
			color: black;
			font-weight: 700;
			/* background: black; */
			width: 100%;
			text-align: center;
			/* padding: 10px 15px; */
			/* border-radius: 5px; */
		}


		/* close button deasing */
		#close {
			padding: 10px 15px;
			border: none;
			outline: none;
			color: white;
			background: red;
			border-radius: 5px;
			position: absolute;
			top: 10px;
			right: 10px;
			cursor: pointer;
		}

		.file_group {
			margin-bottom: 50px;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;

		}

		.file_group input {
			visibility: hidden;
		}

		.file_group label {
			width: 200px;
			height: 100px;
			border-radius: 15px;
			color: wheat;
			background: #4c4c4c;
			border: 1px solid #6b6b6b;
			display: inline-block;
			line-height: 100px;
			text-align: center;
		}
	</style>
</head>

<body>

	<!-- <div class="file_group">
		<form action="" id="file_upload">
			<input type="file" name="file" id="file" onchange="file_Upload(this)">
			<label for="file">Select file Uploaded</label>
		</form>
	</div> -->

	<!-- <button id="close" onclick="window.close();">Close page</button> -->
	<?php
	if (isset($_GET['id'])) {
		require_once '../../../conection/index.php';
		$id = $_GET['id'];
		$row_content = mysqli_fetch_assoc($con->query("SELECT * FROM `blog` WHERE `id` ='$id'"));
	}

	?>

	<div>
		<form action="" id="form_data_image" enctype="multipart/form-data">
			<input required type="file" name="file" id="image_upload" />
			<input hidden style="display: none;" type="submit" name="" value="submit" id="image_submit_btn" />
		</form>
	</div>

	<form id="ck_from" method="post">
		<textarea class="form-control" id="editor" name="editor">
			<?php
			if (isset($_GET['id'])) {
				echo $row_content['description'];
			}
			?>

		</textarea>
		<input value="<?php if (isset($_GET['id'])) {
							echo $row_content['name'];
						} ?>" name="name" type="text" placeholder="Enter your Title">
		<input value="<?php if (isset($_GET['id'])) {
							echo  $row_content['image'];
						} ?>" name="image" type="text" placeholder="Enter your image link">
		<div class="status"></div>
		<?php
		if (isset($_GET['id'])) { ?>
			<input hidden type="text" value="<?= $_GET['id']; ?>" name="update">
		<?php }
		?>
		<input class="btn btn-primary w-100" type="submit" id="button_submit_form" name="submit" value="Dubble Click Submit Button">
	</form>
	<script src="<?= APP_URL;?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= APP_URL;?>assets/vendor/sweetalert/sweetalert.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('editor');
		document.addEventListener("DOMContentLoaded", (e) => {

			// upload blog data and update
			let i = 0;
			$('#ck_from').on('submit', function(e) {
				e.preventDefault();
				$('#button_submit_form').on('dblclick', (e) => {

					if (i == 0) {
						$.ajax({
							type: 'POST',
							url: 'ckeditor4.php',
							processData: false,
							contentType: false,
							data: new FormData(this),
							success: function(data) {
								$('.status').html(data);
								setTimeout(function() {
									$('.status').html('');
								}, 3000)
							}
						})
						i++;
					}
					setTimeout(() => {
						i = 0;
					}, 3000)
				})
			})

			// image upload
			let image_upload_input = document.querySelector('#image_upload');
			image_upload.addEventListener('change', (e) => {
				document.querySelector('#image_submit_btn').click();
			})

			let form_data_image = document.querySelector('#form_data_image');
			form_data_image.addEventListener('submit', (e) => {
				e.preventDefault();
				let xhttp = new XMLHttpRequest;
				let formdata = new FormData(form_data_image);

				xhttp.onload = function() {
					let data = JSON.parse(this.responseText);

					if (data.i_icon == 'success') {
						console.log(data.i_title);

						// copy link
						var text = data.i_title;
						navigator.clipboard.writeText(text).then(function() {
							swal({
								'icon': data.i_icon,
								'title': "Coppied Link",
								timer: 1500,
							})
						}, function(err) {
							swal({
								'icon': data.i_icon,
								'title': "Give permission or copy manullay",
								'text': data.i_title,
								timer: 1500,
							})
						});

					} else {
						swal({
							'icon': data.i_icon,
							'title': data.i_title,

						})
					}
				}

				xhttp.open("POST", "file_upload.php");
				xhttp.send(formdata);

			})
		})
	</script>

</body>

</html>