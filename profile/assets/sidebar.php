<?php
if (!defined('main')) {
    echo "<script>window.location.href='../'</script>";
    exit();
};
?>

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light shadow accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard/">
        <div class="sidebar-brand-icon ">
            <img class="rounded-circle" style=" height: 40px;" src="<?= APP_URL;?>assets/img/latest_logo.png">
        </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <?php
    $dir_explode = explode("/", $_SERVER['PHP_SELF']);
    $active = $dir_explode[count($dir_explode) - 2];

    ?>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($active == 'dashboard') {
                            echo 'active';
                        } ?>">
        <a class="nav-link " href="../dashboard/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Important
    </div>





    <!-- Side password -->
    <li class="nav-item <?php if ($active == 'free') {
                            echo 'active';
                        } ?>">
        <a class="nav-link " href="../free/">
            <i class="bi bi-stack"></i>
            <span>Free</span></a>
    </li>

    <!-- Side password -->
    <li class="nav-item <?php if ($active == 'pro') {
                            echo 'active';
                        } ?>">
        <a class="nav-link " href="../pro/">
            <i class="bi bi-stack"></i>
            <span>Pro</span></a>
    </li>


    <!-- Side password -->
    <li class="nav-item">
        <a class="nav-link " href="/about/">
            <i class="bi bi-question-octagon-fill"></i>
            <span>Complaint</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Advance Interface
    </div>


    <li class="nav-item <?php if ($active == 'viewSite') {
                            echo 'active';
                        } ?>">
        <a class="nav-link " href="/">
            <i class="bi bi-box-arrow-up-right"></i>
            <span>Visit Site</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->



</ul>
<!-- End of Sidebar -->