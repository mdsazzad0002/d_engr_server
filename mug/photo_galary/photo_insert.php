   <?php 

		   require_once '../../conection/index.php';
                        if(isset($_POST['name'])){
                           function generateRandomString($length = 100) {
                                    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
                                }
                            $user_type=$_POST['user_type'];
                            $name=$_POST['name'];
                            $name=str_replace("'","\'",$name);
                           
                            $file=$_FILES['file'];
                            $file_name=generateRandomString().$file['name'];
                            $file_name=str_replace("'","\'",$file_name);

                            $file_tmp=$file['tmp_name'];
                            $link=$_POST['link'];
                            $link=str_replace("'","\'",$link);

                            $type=$_POST['type'];
                            $type=str_replace("'","\'",$type);

                            $file_rename=$file_name;
                            $file_location=ROOT_PATH.'assets/img/'.$file_rename;
                            $file_expend=explode('.', $file_name);
                            $image_extension=end($file_expend);
                            if($image_extension=='jpg' OR $image_extension=='png' OR $image_extension=='gif' OR $image_extension=='jpeg' OR $image_extension=='JPG' OR $image_extension=='PNG' OR $image_extension=='GIF' OR $image_extension=='JPEG' OR $image_extension= 'pdf' OR $image_extension= 'PDF'){
                                if (file_exists($file_rename)) {
                                       echo '<p class="text-white bg-danger p-2 rounded ">Note: File already exists</p>';
                                      
                                }else{
                                      $success_insert=mysqli_query($con,"INSERT INTO `photo_galary`( `name`, `file`,`link`,`type`,`user_type`) VALUES ('$name','$file_rename','$link', '$type','$user_type')");
                                     
                                     if($success_insert){
                                        move_uploaded_file($file_tmp, $file_location);
                                         echo '<p class="text-white bg-success p-2 rounded ">Note: We are Success</p>';
                                     }else{
                                         echo '<p class="text-white bg-danger p-2 rounded ">Note: Some thing worng please try again</p>';
                                     }
                                }
                                
                            }
                       
                           }else{
                                echo '<p class="text-white bg-danger p-2 rounded ">Note: Not found Expected data</p>';
                           }     
                        
                     ?>    
