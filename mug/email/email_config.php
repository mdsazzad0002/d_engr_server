<div class="row">
    <div class="col-md-6">
        <form class="card" action="<?= ADMIN_APP_URL ?>general_setting/setting_post.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden name="settings">
            <div class="card-header">
                SMTP Email Config
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="smtp_server">
                                Mail Server
                            </label>
                            <input type="text" class="form-control" name="smtp_server" value="<?= setting('smtp_server',$con); ?>" id="smtp_server" placeholder="Enter your Email server">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="smtp_name">
                                User Name
                            </label>
                            <input type="text" class="form-control" name="smtp_name" value="<?= setting('smtp_name',$con); ?>" id="smtp_name" placeholder="Enter your User name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="smtp_password">
                                Password
                            </label>
                            <input type="text" class="form-control" name="smtp_password" value="<?= setting('smtp_password',$con); ?>" id="smtp_password" placeholder="Enter your password ">
                        </div>
                    </div>
               


                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="smtp_port">
                                Port
                            </label>
                            <input type="text" class="form-control" name="smtp_port" value="<?= setting('smtp_port',$con); ?>"  id="smtp_port" placeholder="Enter your Port ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="smtp_type">
                                Type
                            </label>

                            <input type="text" class="form-control" name="smtp_type" value="<?= setting('smtp_type',$con); ?>"  id="smtp_type" placeholder="Enter your type ssl/tls ">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="smtp_email">
                                From Email
                            </label>

                            <input type="email" required class="form-control" name="smtp_email" value="<?= setting('smtp_email',$con); ?>"  id="type" placeholder="Enter your type ssl/tls ">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status">
                                status
                            </label>

                            <input type="checkbox" hidden checked value="off" class="form-control" name="smtp_status" >
                            <input type="checkbox" value="on" required class="" name="smtp_status" <?php if (setting('smtp_status', $con)=='on') {
                                echo 'checked'; } ?>  id="status" placeholder="Enter your status  ">
                        </div>
                    </div>

                </div>



                 <button class="btn btn-success" type="submit">submit</button>
            </div>
        </form>
    </div>
</div>