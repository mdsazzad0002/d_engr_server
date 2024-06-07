<?php 
	require_once '../../conection/index.php';
  if(!isset($_POST['id'])){
        function getRandomString($n)
		    {
		      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		      $randomString = '';

		      for ($i = 0; $i < $n; $i++) {
		        $index = rand(0, strlen($characters) - 1);
		        $randomString .= $characters[$index];
		      }

		      return $randomString;
		    }
        $name=$_POST['name'];
        $name=str_replace("'","\'",$name);
        

        $user_type=$_POST['user_type'];
        $user_type=str_replace("'","\'",$user_type);

        $file=$_FILES['file'];
        $file_name=$file['name'];
        $file_name=str_replace("'","\'",$file_name);

        $file_tmp=$file['tmp_name'];

        $dlink=$_POST['dlink'];
        $dlink=str_replace("'","\'",$dlink);

        $vlink=$_POST['vlink'];
        $vlink=str_replace("'","\'",$vlink);

        $description=$_POST['description'];
        $description=str_replace("'","\'",$description);

 
        $feature=$_POST['feature'];
        $feature=str_replace("'","\'",$feature);

        if(!empty($_FILES['file']['name'])){
                   $file_rename=getRandomString(50).$file_name;
                  $file_location=ROOT_PATH.'assets/img/'.$file_rename;

                  $file_expend=explode('/', $_FILES['file']['type']);

                  $image_extension=$file_expend[0];

                  if($image_extension= 'image'){
                    if (file_exists($file_rename)) {
                        echo '<p class="p-2 bg-danger text-light">We are  failed plase try again</p>';
                          
                    }else{
                          $success_insert=mysqli_query($con,"INSERT INTO `project_info`(`file`, `video`, `demo`, `name`, `description`, `feture`, `user_type`) VALUES ('$file_rename','$vlink', '$dlink','$name','$description','$feature','$user_type')");

                        
                          if($success_insert){
                            move_uploaded_file($file_tmp, $file_location);
                              echo '<p class="p-2 bg-success text-light">We are  Success</p>';
                          }else{
                              echo '<p class="p-2 bg-danger text-light">Database err</p>';
                          }
                    }
                  }else{
                    echo 'Image type is not valid';
                  }
      }else{
            $success_insert=mysqli_query($con,"INSERT INTO `project_info`( `video`,`demo`, `name`, `description`, `feture`,  `user_type`) VALUES ('$vlink','$dlink','$name','$description','$feature','$user_type')");
          echo '<p class="p-2 bg-danger text-light">We are  Success but not found image</p>';
      }
  
    }
    // emd insert dadta
    // emd insert dadta
    // emd insert dadta




// update model data
// update model data
// update model data
   if(isset($_POST['id'])){
            function getRandomString($n)
		    {
		      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		      $randomString = '';

		      for ($i = 0; $i < $n; $i++) {
		        $index = rand(0, strlen($characters) - 1);
		        $randomString .= $characters[$index];
		      }

		      return $randomString;
		    }
        $id=$_POST['id'];
        $name=$_POST['name'];
         $name=str_replace("'","\'",$name);
         
        $user_type=$_POST['user_type'];
        $user_type=str_replace("'","\'",$user_type);


        $dlink=$_POST['dlink'];
         $dlink=str_replace("'","\'",$dlink);

        $vlink=$_POST['vlink'];
         $vlink=str_replace("'","\'",$vlink);

        $description=$_POST['description'];
         $description=str_replace("'","\'",$description);

        $feature=$_POST['feature'];
         $feature=str_replace("'","\'",$feature);


       if (!empty($_FILES['file']['name'])) {
            $file=$_FILES['file'];
            $file_name=$file['name'];
             $file_name=str_replace("'","\'",$file_name);

            $file_tmp=$file['tmp_name'];
            
            $file_rename=getRandomString(50).$file_name;
            $file_location=ROOT_PATH.'assets/img/'.$file_rename;

            $file_expend=explode('/', $_FILES['file']['type']);
            $image_extension=$file_expend[0];
           
            if($image_extension=='image'){
                if (file_exists($file_rename)) {
                     echo '<p class="p-2 bg-danger text-light">We are Sorry this file exists</p>';
                      
                }else{
                	  $prev=mysqli_fetch_assoc($con->query("SELECT `file` FROM `project_info` WHERE `id`='$id'"))['file'];
                      $success_insert=$con->query("UPDATE `project_info` SET `file`='$file_rename',`video`='$vlink', `demo`='$dlink',`name`='$name',`description`='$description',`feture`='$feature', `user_type`='$user_type' WHERE `id`='$id'");

                     
                     if($success_insert){
                        
                        if (file_exists(ROOT_PATH.'assets/img/'.$prev)) {
                            unlink(ROOT_PATH.'assets/img/'.$prev);
                        }
                        move_uploaded_file($file_tmp, $file_location);
                         echo '<p class="p-2 bg-success text-light">We are Success</p>';
                     }else{
                         echo '<p class="p-2 bg-danger text-light">Database err</p>';
                     }
                }
                
            }else{
                 $con->query("UPDATE `project_info` SET `video`='$vlink', `demo`='$dlink',`name`='$name',`description`='$description',`feture`='$feature', `user_type`='$user_type' WHERE `id`='$id'");
               	 echo '<p class="p-2 bg-danger text-light">Image not valid</p>';
               	 echo '<p class="p-2 bg-success text-light">We are  Success</p>';
            }
       }else{
            $con->query("UPDATE `project_info` SET `video`='$vlink', `demo`='$dlink',`name`='$name',`description`='$description',`feture`='$feature', `user_type`='$user_type' WHERE `id`='$id'");

             echo '<p class="p-2 bg-success text-light">We are  Success</p>';
             echo '<p class="p-2 bg-warning text-light">We are  not found image</p>';
       }
       
   
       }




            
    
 ?>