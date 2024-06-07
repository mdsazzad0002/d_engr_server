<?php
if (!defined('main')) {
  echo "<script>window.location.href='../index.php'</script>";
  exit();
};
?>
<style type="text/css">
  /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
  .contact {
    padding: 120px 0;
  }

  .contact .info-box {
    color: #444444;
    text-align: center;
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
    padding: 20px 0 30px 0;
    background: #fff;
    border-radius: 4px;
  }

  .contact .info-box i {
    font-size: 40px;
    color: #00c1c1;
    border-radius: 50%;
    padding: 8px;
  }

  .contact .info-box h3 {
    font-size: 20px;
    color: #334242;
    font-weight: 700;
    margin: 10px 0;
  }

  .contact .info-box p {
    padding: 0;
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }

  .contact .php-email-form {
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
    padding: 30px;
    background: #ffffff;
    border-radius: 4px;
  }

  .contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: green;
    text-align: left;
    padding: 15px;
    font-weight: 600;
  }

  .contact .php-email-form .error-message br+br {
    margin-top: 25px;
  }

  .img_contact img {
    width: 250px;
    margin-bottom: 15px;
    height: 100px;
  }

  .contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
  }

  .contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
  }

  .contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
  }

  .contact .php-email-form input,
  .contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
  }

  .contact .php-email-form input:focus,
  .contact .php-email-form textarea:focus {
    border-color: #00c1c1;
  }

  .contact .php-email-form input {
    padding: 10px 15px;
  }

  .contact .php-email-form textarea {
    padding: 12px 15px;
  }

  .contact .php-email-form button[type=submit] {
    background: #00c1c1;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 4px;
  }

  .contact .php-email-form button[type=button] {
    background: #ee0000;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 4px;
  }

  .contact .php-email-form button[type=submit]:hover {
    background: darkem(#00c1c1, 5);
  }

  @-webkit-keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }


  /*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
</style>


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Contact Us</h2>
      <p class="text-center">Contact for any need. We are at your service. Requested no unnecessary contact.</p>
    </div>
    <?php
    $s_information = $con->query("SELECT * FROM `information`");
    while ($r_info = $s_information->fetch_assoc()) {
    ?>
      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p><?php echo $r_info['location']; ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p><?php echo $r_info['email']; ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p><?php echo $r_info['phone']; ?></p>
          </div>
        </div>

      </div>
    <?php } ?>
    <div class="row">

      <div class="col-lg-6 ">

        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.6426761646953!2d90.38711447449934!3d23.183238110315017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375511e6910abf39%3A0x20860e13c054d730!2sShariatpur%20Polytechnic%20Institute!5e0!3m2!1sen!2sbd!4v1671359525407!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width: 100%; height: 384px;"></iframe>
      </div>


      <div class="col-lg-6">
        <div class="review">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">

            <div class="row">
              <div class="col-offset-4 img_contact">
                <?php
                $row_ico = $con->query("SELECT * FROM `logo` WHERE `type`='logo'");
                while ($row_logo = $row_ico->fetch_assoc()) {
                ?>
                  <img hidden src="<?php echo APP_URL.'assets/img/'; ?><?php echo $row_logo['file']; ?>">
                <?php
                }
                ?>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required 
              value="<?php if (isset($_GET['title'])) {
                echo 'Project Name: ' . $_GET['title'] . ' (id=' . $_GET['id'] . ')';
              } ?>">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required>
<?php if (isset($_GET['title'])) {
  echo 'Phone:
Location:
Dear,

Thank you.';
} ?>

</textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center">
              <button type="button" hidden id="close_review">
                x
                Close</button>
              <button name="messagebtn" type="submit">Send Message</button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->