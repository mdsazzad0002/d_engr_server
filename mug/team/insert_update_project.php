<?php 
    require_once '../../conection/index.php';
    if(isset($_POST['insert_employ'])){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randstring = '';
            for ($i = 0; $i < 15; $i++) {
                $randstring .= $characters[rand(0, strlen($characters))];
            }
        $name=$_POST['name'];
        $name=str_replace("'","\'",$name);
        
        $user_type=$_POST['user_type'];
        $user_type=str_replace("'","\'",$user_type);

        $describ=$_POST['describe'];
        $describ=str_replace("'","\'",$describ);

        $email=$_POST['email'];
        $email=str_replace("'","\'",$email);

        $phone=$_POST['phone'];
        $phone=str_replace("'","\'",$phone);

        $facebook=$_POST['facebook'];
        $facebook=str_replace("'","\'",$facebook);

        $title=$_POST['title'];
        $title=str_replace("'","\'",$title);

        $youtube=$_POST['youtube'];
        $youtube=str_replace("'","\'",$youtube);

        $file=$_FILES['file'];
        $file_name=$file['name'];
        $file_name=str_replace("'","\'",$file_name);

        $file_tmp=$file['tmp_name'];
        $file_rename=$randstring.$file_name;
        $file_location=ROOT_PATH.'assets/img/'.$file_rename;

        $file_type=$file['type'];

        $file_expend=explode('/', $file_type);
        $image_extension=$file_expend[0];
        if($image_extension=='image'){ 
            if (file_exists($file_rename)) {
                 
                echo 'Sorry, file already exists!';
                  
            }else{
                  $success_insert=mysqli_query($con,"INSERT INTO `employ`(`name`, `email`, `phone`, `facebook`, `title`, `youtube`, `file`, `describ`, `user_type`) VALUES('$name','$email','$phone','$facebook','$title','$youtube','$file_rename','$describ','$user_type')");
                        
                     if($success_insert){
                        move_uploaded_file($file_tmp, $file_location);
                         echo '<script>swal("Success!", "Successfully insert!", "success")</script>';
                     }else{
                      
                        echo 'unable to insert data in data table!';
                    }
            }
            
        }else{
            $success_insert=mysqli_query($con,"INSERT INTO `employ`(`name`, `email`, `phone`, `facebook`, `title`, `youtube`,  `describ`, `user_type`) VALUES('$name','$email','$phone','$facebook','$title','$youtube','$describ', '$user_type')");
             echo 'We Are not found image';
        }
   
       }




       // update 

        if (isset($_POST['update_employ'])) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randstring = '';
            for ($i = 0; $i < 15; $i++) {
                $randstring .= $characters[rand(0, strlen($characters))];
            }
        $id=$_POST['id_id'];

        $name=$_POST['name'];
        $name=str_replace("'","\'",$name);

        $describ=$_POST['describe'];
        $describ=str_replace("'","\'",$describ);

        $user_type=$_POST['user_type'];
        $user_type=str_replace("'","\'",$user_type);

        $email=$_POST['email'];
        $email=str_replace("'","\'",$email);

        $phone=$_POST['phone'];
        $phone=str_replace("'","\'",$phone);

        $facebook=$_POST['facebook'];
        $facebook=str_replace("'","\'",$facebook);

        $title=$_POST['title'];
        $title=str_replace("'","\'",$title);

        $youtube=$_POST['youtube'];
        $youtube=str_replace("'","\'",$youtube);

        //print_r($_FILES['file']);
        if (!empty($_FILES['file']['name'])) {
            $file=$_FILES['file'];
            $file_name=$file['name'];
            $file_name=str_replace("'","\'",$file_name);
            
            $file_tmp=$file['tmp_name'];
            $file_rename=$randstring.$file_name;
            $file_location=ROOT_PATH.'assets/img/'.$file_rename;

            $file_type=$file['type'];

            $file_expend=explode('/', $file_type);
            $image_extension=$file_expend[0];
            if($image_extension=='image'){
                if (file_exists($file_rename)) {
                      echo "Sorry, file already exists.";
                      
                }else{
                     $success_insert=$con->query("UPDATE `employ` SET `name`='$name',`email`='$email',`phone`='$phone',`facebook`='$facebook',`title`='$title',`youtube`='$youtube', `file`='$file_rename',`describ`='$describ', `user_type`='$user_type' WHERE `id`='$id'");
                            
                         if($success_insert){
                            $prev_image=$_POST['prev'];
                            if (file_exists(ROOT_PATH.'assets/img/'.$prev_image)) {
                                unlink(ROOT_PATH.'assets/img/'.$prev_image);
                            }
                            
                            move_uploaded_file($file_tmp, $file_location);
                             echo '<script>swal("Success!", "Successfully updated!", "success")</script>';
                         }else{
                           echo '<script>swal("Failed!", "Err updated!", "error")</script>';

                        }
                }
                
            }else{
               echo '<script>swal("Failed!", "Err file type!", "error")</script>';
            }
   
        }else{
            
            $suc=$con->query("UPDATE `employ` SET `name`='$name',`email`='$email',`phone`='$phone',`facebook`='$facebook',`title`='$title',`youtube`='$youtube',`describ`='$describ' WHERE `id`='$id'");
            if ($suc) {
               echo '<script>swal("Success!", "Successfully updated!", "success")</script>';
            }
        }
        
    }
 ?>