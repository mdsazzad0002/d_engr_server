<?php
if (!defined('main')) {
  echo "<script>window.location.href='/index.php'</script>";
  exit();
};
?>
<style type="text/css">
  /*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
  #about {
    background: url('/assets/img/bg.svg') center center;
    background-size: cover;
    padding: 60px 0;
    color: #fff;
    font-size: 15px;
    padding-bottom: 150px;
  }

  .about .content h2 {
    font-weight: 700;
    font-size: 48px;
    line-height: 60px;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .about .content h3 {
    font-weight: 500;
    line-height: 32px;
    font-size: 24px;
  }

  .about .content ul {
    list-style: none;
    padding: 0;
  }

  .about .content ul li {
    padding: 10px 0 0 28px;
    position: relative;
  }

  .about .content ul i {
    left: 0;
    top: 7px;
    position: absolute;
    font-size: 20px;
  }

  .about .content p:last-child {
    margin-bottom: 0;
  }
</style>

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="section-title">
      <p class="h2 text-center" style="opacity: .5;">ABOUT</p>
      <h2>About Us and Project</h2>
    </div>


    <div class="row content">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <img src="/assets/img/logo.jpg" class="img-fluid">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <h2>D Engr Web</h2>
        <h3>Every where Every time given response</h3>
        <p>
          Project About us
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Very soon response</li>
          <li><i class="ri-check-double-line"></i> Minimal rate project</li>
          <li><i class="ri-check-double-line"></i> Confortable edit mode</li>
          <li><i class="ri-check-double-line"></i> Social management Services</li>
          <li><i class="ri-check-double-line"></i> Video Editing Services</li>
          <li><i class="ri-check-double-line"></i> Digital marketing services</li>
        </ul>
        <p class="fst-italic">
          Stay connected for free project.
        </p>
        <a class="btn btn-primary p-2 rounded" data-lightbox href="https://www.youtube.com/watch?v=0lbzmZeS-BY"><i class="bi bi-play-circle "></i> watch Video</a>
        <a class="btn btn-primary p-2 rounded" href="/demo/"><i class="bi bi-play-circle "></i> See Demo Project</a>
      </div>
    </div>

  </div>
</section><!-- End About Section -->