<?php session_start(); ?>
<?php require_once '../conection/index.php'; ?>
<?php define('main', 420); ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sitemap - D Engr Web

  </title>

  <?php


  // hit counter section
  if (file_exists('../assets/custom/quick_info.php')) {
    require_once '../assets/custom/quick_info.php';
  } else {
    echo "Not found quick_info";
  }

  ?>



  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- VENDOR CSS ICON -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/boxicons/css/boxicons.css">
  <!-- <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
  <!-- <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" type="text/css" href="../assets/vendor/swiper/swiper-bundle.min.css"> -->
  <!-- Vendor animation file -->
  <!-- <link href="../assets/vendor/animate/animate.min.css" rel="stylesheet"> -->
  <!-- cdn css files -->
  <!-- <link rel="stylesheet" type="text/css" href="../assets/vendor/lightbox/lightbox.min.css"> -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
    <section id="sitemap">
      <div class="section-title mt-5">

        <h2>Sitemap </h2>
      </div>
      <div class="content">
        <ul>
          <li>
            <a href="/">http://<?= $_SERVER['HTTP_HOST']; ?>/</a>
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/about/">Contacts & About</a>
              </li>

              <li>
                <a href="/demo/">Demo</a>
                <ul>
                  <?php
                  $select_demo_map = $con->query("SELECT `name`, `id` FROM `project_info` LIMIT 50");
                  while ($row_demo_map = $select_demo_map->fetch_assoc()) { ?>
                    <li>
                      <a href="/view/?id=<?= $row_demo_map['id']; ?>">
                        <?= $row_demo_map['name']; ?>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </li>
              <li>
                <a href="/blog/">Blog</a>
                <ul>
                  <?php
                  $select_demo_map = $con->query("SELECT `name`, `id` FROM `blog` LIMIT 50");
                  while ($row_demo_map = $select_demo_map->fetch_assoc()) { ?>
                    <li>
                      <a href="/blog/?id=<?= $row_demo_map['id']; ?>">
                        <?= $row_demo_map['name']; ?>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </li>

              <li>
                <a href="/faq/">FAQ</a>
              </li>

            </ul>
          </li>
        </ul>
      </div>
    </section>

    <?php


    // footer section
    if (file_exists('../assets/custom/footer.php')) {
      require_once '../assets/custom/footer.php';
    } else {
      echo "Not found footer";
    }

    ?>
  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script> -->
  <!-- <script src="../assets/vendor/php-email-form/validate.js"></script> -->
  <!-- <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script> -->
  <!-- <script src="../assets/vendor/lightbox/lightbox.min.js"></script> -->
  <!-- <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script> -->
  <!-- <script src="../assets/vendor/typed.js/typed.min.js"></script> -->
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>