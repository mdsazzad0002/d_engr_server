<?php require_once '../conection/index.php'; ?>
<?php define('main', 420); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php if (isset($_GET['title'])) {
                echo $_GET['title'];
            } else {
                echo 'Blog';
            } ?> ~ D Engr Web
    </title>


    <?php

    // fav section
    if (file_exists('../assets/custom/quick_info.php')) {
        require_once '../assets/custom/quick_info.php';
    } else {
        echo "Not found quick info icon";
    }

    ?>
    <link rel="stylesheet" href="<?= APP_URL;?>assets/vendor/venobox/venobox.min.css">

    <link href="/blog/style.css" rel="stylesheet">

    <!-- =======================================================
    starting ttcm v-0002
  ======================================================== -->
</head>

<body>


    <main id="main">
        <?php

        // header or navbar section
        if (file_exists('../assets/custom/header.php')) {
            require_once '../assets/custom/header.php';
        } else {
            echo "Not found header";
        }

        // swackase section
        if (file_exists('blog.php')) {
            require_once 'blog.php';
        } else {
            echo "Not found blog";
        }




        ?>
    </main><!-- End #main -->
    <?php


    // footer section
    if (file_exists('../assets/custom/footer.php')) {
        require_once '../assets/custom/footer.php';
    } else {
        echo "Not found footer";
    }
    ?>
    <script src="<?= APP_URL;?>assets/vendor/venobox/venobox.min.js"></script>
    <script>
        new VenoBox({
            selector: '.my-image-links',
            numeration: true,
            infinigall: true,
            share: true,
            spinner: 'plane',
            titleattr: 'data-title'
        });
    </script>

</body>

</html>