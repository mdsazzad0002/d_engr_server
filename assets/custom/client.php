<!-- 
System Requirement
--Sweper min cdn
  
 --><link rel="stylesheet" type="text/css" href="<?=APP_URL?>assets/vendor/swiper/swiper-bundle.min.css">
  <script src="<?=APP_URL?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- 
System requirement
--CDN SCRIPT
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
-->

<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='/index.php'</script>";
    exit();
   } ;
?>
   <style type="text/css">
   	/*--------------------------------------------------------------
# Clients
--------------------------------------------------------------*/
.clients{
  background-color: #f6f6f7;
  
}

.clients .swiper-slide img {
  opacity: 0.5;
  transition: 0.3s;
  filter: grayscale(1);
}

.clients .swiper-slide:hover img {
  opacity: 1;
  filter: grayscale(0);
}

.clients .swiper-slide-active img, .clients .swiper-slide-duplicate-active img{
  filter: grayscale(0);
  opacity: 1;
}

.clients .swiper-slide-duplicate-next img,.clients .swiper-slide-next img{
  filter: grayscale(0.5);
  opacity: .8;
}
 
.clients .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.clients .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #0880e8;
}

.clients .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #0880e8;
}

.clients .owl-item {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
}

.clients .owl-item img {
  width: 60%;
  opacity: 0.5;
  transition: 0.3s;
}

.clients .owl-item img:hover {
  opacity: 1;
}

.clients .owl-nav,
.clients .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.clients .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.clients .owl-dot.active {
  background-color: #0880e8 !important;

}



   </style>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-title" style="padding-top: 15px; padding-bottom: 0;position:relative">

      <div class="container" data-aos="zoom-in">
      <!-- <div class="section-title">
          <h2>What We Use  </h2>
        </div> -->

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <?php $s_success=$con->query("SELECT * FROM `photo_galary` WHERE `type`='success'");
            while($r_success=$s_success->fetch_assoc()){ ?>
            <div class="swiper-slide"><img src="<?php echo  APP_URL.'assets/img/'.$r_success['file']; ?>" class="img-fluid" alt=""></div>
          <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <script>
          /**
      * Clients Slider
      */
    new Swiper('.clients-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        // slidesPerView: 'auto',
        // pagination: {
        //   el: '.swiper-pagination',
        //   type: 'bullets',
        //   clickable: true
        // },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 60
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 80
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 120
            }
        }
    });

    </script>