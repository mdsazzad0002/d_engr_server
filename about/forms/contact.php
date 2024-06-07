
<?php
   require '../../conection/index.php';
   if (isset($_POST['email'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $suc= $con->query("INSERT INTO `message`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
    if ($suc) {
      echo "Message send success";
    }
  }else{
      $email=$_GET['email'];
  }

 if (!empty($email)) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $emailErr = "Invalid email format";
  }else{
    $t_row=mysqli_num_rows($con->query("SELECT * FROM `suscribe` WHERE `email`='$email'"));
      if($t_row==0){
        $suc=$con->query("INSERT INTO `suscribe`(`email`, `status`) VALUES ('$email','active')");
        if ($suc) {
          echo "success succfully suscribed";
        }
      }else{
        echo "This email aleready Exists";
      }
  }
}
  
?>
