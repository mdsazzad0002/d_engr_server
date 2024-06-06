    <?php

    require_once '../../conection/index.php';

    if (isset($_POST['name'])) {
      $user_type = $_POST['user_type'];
      $user_type = str_replace("'", "\'", $user_type);

      $name = $_POST['name'];
      $name = str_replace("'", "\'", $name);


      $success_insert = mysqli_query($con, "INSERT INTO `project_catagory`( `catagory`, `user_type`) VALUES ('$name','$user_type')");
      if ($success_insert) {
        echo "<p class='bg-success p-2 rounded text-light d-block'>Note: Success insert</p>";
      } else {
        echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Success Failed</p>";
      }
    } else {
      echo "<p class='bg-danger p-2 rounded text-light d-block'>Note: Not found Expected data</p>";
    }






    ?>         
