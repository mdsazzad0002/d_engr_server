<?php 
    require_once '../assets/custom/session.php'; 
    define('main', 420);

    // database connection
    if (file_exists('../../conection/index.php')) {
        require_once '../../conection/index.php';
    }else{
        exit();
    }
 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
     <?php 
        
       
        // rank for meta tag
        if (file_exists('../assets/custom/meta.php')) {
            require_once '../assets/custom/meta.php';
        }
        
         // fav icon 
        if (file_exists('../assets/custom/fav.php')) {
            require_once '../assets/custom/fav.php';
        }
        

     ?>
    <title>Employ || 
        <?php
          // title
          if (file_exists('../assets/custom/title.php')) {
            require_once '../assets/custom/title.php';
          } 
        ?>
    </title>
   
    <!-- light box model css -->
    <link rel="stylesheet" type="text/css" href="<?= APP_URL;?>assets/vendor/lightbox/lightbox.min.css">
    
    <!-- VENDOR CSS ICON -->
    <link href="<?= APP_URL;?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= APP_URL;?>assets/vendor/boxicons/css/boxicons.css">
    <link href="<?= APP_URL;?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Vendor datatable css -->
    <link href="<?= APP_URL;?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= APP_URL;?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= APP_URL;?>assets/vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
  </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php 
            if (file_exists('../assets/custom/sidebar.php')) {
                require_once '../assets/custom/sidebar.php';
            }
         ?>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <?php 
                    // top bar
                    if (file_exists('../assets/custom/topbar.php')) {
                        require_once '../assets/custom/topbar.php';
                    }
                 ?>
                 <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <?php 
                        require_once '../assets/custom/session.php';
                        
                        require_once "../../conection/index.php"; 
                        if (isset($_POST['submit_login_page'])) {
                                $emailp=$_POST['emailp'];
                                $emailp=str_replace("'","\'",$emailp);

                                $password=$_POST['password'];
                                $password=md5(str_replace("'","\'",$password));
                                
                                $insert_user_admin=mysqli_query($con,"SELECT * FROM `admin_user` WHERE `email`='$emailp' AND `password`='$password'");
                                if (mysqli_num_rows($insert_user_admin)==1) {
                                     $_SESSION['full']=$emailp;
                                     if (isset($_SESSION['full'])) {
                                        echo "<script>window.location.href='../dashbord/'</script>";

                                        }else{
                                            echo "<script>window.location.href='../'</script>";
                                        }
                                    }else{
                                        echo "<script>window.location.href='../'</script>";
                                    } 
                              }

                         ?>
                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php 
                if (file_exists('../assets/custom/footer.php')) {
                    require_once '../assets/custom/footer.php';                }

             ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   <?php 
        if (file_exists('../assets/custom/back_to_top.php')) {
            require_once '../assets/custom/back_to_top.php';
        }
    ?>

    
    <!-- lightbox model js -->
    <script type="text/javascript" src="<?= APP_URL;?>assets/vendor/lightbox/lightbox.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= APP_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= APP_URL;?>assets/vendor/bootstrap4.6/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= APP_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- vendor datatable plagin -->
    <script src="<?= APP_URL;?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= APP_URL;?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= APP_URL;?>assets/vendor/sb-admin/js/demo/datatables-demo.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= APP_URL;?>assets/vendor/sb-admin/js/sb-admin-2.min.js"></script>
</body>
</html>


