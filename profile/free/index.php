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
                    ?>
                    <section id="team" class="team section-bg">
                        <div class="section-title">
                            <h2>Test Our Free Project</h2>
                        </div>
                        <div class="controls">
                            <button type="button" class="control" data-mixitup-control="" data-filter="all"><i class="bi bi-columns-gap"></i> All</button>
                            <?php $select_catagory = $con->query("SELECT * FROM `project_catagory`");
                            while ($row_catagory = $select_catagory->fetch_assoc()) { ?>
                                <button type="button" class="control" data-mixitup-control="" data-filter=".<?= $row_catagory['catagory']; ?>"><?= ucfirst($row_catagory['catagory']); ?></button>
                            <?php } ?>

                            <button type="button" class="control" data-mixitup-control="" data-sort="default:asc"><i class="bi bi-chevron-down"></i>Asc</button>
                            <button type="button" class="control" data-mixitup-control="" data-sort="default:desc"><i class="bi bi-chevron-up"></i> Desc</button>
                        </div>


                        <div class="mt-3" id="swackase_load">
                            <!-- load by ajax -->
                        </div>

                    </section><!-- End Team Section -->

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
    <script src="<?= APP_URL;?>assets/vendor/mixitup/mixitup.min.js"></script>
    <script src="free.js"></script>
</body>

</html>