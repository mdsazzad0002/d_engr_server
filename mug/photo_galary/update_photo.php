<?php 
					require_once '../../conection/index.php';
                        if(isset($_POST['name'])){
                           	$id=$_POST['id'];
                            $name=$_POST['name'];
                            $name=str_replace("'","\'",$name);
                           
                           
                            $link=$_POST['link'];
                            $link=str_replace("'","\'",$link);

                            $type=$_POST['type'];
                            $type=str_replace("'","\'",$type);

                         
      						$success_insert=mysqli_query($con,"UPDATE `photo_galary` SET `name`='$name',`type`='$type',`link`='$link' WHERE `id`='$id'");
                                     
                                   if($success_insert){
                                         echo '<p class="text-white bg-success p-2 rounded ">Note: We are Success</p>';
                                     }else{
                                     	echo '<p class="text-white bg-danger p-2 rounded ">Note: We are Failed</p>';
                                     }
                             
                           }else{
                                echo '<p class="text-white bg-danger p-2 rounded ">Note: Not found Expected data</p>';
                           }     
                        
                     ?>    
