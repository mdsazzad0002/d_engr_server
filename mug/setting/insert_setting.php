<?php 
    require_once '../assets/session.php';
	require_once '../../conection/index.php';
    $n = 100;
    function getRandomString($n)
    {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';

      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }

      return $randomString;
    }


    if (isset($_POST['catagory'])) {
        if ($_POST['catagory']=='logo') {
            if (isset($_FILES['logo1'])) {
                $logo1=$_FILES['logo1'];

                $logo1_name=getRandomString($n).$logo1['name'];
                //$logo1_name=str_replace("'","\'",$logo1_name);

                $logo1_tmp=$logo1['tmp_name'];

                $insert=$con->query("INSERT INTO `logo`(`file`, `type`, `user_type`) VALUES ('$logo1_name','logo','$user_type')");

                if ($insert) {
                   $mov= move_uploaded_file($logo1_tmp,ROOT_PATH.'assets/img/'.$logo1_name);
                    if($mov) {
	                	echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success insert Web title</p>";
	                }
                }else{
                    echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Failed Web title</p>";
                }
            }
        }else if ($_POST['catagory']=='fav_icon') {
            if (isset($_FILES['fav_icon1'])) {
                $logo1=$_FILES['fav_icon1'];
                $logo1_name=getRandomString($n).$logo1['name'];
                $logo1_name=str_replace("'","\'",$logo1_name);

                $logo1_tmp=$logo1['tmp_name'];
                $insert=$con->query("INSERT INTO `logo`(`file`, `type`,`user_type`) VALUES ('$logo1_name','fav','$user_type')");
                
                if ($insert) {
                    $mov=move_uploaded_file($logo1_tmp,ROOT_PATH.'assets/img/'.$logo1_name);
	                   if($mov) {
	                	echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success insert Web title</p>";
	                }
                }
            }
        }else if ($_POST['catagory']=='web_title') {
            if (isset($_POST['web_title1'])) {

                $title=$_POST['web_title1'];
                $title=str_replace("'","\'",$title);

                $insert=$con->query("INSERT INTO `web_title`( `title`, `type`,`user_type`) VALUES ('$title','title','$user_type')");
                if ($insert) {
                	echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success insert Web title</p>";
                }
            }
        }else if ($_POST['catagory']=='full_form') {
            if (isset($_POST['full_form1'])) {

                $title=$_POST['full_form1'];
                $title=str_replace("'","\'",$title);

                $insert=$con->query("INSERT INTO `web_title`( `title`, `type`,`user_type`) VALUES ('$title','full','$user_type')");
                if ($insert) {
                	echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success insert Web title</p>";
                }
            }
        }else{
           echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Please try again</p>";
        }
    }else if(isset($_POST['email'])){
            $phone=$_POST['phone'];
            $phone=str_replace("'","\'",$phone);

           $facebook=$_POST['facebook'];
           $facebook=str_replace("'","\'",$facebook);

           $email=$_POST['email'];
           $email=str_replace("'","\'",$email);

           $location=$_POST['location'];
           $location=str_replace("'","\'",$location);

           $area=$_POST['area'];
           $area=str_replace("'","\'",$area);


           $insert=$con->query("INSERT INTO `information`(`phone`, `facebook`, `email` , `location`,  `area`,`user_type`) VALUES ('$phone','$facebook','$email','$location','$area','$user_type')");
           if ($insert) {
                echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success insert</p>";
           }else{
               echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Success Failed</p>";
           }
       }

 ?>