<?php

// who user inserted data
$user_type = '';
if (isset($_COOKIE['user'])) {
     $user_type = $_COOKIE['user'];
     $email_auth  = base64_decode($user_type);
     if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM `suscription` WHERE `email` =' $email_auth'")) == 0){
          unset($_COOKIE['user']); 
          setcookie('user', '', -1, '/'); 
          echo '<script>window.location.href=""</script>';
      };
     
} else {
     $url = $_SERVER['PHP_SELF'];
     $url = explode('/', $url);
     if ($url[count($url) - 2] == 'profile') {
          // echo '<script>window.location.href="../"</script>';
     } else {
          echo '<script>window.location.href="../"</script>';
     }
}
