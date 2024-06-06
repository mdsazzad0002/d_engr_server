  <?php
  		require_once '../../conection/index.php';
          $data_alert = array();
  $data_alert['i_icon'] = 'error';
  $data_alert['i_title'] = 'Please Try later';
  		  if (isset($_POST['user_type'])) {
            $user_type=$_POST['user_type'];
          

  		if (isset($_POST['name'])) {
            if (isset($_POST['agree'])) {
                $user_type=$_POST['user_type'];
                $user_type=str_replace("'", "\'", $user_type);
                $name=$_POST['name'];
                $name=str_replace("'", "\'", $name);
                $phone=$_POST['phone'];
                $phone=str_replace("'", "\'", $phone);
                
                $description=$_POST['description'];
                $description=str_replace("'", "\'", $description);
                $password=$_POST['password'];
                $password=str_replace("'", "\'", $password);
                $control=$_POST['control'];
                $control=str_replace("'", "\'", $control);
                $c_password=$_POST['c_password'];
                $c_password=str_replace("'", "\'", $c_password);
                if ($password==$c_password) {
                    $password=md5($password);

                    $insert_user_admin=mysqli_query($con,"SELECT * FROM `admin_user` WHERE `email`='$user_type'");
                    $row_user_admin=mysqli_num_rows($insert_user_admin);
        

                    if ($row_user_admin==1) {
                        //echo $row_user_admin;
                        $insert_user_admin=mysqli_query($con,"UPDATE  `admin_user` SET `name`= '$name' ,`phone`= '$phone', `control`= '$control', `description`= '$description', `password`='$password' WHERE `email`= '$user_type'");
                        if ($insert_user_admin) {
                          $data_alert['i_icon'] = 'success';
              $data_alert['i_title'] = 'User Update success';
                        }
                    }else{
                      $data_alert['i_icon'] = 'warning';
            $data_alert['i_title'] = 'User Not found';
                    }
                }else{
                   $data_alert['i_icon'] = 'warning';
          $data_alert['i_title'] = 'Confirm Password Not Match';
                }
            }else{
                $data_alert['i_icon'] = 'warning';
        $data_alert['i_title'] = 'Press Agree Button';
            }
        } else {
      $data_alert['i_icon'] = 'warning';
      $data_alert['i_title'] = 'Name is not valid';
    }
        }else {
    $data_alert['i_icon'] = 'error';
    $data_alert['i_title'] = 'User Data fach Failed';
  } 



  $data_alert = json_encode($data_alert);
  echo $data_alert;
