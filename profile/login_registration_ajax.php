<?php require_once '../conection/index.php'; ?>
<?php define('main', 420); ?>

<?php

function generateRandomString($length = 15)
{
    $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// echo $_POST['form-data'];

$myObj = new stdClass();
$myObj->i_icon = 'error';
$myObj->i_title = 'Please try later';






if (isset($_POST['submit_login'])) {
    $email = $_POST['email'];
    $email = str_replace("'", "\'", $email);
    $password = 'd_engr_web' . $_POST['password'];
    $password = str_replace("'", "\'", $password);
    $password = md5($password);

    if (mysqli_num_rows($con->query("SELECT * FROM `suscription` WHERE `email`='$email' AND `password` ='$password' AND `status`= 'active'")) == 1) {
        $myObj->i_icon = 'success';
        $myObj->i_title = 'Please wait...';
        $cookie_value = base64_encode($email);

        setcookie('user', $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    } else {
        if (mysqli_num_rows($con->query("SELECT * FROM `suscription` WHERE `email`='$email' AND `password` ='$password'")) == 1) {
            $myObj->i_icon = 'warning';
            $myObj->i_title = 'Verify Email Address';
        } else {
            if (mysqli_num_rows($con->query("SELECT * FROM `suscription` WHERE `email`='$email' AND `password` ='$password'")) == 1) {
                $myObj->i_icon = 'warning';
                $myObj->i_title = 'Verify Email Address';
            } else {
                $myObj->i_icon = 'warning';
                $myObj->i_title = 'Plaase Register First';
            }
        }
    }
} elseif (isset($_POST['submit_register'])) { //
    $name = $_POST['name'];
    $name = str_replace("'", "\'", $name);
    $email = $_POST['email'];
    $email = str_replace("'", "\'", $email);
    $phone = $_POST['phone'];
    $phone = str_replace("'", "\'", $phone);
    $password = 'd_engr_web' . $_POST['password'];
    $password = str_replace("'", "\'", $password);


    function getIPAddress()
    {
        //whether ip is from the share internet  
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from the remote address  
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    $ip = getIPAddress();


    $user_query = $con->query("SELECT `email` FROM `suscription` WHERE `email`='$email' AND `status`= 'active'");
    if (mysqli_num_rows($user_query) == 0) {
        $user_query = $con->query("SELECT `email` FROM `suscription` WHERE `email`='$email'");
        if (mysqli_num_rows($user_query) == 0) {

            $password = md5($password);
            $code = generateRandomString();
            $myObj->i_code = base64_encode($code);
            if ($con->query("INSERT `suscription` SET `name`='$name',`email`='$email',`phone`='$phone', `password`='$password', `expire`= 0, requested=0, `country`='$ip', `plan`='Free', `status`= '$code'")) {
                $cookie_value = base64_encode($email);

                setcookie('user', $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                $myObj->i_icon = 'success';
                $myObj->i_email = $email;
                $myObj->i_title = "Verify your Email check inbox click link " . $name;
            } else {
                $myObj->i_icon = 'error';
                $myObj->i_title = 'Unknown Reason';
            }
        } else {
            $code = generateRandomString();
            $myObj->i_code = base64_encode($code);
            if ($con->query("UPDATE `suscription` SET `status` = '$code'")) {
                $myObj->i_icon = 'success';
                $myObj->i_email = $email;
                $myObj->i_title = "Verify your Email check inbox click link " . $name;
            }
        }
    } else {
        $myObj->i_icon = 'warning';
        $myObj->i_title = 'Already Exist forgotten Account';
    }
}




$myJSON = json_encode($myObj);
echo $myJSON;
?>

