    <?php 
      
 	  require_once '../../conection/index.php';

        if(isset($_POST['name'])){
          $user_type=$_POST['user_type'];
          $user_type=str_replace("'","\'",$user_type);

            $name=$_POST['name'];
            $name=str_replace("'","\'",$name);

            $type=$_POST['type'];

            $description=$_POST['description'];
            $description=str_replace("'","\'",$description);

             $success_insert=mysqli_query($con,"INSERT INTO `important_link`( `name`, `type`,`description`,`user_type`) VALUES ('$name','$type','$description','$user_type')");
             if ($success_insert) {
             	echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success insert</p>";
             }else{
             	echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Success Failed</p>";
             }
         }else{
         	echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Not found Expected data</p>";
         }
                
            
                   
                           
                                
                        
                     ?>         
