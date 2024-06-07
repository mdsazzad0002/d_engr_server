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
            <form class="mail_form" method="post">
                <h3>Lost Your Password</h3>
                <label for="username">Email</label>
                <input type="text" placeholder="Email" name="email" id="username">
                <p class="text-center"><a class="my-3 d-block mx-auto" href="/profile/">Login Now</a></p>
                <button type="submit" name="submit_email" value="Submit">Send Mail</button>

            </form>
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


    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let mail_form = document.querySelector('.mail_form');
            mail_form.addEventListener('submit', function(e) {
                e.preventDefault();

                const xhttp = new XMLHttpRequest;
                let formdata = new FormData(mail_form);
                xhttp.onload = function() {
                    let data_return = JSON.parse(this.responseText);
                    if (data_return.i_icon == 'success') {
                        $.ajax({
                            type: 'post',
                            url: '<?= $url_email_send; ?>',
                            data: {
                                email: data_return.i_email,
                                code: data_return.i_code,
                                lost_password: 'lost_password',
                            },
                            success: function(data1) {
                                data1 = JSON.parse(data1);
                                swal({
                                    'icon': data1.i_icon,
                                    'title': data1.i_title,
                                    'text': data1.i_text
                                })
                            }
                        })
                    } else {
                        swal({
                            'icon': data_return.i_icon,
                            'title': data_return.i_text,

                        })
                    }
                }
                xhttp.open("POST", "update_code.php");
                xhttp.send(formdata);

            })
        })
    </script>

</body>

</html>