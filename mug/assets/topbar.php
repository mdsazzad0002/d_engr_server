<?php
if (!defined('main')) {
    echo "<script>window.location.href='../'</script>";
    exit();
};
?>

<style>
    .lightbox-container {
        z-index: 2000;
    }
</style>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar d-flex mb-4 sticky-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link /*d-md-none*/ rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <!-- <a class="btn nav-link" href="">nothing</a>
    <a class="btn nav-link" href="../customize/technology.php"><i class="bi bi-book-half mr-1"></i> Technology</a> -->
    <a class="btn nav-link" href="../message/"><i class="bi bi-envelope-fill mr-1"></i> Message </a>
    <a class="btn nav-link" href="../faq/index.php"><i class="bi bi-question-circle mr-1"></i> FAQ </a>

    <?php

    if (file_exists('../assets/custom/translate.php')) {
        require_once '../assets/custom/translate.php';
    }
    ?>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php if (isset($_SESSION['full'])) {
                            echo $_SESSION['full'];
                        }elseif (isset($_SESSION['half'])) {
                            echo $_SESSION['half'];
                        } ?>
                                                                                
                </span>
                 <?php $r_p_s = mysqli_fetch_assoc($con->query("SELECT * FROM `admin_user` WHERE `email`='$user_type'"))['file'];
                if (empty($r_p_s) or $r_p_s == null) {
                    $r_p_s = APP_URL.'assets/img/user.png';
                } else {
                    $r_p_s = APP_URL.'assets/img/' . $r_p_s;
                }
                ?>
                <img class="img-profile rounded-circle" src="<?= $r_p_s; ?>">
                <!-- <img class="img-profile rounded-circle" src="<?= APP_URL;?>assets/img/user.png"> -->
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../profile/">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../login/logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>