<style type="text/css">
  /*--------------------------------------------------------------
# F.A.Q
--------------------------------------------------------------*/
  .faq {
    margin-top: 85px;
    padding: 60px 0;
    position: relative;
  }

  .faq .faq-list {
    padding: 0;
    list-style: none;
  }

  .faq .faq-list li {
    border-bottom: 1px solid #eae7e5;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }

  .faq .faq-list .question {
    display: block;
    position: relative;
    font-size: 18px;
    line-height: 24px;
    font-weight: 400;
    font-weight: 600;
    padding-left: 25px;
    cursor: pointer;
    color: #0d6efd;
    transition: 0.3s;
  }

  .faq .faq-list i {
    font-size: 16px;
    position: absolute;
    left: 0;
    top: -2px;
  }

  .faq .faq-list p {
    margin-bottom: 0;
    padding: 10px 0 0 25px;
  }

  .faq .faq-list .icon-show {
    display: none;
  }

  .faq .faq-list .collapsed {
    color: #343a40;
  }

  .faq .faq-list .collapsed:hover {
    color: #0d6efd;
  }

  .faq .faq-list .collapsed .icon-show {
    display: inline-block;
    transition: 0.6s;
  }

  .faq .faq-list .collapsed .icon-close {
    display: none;
    transition: 0.6s;
  }

  .faq img {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
  }

  @-webkit-keyframes up-down {
    0% {
      transform: translateY(50px);

    }

    100% {
      transform: translateY(-50px);
    }
  }

  @keyframes up-down {
    0% {
      transform: translateY(50px);

    }

    100% {
      transform: translateY(-50px);
    }
  }

  #faq_question {
    display: flex !important;
    align-items: center;
    justify-content: center;
    text-align: center;
    z-index: 99 !important;
    margin-bottom: 100px !important;

  }

  #faq_question .center {
    display: flex !important;
    align-items: center;

    flex-direction: row;
    color: white;
    /* background: #0d6efd; */
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 700;
    display: inline-block;
  }

  #faq_question .center a {
    color: #fff;
    margin-left: 5px;
  }

  #faq_question .center i {
    color: yellow;
    font-size: 35px;

  }

  .midSaleBg {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
  }

  @keyframes gradient {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }
</style>
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">

  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <p class="h2 text-center" style="opacity: .5;">F.A.Q</p>
      <h2>Frequently Asked Questions</h2>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
          <?php $row_si = 0;

          $faq_s = mysqli_query($con, "SELECT * FROM `faq`");
          while ($faq_r = mysqli_fetch_assoc($faq_s)) {
            $row_si++;
          ?>
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq<?= $row_si; ?>"><?= $faq_r['ask']; ?> <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq<?= $row_si; ?>" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <?= $faq_r['ans']; ?>
                </p>
              </div>
            </li>
          <?php } ?>
        </ul>

        <div id="faq_question">
          <div class="center midSaleBg">
            <i class="bi bi-pencil-square"></i>
            <a href="/about/#contact">Your Question is Our Answer. <br> আপনার প্রশ্ন আমাদের উত্তর।</a>
          </div>
        </div>
      </div>
      <!-- end col -->

      <!-- start col -->
      <div class="col-lg-4 d-none d-lg-block">
        <img class="img-fluid" src="<?= APP_URL;?>assets/img/details-1.png">
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->


  </div>
</section><!-- End F.A.Q Section -->