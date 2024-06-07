<?php require_once '../conection/index.php'; ?>
<?php define('main', 420); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php if (isset($_GET['catagory'])) {
            echo ucfirst($_GET['catagory']) . ' ~ ';
          } ?> Web Demo Project ~ D Engr Web</title>
  <?php
  // fav section
  if (file_exists('../assets/custom/quick_info.php')) {
    require_once '../assets/custom/quick_info.php';
  }

  ?>

  <link href="<?=APP_URL;?>demo/style.css" rel="stylesheet">

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
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="section-title">
        <h2>Latest and Best Quality website Templates</h2>
      </div>

      <div class="container">
        <div class="mt-3" id="swcase_load">

          <!-- load by ajax -->
        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
  <?php
  // footer section
  if (file_exists('../assets/custom/footer.php')) {
    require_once '../assets/custom/footer.php';
  } else {
    echo "Not found footer";
  }
  ?>


  <!-- Template Main JS File -->

  <script type="text/javascript">
    // call swackase data
    let project_id = '';

    function data_load() {
      $(document).ready(() => {
        const myInterval = setTimeout(() => {
          $.ajax({
            type: 'POST',
            url: 'swackase.php',
            data: {
              'project_id': project_id,
              'catagory': `<?php if (isset($_GET['catagory'])) {
                              echo $_GET['catagory'];
                            } else {
                              echo '';
                            } ?>`,
            },
            success: function(data) {
              let data_array = JSON.parse(data);

              let print_data = `<div data-aos="fade-up" data-aos-delay="100">
      <div class="member">

        <!-- start row -->
        <div class="row">
          <!-- image col5 -->
          <div class="col-md-5">
            <div class="member-img text-center align-items-center justify-between-center p-1">
              <img src="<?=APP_URL.'assets/img/';?>${data_array['image']}" class="img-fulid" alt="" />

            </div>
          </div>
          <!-- content col7 -->
          <div class="col-md-7">
            <div class="member-info">
              <h4 class="h5">
                ${data_array['name']}

              </h4>
             
              <p class="">${data_array['description']} </p>

     
              <div class="btns_project">
                <a target="_blank" href="<?=APP_URL;?>view/?id=${data_array['project_id']}" title="View this Templates" class="btn  ">
                <i class="bi bi-arrow-up-right-square ">&nbsp;</i> Live Demo</a>

                <a  href="/profile/?download=${data_array['project_id']}" title="Download  this Website templates" class="btn"><i class="bi bi-download"></i>&nbsp;</i> Free DownLoad</a>
              </div>





            </div>

          </div>
          <!-- end content -->


        </div>
        <!-- end row -->

      </div>
    </div>`;
              project_id = data_array['project_id']



              if (project_id == 'break') {
                console.log('end of print');
              } else {
                $('#swcase_load').append(print_data);
                data_load();
              }

            }
          })
        }, 300)
      })
    }
    data_load()
  </script>
</body>

</html>