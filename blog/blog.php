<link rel="stylesheet" href="style.css">
<?php require_once '../conection/index.php'; ?>

<section id="blog" class="blog">
    <div class="section-title">
        <h2>Our Blog</h2>
    </div>

    <div class="row">

        <?php if (isset($_GET['id'])) { ?>
            <div class="col-md-12 col-xl-8 ">
            <?php } else { ?>
                <div class="col-12 ">
                <?php }
                ?>


                <!-- if get id when show display -->
                <div class="box-container
             <?php if (!isset($_GET['id'])) {
                    echo 'autofit';
                } ?>">

                    <!-- specific blog -->
                    <?php
                    if (isset($_GET['id'])) {
                        if (!empty($_GET['id'])) {
                            $id = $_GET['id'];
                            if (mysqli_num_rows($con->query("SELECT * FROM `blog` WHERE `id`='$id'")) == 1) {
                                $row_blog = mysqli_fetch_assoc($con->query("SELECT * FROM `blog` WHERE `id`='$id' order by `id` desc"));
                    ?>
                                <div class="box width-100 border">

                                    <div class="content">
                                        <a href="<?= $row_blog['image']; ?>" data-title="<?= $row_blog['name']; ?>" class=" image text-center my-image-links" data-gall="gallery01">
                                            <img src="<?= $row_blog['image']; ?>" alt="">
                                        </a>
                                        <h3 class="mt-5"><?= $row_blog['name']; ?></h3>
                                        <div class="date"><span>Admin</span><span><?= $row_blog['date']; ?></span>
                                        </div>


                                    </div>
                                    <div class="description">
                                        <?= $row_blog['description']; ?>

                                    </div>
                                </div>
                    <?php
                            } else {
                                echo 'This content is not Avialable Thank you';
                            }
                        } else {
                            echo 'This content is not Avialable Thank you';
                        }
                    } ?>



                </div>
                </div>
                <!-- end show display blog -->


                <!-- blog suggession -->


                <?php if (isset($_GET['id'])) { ?>
                    <div class="col-md-12 col-xl-4 mb-3">
                    <?php } else { ?>
                        <div class="col-12 ">
                        <?php }
                        ?>
                        <div class="row">

                            <?php
                            $s = '';
                            if (isset($_GET['s'])) {
                                $s = $_GET['s'];
                                $select_blog = $con->query("SELECT * FROM `blog` WHERE `name` LIKE '%$s%' OR `description` LIKE '%$s%' ORDER BY `id` DESC");
                            } else {
                                $select_blog = $con->query("SELECT * FROM `blog` ORDER BY RAND() LIMIT 10");
                            }
                            $count_show_data = 0;
                            while ($row = $select_blog->fetch_assoc()) {
                                $count_show_data++;
                                if ($count_show_data > 10) {
                                    break;
                                }
                            ?>




                                <?php if (isset($_GET['id'])) { ?>
                                    <div class="col-12 mb-3">
                                    <?php } else { ?>
                                        <div class="col-md-6 col-xl-4 mb-3">
                                        <?php }
                                        ?>

                                        <!-- <div class="col-md-4 col-xl-12 mb-3"> -->
                                        <div class="card p-0 rounded shadow-sm border">
                                            <a data-title="<?= $row['name']; ?>" href="<?= $row['image']; ?>" data-gall="gallery01" class="card-header my-image-links text-center">
                                                <img class="img-fulid" src="<?= $row['image']; ?>" alt="">
                                            </a>
                                            <div class="card-body ">
                                                <div class="limit_data_show">
                                                    <?= $row['name']; ?>
                                                </div>
                                                <br>
                                                <div class="btn_buttom">
                                                    <a href="?id=<?= $row['id']; ?>&title=<?= $row['name']; ?>" class=" text-center btn-getstarted rounded"><i class="bi bi-eye"></i>&nbsp; See More </a>
                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                    <?php }
                                if ($count_show_data < 1) {
                                    echo "Not Found Data please try another Keyword";
                                }
                                    ?>

                                    </div>
                        </div>
                        </div>

                    </div>

                    <!-- end left side -->

            </div>
    </div>


    </sedction>
    <!-- end dadta blog sh0ow -->