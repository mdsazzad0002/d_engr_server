<?php
require_once '../../conection/index.php';
header("Content-Type: image/png"); // it will return image 
readfile(APP_URL."assets/img/".mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='fav'"))['file'] ?? "loading.png");

// dbfunction(); // place your db code
?>