<?php require_once 'conection/index.php'; ?>
<?php define('main', 420); ?>


<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>




    <?php
    // fav section
    if (file_exists('assets/custom/quick_info.php')) {
        require_once 'assets/custom/quick_info.php';
    } else {
        echo "Not found Quick Info";
    }

    ?>
    <link href="/home-1/style.css" rel="stylesheet">

    <!-- =======================================================
    starting ttcm v-0002
  ======================================================== -->
</head>

<body>
    <main id="main">
        <?php
        // header or navbar section
        if (file_exists('assets/custom/header.php')) {
            require_once 'assets/custom/header.php';
        } else {
            echo "Not found header";
        }
        ?>


        <!-- ======= hero_typed Section ======= -->
        <section id="hero_bg">

        </section>
        <section id="hero_typed" class="d-flex flex-column justify-content-center">
            <div class="container">
                <h3 class="visitors">Hello, <span>Visitors</span> It's</h3>
                <h1 class="animate-text">D Engr. Web</h1>

                <p>We are <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer, Editor, social manager, conent writer, marketing, programmer"></span></p>

                <div class="social-links">
                    <a href="https://twitter.com/dengrweb/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://web.telegram.org/k/#@dengrweb" target="_blank" class="telegram"><i class="bx bxl-telegram"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=8801590084779&text=Are%20you%20want%20help%20me?&type=phone_number&app_absent=0" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://facebook.com/dengrweb1" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/dengrweb/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://join.skype.com/invite/rKUmiSPCxryc" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="https://www.linkedin.com/in/dengrweb1/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <div class="btns">
                    <a href="/demo/">See Demo</a>
                    <a href="/about/#contact">Hire Us</a>
                </div>
            </div>
        </section><!-- End hero_typed -->



        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <a href="#counts">
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo mysqli_num_rows($con->query("SELECT * FROM `message`")); ?>" data-purecounter-duration="1" class="purecounter stats-no"></span>
                            <p>Feed Back</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <a href="/demo/">
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo mysqli_num_rows($con->query("SELECT * FROM `project_info`")); ?>" data-purecounter-duration="1" class="purecounter stats-no"></span>
                            <p>Projects</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <a href="#counts">
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo mysqli_num_rows($con->query("SELECT * FROM `visitor`")); ?>" data-purecounter-duration="1" class="purecounter stats-no"></span>
                            <p>Hit Counter</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <a href="/about#team">
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo mysqli_num_rows($con->query("SELECT * FROM `employ`")); ?>" data-purecounter-duration="1" class="purecounter stats-no"></span>
                            <p>Hard Workers</p>
                        </a>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section class="features" id="features">

            <div class="container">
                <div class=" section-title">
                    <h2 class="text-center">
                        Features
                    </h2>

                </div>
                <div class="row">
                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center" data-aos="fade-right">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-briefcase"></i>
                                </div>
                            </div>
                            <div>
                                <h3>
                                    Custom Design
                                </h3>
                                <p>We custom design for you. Through this you will get your required web site.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-col col-lg-4 col-xs-12 ">
                        <div class="card card-block text-center" data-aos="fade-up">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                            </div>
                            <div>
                                <h3>
                                    Responsive Layout
                                </h3>
                                <p>
                                    Our built websites display beautifully on any device. Our designs also vary by device.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center" data-aos="fade-left">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div>
                            </div>
                            <div>
                                <h3>
                                    Innovative Ideas
                                </h3>
                                <p>
                                    We are always busy creating something new. So that I can thank you for your innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center" data-aos="fade-right">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-binoculars"></i>
                                </div>
                            </div>
                            <div>
                                <h3>
                                    Good Documentation
                                </h3>
                                <p>
                                    Good documentation is also a useful tool. which later plays a role in updating
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center" data-aos="fade-up">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-brightness-high"></i>
                                </div>
                            </div>
                            <div>
                                <h3>
                                    Excellent Features
                                </h3>
                                <p>
                                    Our features will impress you effortlessly. I hope
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center" data-aos="fade-left">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-filetype-php"></i>
                                </div>
                            </div>
                            <div>
                                <h3>
                                    Dynamic Features
                                </h3>
                                <p>
                                    Here is Dynamic
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section>
        <!-- End Features Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <!-- load by ajax -->
        </section><!-- End Team Section -->




    </main><!-- End #main -->

    <?php
    // header or navbar section
    if (file_exists('assets/custom/footer.php')) {
        require_once 'assets/custom/footer.php';
    } else {
        echo "Not found footer";
    }

    ?>


    <script src="/assets/vendor/purecounter/purecounter_vanilla.js" crossorigin="anonymous"></script>
    <script src="/assets/vendor/waypoints/noframework.waypoints.js" crossorigin="anonymous"></script>
    <script src="/assets/vendor/typed.js/typed.min.js" crossorigin="anonymous"></script>
    <script src="/home-1/home-1.js"></script>
</body>

</html>