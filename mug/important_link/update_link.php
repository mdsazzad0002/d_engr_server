<?php
   require_once '../../conection/index.php';
    // update data link
     if(isset($_POST['id'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $user_type=$_POST['user_type'];
        $type =$_POST['type'];
        $description=$_POST['description'];
        $success_insert=mysqli_query($con,"UPDATE `important_link` SET `name`='$name',`description`='$description', `user_type`='$user_type',`type`='$type' WHERE `id`='$id'");
        if ($success_insert) {
           echo "<p class='p-2 bg-success text-light rounded'>Successfully updated!</p>";
        }
    }


?>