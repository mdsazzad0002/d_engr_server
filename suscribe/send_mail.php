<?php
if (file_exists('../conection/index.php')) {
    require_once '../conection/index.php';
} elseif (file_exists('conection/index.php')) {
    require_once 'conection/index.php';
}
function generateRandomString($length = 6)
{
    return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
// generateRandomString()
$data_array = array();
if (isset($_POST['suscribe'])) {
    $data_array['to'] = $email = $to = $_POST['suscribe'];
    $generateRandomString = generateRandomString();
    $code = generateRandomString();

    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $data_array['i_icon'] = 'warning';
            $data_array['i_text'] = 'Enter your Valid Email Address';
        } else {

            if (mysqli_num_rows($con->query("SELECT * FROM `suscribe` WHERE `email`='$email' AND `status`='active'")) == 0) {

                if (mysqli_num_rows($con->query("SELECT * FROM `suscribe` WHERE `email`='$email'")) == 0) {

                    if ($con->query("INSERT INTO `suscribe`(`email`, `status`) VALUES ('$email','$code')")) {
                        $data_array['i_icon'] = 'success';
                        $data_array['i_code'] = base64_encode($code);
                        $data_array['i_text'] = 'Enter your Email verify code';
                    } else {
                        $data_array['i_icon'] = 'warning';
                        $data_array['i_text'] = 'Please Wait Sometimes';
                    }
                } else {
                    $suc = $con->query("UPDATE `suscribe` SET `status`='$code' WHERE  `email`='$email'");
                    if ($suc) {
                        $data_array['i_icon'] = 'success';
                        $data_array['i_code'] = base64_encode($code);
                        $data_array['i_text'] = 'Enter your Email verify code';
                    }
                }


                       // Base URL
             $baseURL = APP_URL . "/email/";

                // Parameters
                $params = array(
                    'subject' => "Dengr Web Newslater",
                    'body' => "D Engr Web Your Verify Code is <h3>".$code."</h3> or Click link <a href='". APP_URL."suscribe/verify_mail.php?verify_code=".$code."&verify_email=".$email."'>Click Here</a>",
                    'to' => $email,
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
                     $response = json_decode($response);
                    if($response->code = 200){
                        $data_array['i_icon'] = 'success';
                        $data_array['i_text'] = 'Enter your Email verify code';

                    }else{
                        $data_array['i_icon'] = 'error';
                        $data_array['i_text'] = 'Please Try Again';
                    }
                }

                // Close cURL session
                curl_close($curl);
                
            } else {
                $data_array['i_icon'] = 'error';
                $data_array['i_text'] = 'This Email Already Exists';
            }
        }
    }
    echo $data_array = json_encode($data_array);
    // echo $data_array;
}
