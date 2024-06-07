<?php
require_once '../../conection/index.php';
$data_alert = array();
$data_alert['i_icon'] = 'error';
$data_alert['i_title'] = 'Something is wrong';

if (isset($_POST['catagory_id'])) {
    $catagory_id = $_POST['catagory_id'];
    $catagory_val = $_POST['catagory_val'];
    if ($con->query("UPDATE `project_info` SET `catagory` = '$catagory_val' WHERE `id` ='$catagory_id'")) {
        $data_alert['i_icon'] = 'success';
        $data_alert['i_title'] = 'Updated Catagory';
    } else {
        $data_alert['i_icon'] = 'warning';
        $data_alert['i_title'] = 'Please try again';
    }
} else {
    $data_alert['i_icon'] = 'error';
    $data_alert['i_title'] = 'Please try later';
}

$data_alert = json_encode($data_alert);
echo $data_alert;
