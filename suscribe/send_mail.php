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
            } else {
                $data_array['i_icon'] = 'error';
                $data_array['i_text'] = 'This Email Already Exists';
            }
        }
    }
    $data_array = json_encode($data_array);
    echo $data_array;
}
