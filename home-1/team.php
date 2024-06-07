<?php require_once '../conection/index.php'; ?>
<div class="container">

    <div class="section-title">
        <h2 class="">Our Team</h2>

    </div>

    <div class="row_own">
        <?php
        $i = 0;
        $s_employ = $con->query("SELECT * FROM `employ`");
        while ($r_employ = $s_employ->fetch_assoc()) {
            $i++;
        ?>
            <div class="col_own" <?php if ($i % 2 == 0) {
                                        echo 'data-aos="fade-up"';
                                    } else {
                                        echo 'data-aos="fade-up"';
                                    } ?> data-aos-delay="100">

                <div class="member text-center border">
                    <div class="pic"><img src="<?php echo APP_URL.'assets/img/'.$r_employ['file']; ?>" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4 class=""><?php echo $r_employ['name']; ?></h4>
                        <span><?php echo $r_employ['title']; ?></span>
                        <p><?php echo $r_employ['describ']; ?></p>

                    </div>
                </div>

            </div>
        <?php } ?>

    </div>

</div>