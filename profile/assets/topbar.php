<?php
if (!defined('main')) {
    echo "<script>window.location.href='../'</script>";
    exit();
}
?>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar d-flex mb-4 sticky-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link /*d-md-none*/ rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- google translate  -->
    <div class="nav-link" style="height: 30px;overflow: hidden;" id="google_translate_element"></div>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                <?php $r_p_s = mysqli_fetch_assoc($con->query("SELECT `file`, `name` FROM `suscription` WHERE `email`='$user_type' OR `oauth_uid` = '$user_type'"));
                    $username = $r_p_s['name'];
                if (empty($r_p_s['file']) || $r_p_s == null) {
                    $r_p_s = '/assets/images/user.png';
                } else {
                    $r_p_s = '/assets/images/' . $r_p_s['file'];
                }
                // print_r($r_p_s);
                ?>
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php if (isset($username)) { echo $username; }else {echo 'No User';} ?>
                </span>
                <img class="img-profile rounded-circle" src="<?= $r_p_s; ?>">
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
                <a class="btn btn-primary" href="../logout/">Logout</a>

            </div>
        </div>
    </div>
</div>