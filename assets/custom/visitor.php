<!-- 
System Requirements
--connect database

--SQL COMMAND
$con->query("CREATE TABLE IF NOT EXISTS `visitor`(id int not null AUTO_INCREMENT, ip varchar(155),  date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

--NO REQUIRE ANY FRAMEWORK OR CDN



 -->

<?php 
		

    if (!defined('main')) {
         echo "<script>window.location.href='".APP_URL."index.php'</script>";
        exit();
     } ;


	 
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    //whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
    $con->query("INSERT INTO `visitor`(`ip`) VALUES ('$ip')");
 ?>