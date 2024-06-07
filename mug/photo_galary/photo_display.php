	<?php if (file_exists('../../conection/index.php')) {
        require_once '../../conection/index.php';
    } ?>

	<link href="<?= APP_URL;?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<div class="table-responsive">
	    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	        <thead>
	            <tr>
	                <th>SI</th>
	                <th>Image</th>
	                <th>Title</th>
	                <th>Type</th>
	                <th>View</th>
	                <th>Edit</th>
	                <th>Delete</th>

	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>SI</th>
	                <th>Image</th>
	                <th>Title</th>
	                <th>Type</th>
	                <th>View</th>
	                <th>Edit</th>
	                <th>Delete</th>

	            </tr>
	        </tfoot>
	        <tbody>
	            <?php $row_si = 0;

                $select_banar = mysqli_query($con, "SELECT * FROM `photo_galary`  ORDER BY `id` DESC");
                while ($row_slider = mysqli_fetch_assoc($select_banar)) {
                    $row_si++;

                ?>
	                <tr>
	                    <td><?= $row_si; ?></td>
	                    <td><img onclick="copy(this)" title="Click to copy url " style="width: 50px; height:50px;" src="<?= APP_URL.'assets/img/'.$row_slider['file']; ?>" alt=""></td>
	                    <td><?= $row_slider['name']; ?></td>
	                    <td> <?php echo $row_slider['type']; ?></td>



	                    <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand<?= $row_slider['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
	                        <!-- ================== information web short title ================== -->
	                        <!-- ================== information web  short title ================== -->

	                        <div class="modal fade" id="user_expand<?= $row_slider['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                            <div class="modal-dialog" role="document">
	                                <div class="modal-content">
	                                    <div class="modal-header">
	                                        <h5 class="modal-title" id="exampleModalLabel">Information of Photo Galary</h5>
	                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                            <span aria-hidden="true">&times;</span>
	                                        </button>
	                                    </div>
	                                    <div class="modal-body">
	                                        <table class="table table-bordered table-striped table-hover">
	                                            <tr>
	                                                <td style="text-align:center;" colspan="2">
	                                                    <img style="max-width: 100px;" src="/image/notice/<?php echo $row_slider['file']; ?>" onclick="copy(this)" title="Click to copy url " />
	                                                </td>
	                                            </tr>

	                                            <tr>
	                                                <td>Name</td>
	                                                <td><?php echo $row_slider['name']; ?></td>

	                                            </tr>
	                                            <tr>
	                                                <td>Link</td>
	                                                <td><?php echo $row_slider['link']; ?></td>

	                                            </tr>

	                                            <tr>
	                                                <td>Type</td>
	                                                <td><?php echo $row_slider['type']; ?></td>

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
	                    <td>
	                        <a href="javascript:void(0)" onclick="update_photo(this, '<?= $row_slider['id']; ?>' )" class="float-right btn btn-warning btn-icon-split btn-sm">
	                            <span class="icon text-white-50">
	                                <i class="bi bi-pencil-fill"></i>
	                            </span>
	                            <span class="text">Edit</span>
	                        </a>
	                    </td>
	                    <td>
	                        <a href="javascript:void(0)" onclick="photo_delete(this, '<?= $row_slider['id']; ?>' )" class="float-right btn btn-danger btn-icon-split btn-sm">
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


	<script src="<?= APP_URL;?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= APP_URL;?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?= APP_URL;?>assets/vendor/datatables/datatables-demo.js"></script>