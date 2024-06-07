
<?php
   require '../../conection/index.php';
   if (isset($_POST['email'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $suc= $con->query("INSERT INTO `message`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
    if ($suc) {
      // echo "Message send success";
    }
  }else{
      $email=$_GET['email'];
  }



 if (!empty($email)) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $emailErr = "Invalid email format";
  } else {
    $t_row = mysqli_num_rows($con->query("SELECT * FROM `suscribe` WHERE `email`='$email'"));
    if ($t_row == 0) {
      $suc = $con->query("INSERT INTO `suscribe`(`email`, `status`) VALUES ('$email','active')");
    }

              // Base URL
        $baseURL = APP_URL . "/email/";

        // Parameters
        $params = array(
            'subject' => $_POST['subject'],
            'body' => $_POST['message'],
            'to' => $_POST['email'],
            'name' => 'From D Engr Web'
        );

        // Build query string
        $queryString = http_build_query($params);

        // Combine base URL and query string
        $url = $baseURL . '?' . $queryString;

        // Initialize cURL session
        $curl = curl_init();

        // Set the URL to fetch
        curl_setopt($curl, CURLOPT_URL, $url);

        // Set the option to return the response as a string instead of outputting it directly
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Execute the request and fetch the response
        $response = curl_exec($curl);

        // Check for errors
        if ($response === false) {
            // If there's an error, you can get the error message
            $error = curl_error($curl);
            echo "cURL Error: " . $error;
        } else {
            // If there's no error, you can handle the response
            echo $response;
        }

        // Close cURL session
        curl_close($curl);


  }


}
  
?>
