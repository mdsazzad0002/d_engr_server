<?php
if (!defined('main')) {
    echo "<script>window.location.href='../'</script>";
    exit();
};
?>

<style type="text/css">
    .active {
        background: blue;

    }

    .input-group-text {
        width: 150px;
    }

    .wrapper {
        position: fixed;
        top: 0;
        left: 0;
    }
</style>

<!-- Sidebar -->

<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #000000;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashbord/">
        <div class="sidebar-brand-icon /*rotate-n-15*/">
            <?php $s_logo = mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='logo'"));
            $logo = $s_logo['file'] ?? 'loading.png';
            ?>
            <img class="/*rounded-circle*/" style="width: 70px; height: 40px;" src="<?=APP_URL.'assets/img/'. $logo; ?>">
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $s_title = mysqli_fetch_assoc($con->query("SELECT * FROM `web_title` WHERE `type`='title'"))['title'] ?? 'D Engr Web'; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <?php
    $dir_explode = explode("/", $_SERVER['PHP_SELF']);
    $active = $dir_explode[count($dir_explode) - 2];

    ?>
    <div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($active == 'dashbord') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../dashbord/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Important
        </div>

        

        <!-- Helpby -->
        <li class="nav-item <?php if ($active == 'team') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../team/">
                <i class="bi bi-people-fill"></i>
                <span>Team Member</span></a>
        </li>
        <!-- photo glary -->
        <li class="nav-item <?php if ($active == 'photo_galary') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../photo_galary/">
                <i class="bi bi-images"></i>
                <span>Photo Galary</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Interface
        </div>

        <!-- Instraction -->
        <li class="nav-item <?php if ($active == 'blog') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../blog/">
                <i class="bi bi-info-square"></i>
                <span>Blog</span></a>
        </li>

        <li class="nav-item <?php if ($active == 'project_catagory') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../project_catagory/">
                <i class="bi bi-info-square"></i>
                <span>Project Catagory</span></a>
        </li>

        <li class="nav-item <?php if ($active == 'project') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../project/">
                <i class="bi bi-info-square"></i>
                <span>Project</span></a>
        </li>


        <!-- Side important link -->
        <li class="nav-item <?php if ($active == 'important_link') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../important_link/">
                <i class="bi bi-star"></i>
                <span>Important link</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Advance Interface
        </div>

        <li class="nav-item <?php if ($active == 'admin') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../admin/">
                <i class="bi bi-person-badge-fill"></i>
                <span>Admin</span></a>
        </li>

        <li class="nav-item <?php if ($active == 'setting') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="../setting/">
                <i class="bi bi-gear-fill"></i>
                <span>Setting</span></a>
        </li>
        <li class="nav-item <?php if ($active == 'viewSite') {
                                echo 'active';
                            } ?>">
            <a class="nav-link " href="<?=APP_URL;?>">
                <i class="bi bi-box-arrow-up-right"></i>
                <span>Visit Site</span></a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
    </div>


</ul>
<!-- End of Sidebar -->