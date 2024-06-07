<?php require_once '../conection/index.php'; ?>
<?php define('main', 420); ?>



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


    <link href="../profile/style.css" rel="stylesheet">

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
        ?>

        <section class="form_login_register">
            <script src="<?= APP_URL;?>assets/vendor/sweetalert/sweetalert.js"></script>
        </section>
        <section class="form_login_register">
            <?php
            if (isset($_GET['token'])) {
                if (isset($_GET['unque_id'])) {
                    $token = $_GET['token'];
                    $unque_id = base64_decode($_GET['unque_id']);
                    if (mysqli_num_rows($con->query("SELECT * FROM `suscription` where `email`='$unque_id' AND `checkpoint` ='$token'")) == 1) {
            ?>
                        <form action="?" class="mail_form_reset" method="post">
                            <h3 class="text-center">Lost Your Password</h3>

                            <input type="text" placeholder="Email" hidden value="<?= $unque_id; ?>" name="email" id="username">

                            <label for="password">Password</label>
                            <input type="text" placeholder="Enter your Password" name="password" id="username">

                            <button type="submit" name="submit_email" value="Submit">Change Password</button>

                        </form>

                <?php
                    } else {
                        echo "<h3 class='text-center bg-danger text-light p-3 rounded'> Not Match any data</h3>";
                    }
                } else {
                    echo "<h3 class='text-center bg-danger text-light p-3 rounded'> We are not found token id</h3>";
                }
            } elseif (isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = md5('d_engr_web' . $_POST['password']);

                $con->query("UPDATE `suscription` SET `password`='$password' , `status`='active', `checkpoint`='' WHERE `email`='$email'");
                ?>
                <script>
                    swal({
                        'icon': 'success',
                        'title': 'Successfully updated',
                    })
                    setInterval(() => {
                        window.location.href = '../profile/';
                    }, 1500);
                </script>
            <?php
            } else {
                echo "<h3 class='text-center bg-danger text-light p-3 rounded'> We are not found info</h3>";
            }

            ?>

        </section>





        <div class="status_code" style="display: none;">
            <!-- error fixed -->
        </div>
    </main><!-- End #main -->
    <?php
    // header or navbar section
    if (file_exists('../assets/custom/footer.php')) {
        require_once '../assets/custom/footer.php';
    } else {
        echo "Not found footer";
    }
    ?>


</body>

</html>