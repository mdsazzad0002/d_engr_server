<?php
if(file_exists('../config.php')){
    require_once '../config.php';
}elseif(file_exists('config.php')){
    require_once 'config.php';
}elseif(file_exists('../../config.php')){
    require_once '../../config.php';
}elseif(file_exists('../../../config.php')){
    require_once '../../../config.php';
}elseif(file_exists('../../../../config.php')){
    require_once '../../../../config.php';
}



$host = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$dbname = DB_NAME;

$con = mysqli_connect($host, $username, $password, $dbname);


