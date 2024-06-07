<?php
define('main', 420);
require_once '../conection/index.php';
if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        if (mysqli_num_rows($con->query("SELECT * FROM `project_info` WHERE `id`='$id'")) == 1) {
            $row_project_info = mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`='$id'"));
?>


            <!DOCTYPE html>
            <html lang="en" prefix="og: http://ogp.me/ns#">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?= $row_project_info['name']; ?></title>
                <link rel="stylesheet" href="<?=APP_URL?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
                <!-- general meta tag -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="referrer" content="origin-when-cross-origin">
                <meta name="author" content="D engr Web">

                <!-- <meta http-equiv="refresh" content="500; url=https://www.facebook.com/mdsazzad0002/"> -->
                <meta name="robots" content="index,follow">
                <meta name="copyright" content="DengrWeb">
                <meta name="keywords" content="web, web design, web development, buy web project, developer, hire a developer, became a developer, developer technic, make a website, web gideline, free web template, complete website, web Marketing, digital marketing, video editing, social management">
                <meta name="description" content="Design is the easiest way to attract a user. Development is the ability of a web site to work. Marketing is about promoting or delivering your product to the user. One of them is related to each other along with the other.Very soon response. Minimal rate project. Confortable edit mode. video editing social managing">


                <!-- Linkedin Opengraph integration:https://www.linkedin.com/pulse/html-headers-og-meta-tags-david-polcari/-->
                <meta name="url" content="<?=APP_URL?>view/?id=<?= $id; ?>" />
                <meta name="type" content="ariticle" />
                <meta name="title" content="<?= $row_project_info['name']; ?>" />
                <meta name="description" content="<?= $row_project_info['description']; ?>">
                <meta name="image" content="<?=APP_URL?><?= $row_project_info['file']; ?>" />


                <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
                <meta name="twitter:card" content="<?= $row_project_info['name']; ?>" />
                <meta name="twitter:site" content="<?=APP_URL?>view/?id=<?= $id; ?>" />
                <meta name="twitter:creator" content="ariticle" />

                <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
                <meta property="og:url" content="<?=APP_URL?>view/?id=<?= $id; ?>" />
                <meta property="og:type" content="ariticle" />
                <meta property="og:title" content="<?= $row_project_info['name']; ?>" />
                <meta property="og:description" content="<?= $row_project_info['description']; ?>">
                <meta property="og:image" content="<?=APP_URL?><?= $row_project_info['file']; ?>" />

                <!-- GENERAL FAV ICON -->
                 <link href="<?= APP_URL;?>assets/img/<?=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='fav'"))['file'] ?? 'loading.png';?>" rel="icon">


                <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                    }

                    body {
                        font-family: sans-serif;
                        background: #eee;
                        overflow: hidden;
                    }

                    #header {
                        position: fixed;
                        top: 0;
                        left: 0;
                        right: 0;
                        display: flex;
                        align-items: center;
                        justify-content: space-around;
                        background-color: #eee;
                        height: 60px;
                        border-bottom: 1px solid #6b6b6b;
                    }

                    #header .logo {
                        display: flex;
                        height: 40px;
                        line-height: 40px;
                        text-decoration: none;
                    }

                    #header .logo img {
                        width: 100%;
                        height: 100%;
                        object-fit: contain;
                        margin-right: 5px;

                    }

                    #header .logo span {
                        color: transparent;
                        font-weight: bold;
                        font-size: 45px;
                        font-weight: 800;
                        line-height: 40px;
                        height: 40px;
                        display: inline-block;
                        background: linear-gradient(to right top, #ce1aa7, #cee026, #06a857, #d61a1a, black);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-size: 400%;
                        animation: title_animate 4s linear infinite;
                    }

                    @keyframes title_animate {
                        from {}

                        to {
                            background-position: 400%;
                            filter: hue-rotate(-360deg);
                        }

                    }


                    #header .size {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                    }

                    #header .size label {
                        position: relative;
                        margin: 0 5px;
                        color: #fff;
                        cursor: pointer;
                    }

                    #header .size label i,
                    #header .backtodemo,
                    #header .next,
                    #header .prev {
                        background: #3292d1;
                        text-decoration: none;
                        color: #fff;
                        padding: 10px;
                        border: 1px solid #3292d1;
                        box-shadow: -3px -3px 7px #ffffff70, 3px 3px 7px rgba(0, 0, 0, 0.4);
                        border-radius: 5px;
                    }

                    #header .size div i:hover,
                    #header .call a:hover,
                    #header .next:hover,
                    #header .prev:hover,
                    #header .backtodemo:hover,
                    #view_on_mobile:checked~#header .size .phone i,
                    #view_on_tablet:checked~#header .size .tablet i,
                    #view_on_pc:checked~#header .size .labtop i,
                    .active {
                        box-shadow: inset -3px -3px 7px #ffffff70, inset 3px 3px 7px rgba(0, 0, 0, 0.4);
                    }

                    #header .title {
                        color: transparent;
                        font-weight: bold;
                        font-size: 45px;
                        font-weight: 800;
                        line-height: 40px;
                        height: 40px;
                        display: inline-block;
                        background: linear-gradient(to right, #f057cf, #a1baca, #11d473);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent
                    }

                    #header .call a {
                        text-decoration: none;
                        color: #fff;
                        background: #3292d1;
                        padding: 10px;
                        border-radius: 5px;
                        box-shadow: -3px -3px 7px #ffffff70, 3px 3px 7px rgba(0, 0, 0, 0.2);
                    }

                    #header .call a.reload:focus i {
                        animation: rotate 0.3s infinite;
                        display: inline-block;
                    }

                    @keyframes rotate {
                        form {}

                        to {
                            transform: rotate(-360deg);
                        }
                    }



                    /*view part*/
                    #view {
                        background: #fff;
                        padding-top: 60px;
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        z-index: -1;

                    }

                    #view iframe {
                        width: 100%;
                        height: calc(100vh - 60px);

                    }



                    #view_on_mobile:checked~#view.responsive {
                        min-width: 320px;
                        max-width: 425px;
                        margin: 0 auto;
                        border-left: 3px solid #fff;
                    }




                    #view_on_tablet:checked~#view.responsive {
                        min-width: 425px;
                        max-width: 768px;
                        margin: 0 auto;
                        border-left: 3px solid #fff;

                    }

                    #view_on_pc:checked~#view.responsive {
                        min-width: 768px;
                        margin: 0 auto;

                    }

                    input[type='radio'] {
                        display: none;
                    }


                    @media (max-width:1300px) {
                        #header .logo {
                            display: none;
                        }
                    }

                    @media (max-width:1000px) {
                        #header .backtodemo span {
                            display: none;
                        }
                    }

                    @media (max-width:800px) {

                        #header .next span,
                        #header .prev span {
                            display: none;
                        }

                        .d-lg-block {
                            display: inline-block !important;
                        }
                    }


                    @media (max-width:500px) {
                        #header .title {
                            display: none;
                        }

                        .d-none {
                            display: none !important;
                        }
                    }
                </style>
            </head>

            <body>
                <input type="radio" name="viewsize" id="view_on_mobile">
                <input type="radio" name="viewsize" id="view_on_tablet">
                <input type="radio" name="viewsize" id="view_on_pc">
                <section id="header">

                    <a class="logo" href="<?=APP_URL?>demo/">
                        <img src="<?= APP_URL;?>assets/img/<?=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='logo'"))['file'] ?? 'loading.png';?>" alt="">
                        <!-- <span>TTCM</span> -->
                        <!-- <span>D Engr Web</span> -->
                    </a>





                    <?php
                    if (mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`<'$id'")) == true) {
                        $prev_peoject = mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`<'$id' ORDER BY `id` desc"));
                    ?>

                        <a title="<?= $prev_peoject['name']; ?>" href="?id=<?= $prev_peoject['id']; ?>" class="prev"> <i class="bi bi-chevron-left"></i><span>Previous</span></a>

                    <?php
                    } else {
                        // echo 'not';
                    }
                    ?>


                    <div class="size">
                        <label for="view_on_mobile" title="View on mobile size" class="phone">
                            <i class="bi bi-phone"></i>

                        </label>
                        <label for="view_on_tablet" class="tablet">
                            <i title="View on tablet size" class="bi bi-tablet"></i>

                        </label>
                        <label for="view_on_pc" title="View on labtop Size" class="labtop">
                            <i class="bi bi-tv"></i>

                        </label>
                    </div>
                    <!-- <div class="title">
            <?php //$row_project_info['name'];
            ?>
        </div> -->


                    <?php
                    if (mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`>'$id'")) == true) {
                        $next_peoject = mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`>'$id'"));
                    ?>

                        <a title="<?= $next_peoject['name']; ?>" href="?id=<?= $next_peoject['id']; ?>" class="next"> <span>Next</span> <i class="bi bi-chevron-right"></i></a>

                    <?php
                    } else {
                        // echo 'not';
                    }
                    ?>



                    <div class="call ">
                        <a class="reload" title="Reload this page" href=""><i class="bi bi-arrow-counterclockwise"></i></a>
                        <a class="" href="<?=APP_URL?>about?title=<?= $row_project_info['name']; ?>&id=<?= $row_project_info['id']; ?>#contact" title="Please Contacts us any help"><i class="bi bi-headset"></i>&nbsp; <span class="d-none d-lg-block">Get Quote</span></a>
                    </div>
                </section>



                <section id='view' class="responsive">
                    <iframe src="<?php echo $row_project_info['demo']; ?>" frameborder="0"></iframe>
                </section>



                <script>

                </script>
            </body>

            </html>



<?php
        } else {
            echo '<script>window.location.href="../demo"</script>';
        }
    }
}
exit();
?>