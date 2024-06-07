<?php
require_once '../../conection/index.php';

// Always set content-type when sending HTML email
$message='';
$to='';
$subject='';


if (isset($_GET['project_id'])) {
	$project_id=$_GET['project_id'];
	$select_message=$con->query('SELECT * FROM `suscribe`');
	$to='';
	while($r_m=$select_message->fetch_assoc()){
		$to .=$r_m['email'].",";
	}

	if ($project_id!='') {
		$id=$project_id;
		$select_project=mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`='$id'"));
		$description=$select_project['description'];
		$subject="Dengrweb ||".$select_project['name'];
		$image=$select_project['file'];
		$feature=$select_project['feture'];

		$link=$select_project['link'] ?? '';


		$message="<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	
	<style type='text/css'>
		h1{
			text-align: center;
		}
		.card{
			display:block;
			background: #F7F7F7;
			border-radius: 10px;
			border: 1px solid #C8C9CA;
		}
		.card-header{
			text-align:center;
				
		}
		.card-header h1{
			font-size: 36px;
		}
		.card-body{
			background: #fff;
			border: 1px solid #C8C9CA;
			border-left: 0;
			border-right: 0;
			border-bottom: 0;
			padding: 10px;
		}
		.text-center{
			text-align: center;
			align-items: center;
			padding: 5px;
		}

		.btn{
			outline: none;
			background: #0B5ED7;
			padding: 10px;
			border-radius: 5px;
			color: #ffffff;
		}
		a{
			text-decoration: none;
			margin: 5px;
		}
		span{
			color:#4E73DF;
		}
		.image{
			text-align: center;
			align-items: center;
			padding: 5px;
		}
		.image img{
			width: 150px;
			height: 100px;
		}
	</style>
</head>
<body class='container'>
	<div class='card'>
		<div class='card-header'>
			<h1 class='text-center'>".$subject."</h1>
		</div>
		<div class='card-body'>
			<div class='image'>
				<img src='".APP_URL."/assets/img/".$image."'/>
			</div>
			<p style='text-align:justify'>".$description."</p>
			
			

			<br>
			<div class='text-center'>
				<a class='btn btn-primary' style='color:white' href='".$link."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-box-arrow-up-right' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z'/>
  <path fill-rule='evenodd' d='M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z'/>
</svg>   Please Check Our project</a>
			</div>
			<hr>
			<div class='text-center'>
				<a href='https://facebook.com/mdsazzad0002'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-facebook' viewBox='0 0 16 16'>
  <path d='M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z'/>
</svg> Facebook</a>
				<a href='https://ttcm.pw'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-globe' viewBox='0 0 16 16'>
  <path d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z'/>
</svg> Vist Website</a>				
					<a href='mailto:web.developer.saszzad@gmail.com'>
						<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-envelope-at-fill' viewBox='0 0 16 16'>
  <path d='M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z'/>
  <path d='M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z'/>
</svg> Email
					</a>

				

			</div>
			<div class='text-center'>
				You received this message because you This website is linked to. thank you
				<br>
				Alright reserved <a href='".APP_URL."'>D Engr Web</a>
			</div>
		</div>
	</div>
</body>
</html>";
	}

	
}

echo "<script>".APP_URL."email/?subject=".$subject."&body=jhkj&to=".$to."&name=Subscriber</script>"
// $to
// $subject
// $message
// $headers
?>
