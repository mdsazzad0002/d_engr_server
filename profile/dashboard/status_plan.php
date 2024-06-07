<?php

require_once '../../conection/index.php';

$myStatus = new stdClass();
$myStatus->i_icon = 'error';
$myStatus->i_text = 'Sorry Please Try later';

if (isset($_POST['data']) and $_POST['data'] == 420) {
    $plan = $_POST['plan'];
    $email = $_POST['email'];
    $email = str_replace("'", "\'", $email);

    $method = $_POST['method'];
    $payment = $_POST['payment'];
    $t_id = $_POST['id'];
    $t_id = str_replace("'", "\'", $t_id);

    if (mysqli_num_rows($con->query("SELECT * FROM `payment` WHERE `paymentMethod` = '$method' AND `t_id`='$t_id'")) == 0) {


        if ($con->query("INSERT `payment` SET `email`='$email', `payment`='$payment', `paymentMethod`='$method', `status`='inactive', `t_id`='$t_id', `currency` =' BDT'")) {
            if (mysqli_query($con, "UPDATE `suscription` SET `requested` = '$plan' WHERE `email` = '$email'")) {
                $myStatus->i_icon = 'success';
                $myStatus->i_text = 'We are Success please wait few Moment';
            } else {
                $myStatus->i_icon = 'warning';
                $myStatus->i_text = 'Something Worng1';
            }
        } else {
            $myStatus->i_icon = 'warning';
            $myStatus->i_text = 'Something Worng';
        }
    } else {
        $myStatus->i_icon = 'warning';
        $myStatus->i_text = 'Tranjection Already Exists';
    }
} else {
    $myStatus->i_icon = 'warning';
    $myStatus->i_text = 'Not found Expeted Data';
}

$myStatus = json_encode($myStatus);
echo $myStatus;
