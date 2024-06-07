<?php require_once '../conection/index.php'; ?>
<?php define('main', 420); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        <?php if (isset($_GET['query'])) {
            echo $_GET['query'];
        } else {
            echo "Search";
        } ?>
        - D Engr Web

    </title>

    <?php

    // fav section
    if (file_exists('../assets/custom/quick_info.php')) {
        require_once '../assets/custom/quick_info.php';
    } else {
        echo "Not found quick_info ";
    }

    ?>


    <!-- Vendor CSS Files -->
    <!-- need bootstrap -->
    <link href="<?=APP_URL?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=APP_URL?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- <link href="../assets/vendor/animate/animate.min.css" rel="stylesheet"> -->
    <!-- cdn css files -->

    <link rel="stylesheet" type="text/css" href="<?=APP_URL?>assets/vendor/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="<?=APP_URL?>assets/vendor/boxicons/css/boxicons.css">
    <!-- <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/vendor/lightbox/lightbox.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/vendor/swiper/swiper-bundle.min.css"> -->

    <!-- Template Main CSS File -->
    <link href="<?= APP_URL;?>assets/css/style.css" rel="stylesheet">
    <link href="<?=APP_URL?>search/style.css" rel="stylesheet">

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
        <!-- // swackase section
        if (file_exists('search.php')) {
        require_once 'search.php';
        } else {
        echo "Not found search";
        } -->
        <section id="search">
            <form id="search_form" action="/search" class="input-group my-3">
                <input list="search_suggession" required value="<?php if (isset($_GET['query'])) {
                                                                    echo $_GET['query'];
                                                                } ?>" type="search" placeholder="Enter Your Keyword" class="form-control" oninput="browser_url(this)" name="query" id="search_enger">
                <button type="submit" class="text border px-2">
                    Search
                </button>
            </form>



            <!-- serching content show -->
            <div class="content_load_by_ajax">
                <!-- load by ajax -->
            </div>


        </section>
        <?php      // footer section
        if (file_exists('../assets/custom/footer.php')) {
            require_once '../assets/custom/footer.php';
        } else {
            echo "Not found footer";
        }

        ?>
    </main><!-- End #main -->


    <!-- <script src="../assets/js/main.js"></script> -->
    <script type="text/javascript">
        // onchange browser url change
        function browser_url(data) {
            history.pushState(null, null, '?query=' + data.value);
            document.querySelector('title').innerHTML = data.value + " ~ D Engr Web";
        }

        document.addEventListener("DOMContentLoaded", function() {
            // automatic find data 500ms after
            setTimeout(function() {
                document.querySelector("#search_form button[type='submit']").click();
            }, 500)


            // data find submit and show
            let submit_form = document.querySelector('#search_form');
            submit_form.addEventListener('submit', function(e) {
                e.preventDefault();

                let vaildData = document.querySelector('#search_form input').value;
                vaildData = vaildData.trim();
                if (vaildData) {

                    // ajax request data load
                    const xhttp = new XMLHttpRequest();
                    xhttp.onload = function() {
                        document.querySelector('.content_load_by_ajax').innerHTML = this.responseText;
                    }
                    xhttp.open("GET", "search.php?query=" + vaildData, true);
                    xhttp.send();
                    // end ajax request data load

                } else {
                    console.log('not found')
                }

            })


        });


        AOS.init();
    </script>
</body>

</html>