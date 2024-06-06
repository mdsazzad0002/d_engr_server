<?php
require_once '../../conection/index.php';
$data_alert=array();
$data_alert['i_icon']='error';
$data_alert['i_title']='Something is worng please try later';
if(isset($_POST['faq_id'])){
	$faq_id=$_POST['faq_id'];
	if($con->query("DELETE FROM `faq` WHERE `id` ='$faq_id' ")){
		$data_alert['i_icon']='success';
		$data_alert['i_title']='Successfully Deleted';
	}else{
		$data_alert['i_icon']='warning';
		$data_alert['i_title']='Please try again';
	}
}else{
	$data_alert['i_icon']='error';
	$data_alert['i_title']='Not found Expected data';
}

$data_alert=json_encode($data_alert);
echo $data_alert;