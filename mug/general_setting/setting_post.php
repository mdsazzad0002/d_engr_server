<?php
require_once '../../conection/index.php';

if(isset($_POST['settings'])){
    $data = $_POST;
    // print_r($data);
    $data = array_diff_key($data, ['settings' => true]);

    foreach ($data as $key => $value) {
        echo $key . '  ' . $value;      
        if(mysqli_num_rows($con->query("SELECT * FROM  `general_setting` WHERE `name` = '$key'")) == 0)  {
            $con->query("INSERT `general_setting` SET `name`='$key',`value`='$value'");
            
        }else{
            $con->query("UPDATE `general_setting` SET`value`='$value' WHERE  `name` = '$key'");

        }
        
        
    }




}




echo "<script>window.history.back();</script>";