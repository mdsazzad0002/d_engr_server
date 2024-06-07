<?php require_once '../../conection/index.php'; ?>

<link href="<?= APP_URL;?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>SI</th>
                <th>P_ID</th>
                <th>Title</th>
                <th>Catagory</th>
                <th>Description</th>
                <th>Edit</th>
                <th>copy</th>
                <th>Send Mail</th>

                <th>Delete</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>SI</th>
                <th>P_ID</th>
                <th>Title</th>
                <th>Catagory</th>
                <th>Details</th>
                <th>Edit</th>
                <th>copy</th>
                <th>Send Mail</th>

                <th>Delete</th>

            </tr>
        </tfoot>

        <tbody>
            <?php
            // declare catagroy loop usage below
            $catagory_select = $con->query("SELECT * FROM `project_catagory`");
            $catagory = '';
            while ($row_catagory = $catagory_select->fetch_assoc()) {
                $catagory .= "<option value='" . $row_catagory['catagory'] . "'>" . ucfirst($row_catagory['catagory']) . "</option>";
            }


            $row_si = 0;
            $select_banar = mysqli_query($con, "SELECT * FROM `project_info`  ORDER BY `id` DESC");
            while ($row_slider = mysqli_fetch_assoc($select_banar)) {
                $row_si++;

            ?>
                <tr>
                    <td><?= $row_si; ?></td>

                    <td><img onclick="copy(this)" title="Click to copy link" style="width: 50px; height:50px;" src="<?php echo APP_URL.'assets/img/'.$row_slider['file']; ?>"> </td>
                    <td><?= $row_slider['name']; ?></td>
                    <th>
                        <select onchange="catagory_change(this, <?= $row_slider['id']; ?>)" class="form-control">
                            <option value="<?= $row_slider['catagory']; ?>"><?= ucfirst($row_slider['catagory']); ?></option>
                            <!-- declare upon catagory loop -->
                            <?= $catagory; ?>
                        </select>
                    </th>
                    <td>
                        <a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand<?= $row_slider['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
                        <!-- ================== information web short title ================== -->
                        <!-- ================== information web  short title ================== -->

                        <div class="modal fade" id="user_expand<?= $row_slider['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Information of Project</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered table-striped table-hover">
                                            <tr>
                                                <td style="text-align:center;" colspan="2"><img style="max-width: 300px;" src="<?php echo APP_URL.'assets/img/'. $row_slider['file']; ?>"></td>
                                            </tr>

                                            <tr>
                                                <td>Title</td>
                                                <td><?php echo $row_slider['name']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>Feture</td>
                                                <td><?php echo $row_slider['feture']; ?></td>

                                            </tr>

                                            <tr>
                                                <td>Description</td>
                                                <td><?php echo $row_slider['description']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>Watch Video</td>
                                                <td> <a class="btn btn-sm btn-primary btn-icon-split" href="<?= $row_slider['video']; ?>" data-lightbox>
                                                        <span class="icon text-white-50"><i class="bi bi-play-circle"></i></span> <span class="text">Watch</span></a></td>
                                            </tr>

                                            <tr>
                                                <td>Uploaded by</td>
                                                <td><?php echo $row_slider['user_type']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>Uploaded Date</td>
                                                <td><?php echo $row_slider['date']; ?></td>

                                            </tr>
                                        </table>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                            <span class="icon text-white-50">X</span>
                                            <span class="text">Close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================== information web short title ================== -->
                        <!-- ================== information web short title ================== -->
                    </td>
                    <td><button class="btn btn-warning btn-icon-split btn-sm" onclick="update_project(<?= $row_slider['id']; ?>)">
                            <span class="icon text-white-50">
                                <i class="bi bi-pencil-square"></i>
                            </span>
                            <span class="text">
                                Edit
                            </span>
                        </button></td>
                    <td>
                        <a onclick="copy_a_link(this)" title="This link can copy" class="btn btn-warning btn-sm btn-icon-split float-right ml-2" href="javascript:void(0)" data-href="<?= APP_URL;?>view/?id=<?= $row_slider['id']; ?>&title=<?= $row_slider['name']; ?>"><span class="icon text-white-50"><i class="bi bi-link-45deg"></i></span><span class="text">Copy</span> </a>


                    </td>
                    <td>
                        <button class="btn btn-primary btn-icon-split btn-sm" onclick="mailfun(<?= $row_slider['id']; ?>)">
                            <span class="icon text-white-50">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <span class="text">
                                Mail Alert
                            </span>
                        </button>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="delete_project(this, <?= $row_slider['id']; ?>)" class="float-right btn btn-danger btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Delete</span>

                        </a>

                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>

<!-- vendor datatable plagin -->
<script src="<?= APP_URL;?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= APP_URL;?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= APP_URL;?>assets/vendor/sb-admin/js/demo/datatables-demo.js"></script>