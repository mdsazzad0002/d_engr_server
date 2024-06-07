<?php
// session and security
require_once '../assets/session.php';

// part page view control
define('main', 420);

// database connection
require_once '../../conection/index.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php
        // Webpage title another file quick change
        require_once '../assets/title.php';
        ?>
    </title>

    <?php
    // meta, link, vendor common file
    require_once '../assets/quick_info.php';
    ?>

    <!-- only this page style -->
    <link rel="stylesheet" href="style.css">
</head>


<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        // left sidebar
        require_once '../assets/sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                // top bar
                require_once '../assets/topbar.php';
                ?>

                <!-- Begin Page Content -->
                <!-- <div class="container-fluid"> -->
                <div class="container-fluid">
                    <?php
                    // breadcrumb 
                    require_once '../assets/breadcrumb.php';

                    // dashbord 
                    require_once 'email_config.php';
                    ?>
                    <!-- </div> -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->



            <?php
            // only credit
            require_once '../assets/footer.php';
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php
    // back to top and js file included
    require_once '../assets/last_footer.php';
    ?>
    <script type="text/javascript" src="important_link.js"></script>



</body>

</html>