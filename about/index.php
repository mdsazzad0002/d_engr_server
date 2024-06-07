<?php require_once '../conection/index.php'; ?>
<?php define('main', 420); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Demo - D Engr Web
  </title>

  <?php

  // fav section
  if (file_exists('../assets/custom/quick_info.php')) {
    require_once '../assets/custom/quick_info.php';
  } else {
    echo "Not found quick info icon";
  }

  ?>

  <!-- =======================================================
    starting ttcm v-0002
  ======================================================== -->
</head>

<body>


  <main id="main">
    <?php

    // header or navbar section
    if (file_exists('../assets/custom//header.php')) {
      require_once '../assets/custom/header.php';
    } else {
      echo "Not found header";
    }


    // Contact section
    if (file_exists('contact.php')) {
      require_once 'contact.php';
    } else {
      echo "Not found about";
    }



    ?>
  </main><!-- End #main -->

  <?php // footer section
  if (file_exists('../assets/custom/footer.php')) {
    require_once '../assets/custom/footer.php';
  } else {
    echo "Not found footer";
  }
  ?>
  <!-- Vendor JS Files -->
  <script src="<?=APP_URL?>assets/vendor/php-email-form/validate.js"></script>
</body>

</html>