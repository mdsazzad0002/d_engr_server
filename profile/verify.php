<?php require_once 'assets/session.php'; ?>
<?php require_once '../conection/index.php'; ?>
<?php define('main', 420);
if (isset($_COOKIE['user'])) {
    $data = '';
    if (isset($_GET['download'])) {
        $data =  '?download=' . $_GET['download'];
    };
    echo "<script>window.location.href='dashboard/" . $data . "';</script>";
}
?>



<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <?php
    // fav section
    if (file_exists('../assets/custom/quick_info.php')) {
        require_once '../assets/custom/quick_info.php';
    } else {
        echo "Not found Quick Info";
    }

    ?>


    <link href="style.css" rel="stylesheet">

    <!-- =======================================================
    starting ttcm v-0002
  ======================================================== -->
</head>

<body>
    <main id="main">
        <section></section>
        <?php
        // header or navbar section
        if (file_exists('../assets/custom/footer.php')) {
            require_once '../assets/custom/footer.php';
        } else {
            echo "Not found footer";
        }
        ?>
        <section>
            <?php
            // header or navbar section
            if (file_exists('../assets/custom/header.php')) {
                require_once '../assets/custom/header.php';
            } else {
                echo "Not found header";
            }
            if (isset($_GET['unque_id'])) {
                $email = base64_decode($_GET['unque_id']);
                $token = $_GET['token'];
                if (mysqli_num_rows($con->query("SELECT * FROM `suscription` WHERE `email` ='$email' AND `status`='$token'")) == 1) {
                    if ($con->query("UPDATE `suscription` SET `status`='active' WHERE `email`='$email'")) {
            ?>
                        <script>
                            swal({
                                icon: 'success',
                                title: 'Please wait',
                                text: 'Your Verify is Successfull'
                            });
                            setTimeout(() => {
                                window.location.href = '/profile/';
                            }, 1500)
                        </script>
                <?php
                    }
                }
            } else { ?>
                <script>
                    swal({

                        icon: 'warning',
                        title: 'Link Not valid',
                        text: 'This link Expired'
                    });
                    setTimeout(() => {
                        window.location.href = '/profile/';
                    }, 1500)
                </script>
            <?php }
            ?>
        </section>

</body>

</html>