<?php
require_once '../conection/index.php';

function RandomString($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

$data_array = [];
$data_array['i_icon'] = 'error';
$data_array['i_text'] = 'Something is wrong';


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (mysqli_num_rows($con->query("SELECT * FROM `suscription` WHERE `email`='$email'")) == 1) {

        $code = RandomString();
        if ($con->query("UPDATE `suscription` SET  `checkpoint` ='$code' WHERE `email` ='$email'")) {
            $data_array['i_icon'] = 'success';
            $data_array['i_text'] = 'Successfully Send';
            $data_array['i_code'] = base64_encode($code);
            $data_array['i_email'] = base64_encode($email);
        } else {
            $data_array['i_icon'] = 'warning';
            $data_array['i_text'] = 'Please Try Later';
        }
    } else {
        $data_array['i_icon'] = 'warning';
        $data_array['i_text'] = 'Please Register First';
    }
}

$data_array = json_encode($data_array);
echo $data_array;
