<?php
if (!defined('main')) {
  echo "<script>window.location.href='<?= ADMIN_APP_URL;?>'</script>";
  exit();
};
?>
<!-- start row -->
<div class="row">
  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-primary border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `admin_user`")); ?> items
        <i class="bi bi-person float-right text-primary"></i>
      </div>
      <div class="card-body text-dark">
        Admin
      </div>
    </div>
  </div>
  <!-- end box -->

  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-success border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `employ`")); ?> items
        <i class="bi bi-people-fill float-right text-success"></i>
      </div>
      <div class="card-body text-dark">
        employ
      </div>
    </div>
  </div>


  <!-- next box -->

  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-primary border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `photo_galary`")); ?> items
        <i class="bi bi-images float-right text-primary"></i>
      </div>
      <div class="card-body text-dark">
        Photo Glary
      </div>
    </div>
  </div>


  <!-- next box -->



  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-warning border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `message`")); ?> items
        <i class="bi bi-info-circle float-right text-warning"></i>
      </div>
      <div class="card-body text-dark">
        message
      </div>

    </div>
  </div>


  <!-- next box -->


  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-success border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `important_link`")); ?> items
        <i class="bi bi-info-circle float-right text-success"></i>

      </div>
      <div class="card-body text-dark">
        Important Link
      </div>

    </div>
  </div>


  <!-- next box -->


  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-success border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `project_info`")); ?> items
        <i class="bi bi-info-circle float-right text-success"></i>

      </div>
      <div class="card-body text-dark">
        project info
      </div>

    </div>
  </div>


  <!-- next box -->




  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-success border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `visitor`")); ?> items
        <i class="bi bi-info-circle float-right text-success"></i>

      </div>
      <div class="card-body text-dark">
        Hit Counter
      </div>

    </div>
  </div>
  <!-- next box -->

  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-success border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `suscription`")); ?> items
        <i class="bi bi-info-circle float-right text-success"></i>

      </div>
      <div class="card-body text-dark">
        Member
      </div>

    </div>
  </div>
  <!-- next box -->


  <!-- box start total bannar -->
  <div class=" col-md-6 col-xl-4">
    <div class="card card-raised border-start border-success border-4 ">
      <div class="card-header h3">
        <?php echo $total_banner = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `suscribe`")); ?> items
        <i class="bi bi-info-circle float-right text-success"></i>

      </div>
      <div class="card-body text-dark">
        Newsletter
      </div>

    </div>
  </div>
  <!-- next box -->

</div>
<!-- end row -->