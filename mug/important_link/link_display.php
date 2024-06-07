
	<?php
		 if (file_exists('../../conection/index.php')) {
			require_once '../../conection/index.php';
		}
	 ?>

		<link href="<?= APP_URL;?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		 <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>Link Title</th>
                        <th>link</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                         <th>SI</th>
                        <th>Link Title</th>
                        <th>link</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                     <?php 
                     	 $row_si=0;
       					 $select_slider=mysqli_query($con,"SELECT * FROM `important_link`");
                         while($row_slider=mysqli_fetch_assoc($select_slider)){
      					 	$row_si++;
    				?>
                    <tr>
                        <td><?= $row_si;?></td>
                        <td> <?= $row_slider['name'];?></td>
                        <td> <img height="16" width="16" src='http://www.google.com/s2/favicons?domain=<?= $row_slider['description'];?>' /> <?= $row_slider['description'];?></td>
                    

                    <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#link_expand<?= $row_slider['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
        
                    <div class="modal fade" id="link_expand<?= $row_slider['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Important Link</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                              
                               
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $row_slider['name']; ?></td>

                                </tr>
                                
                                <tr>
                                    <td>Link</td>
                                    <td><?php echo $row_slider['description']; ?></td>

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
                        	<a href="javascript:void(0)" onclick="update_link(this, <?= $row_slider['id'];?>) " class="float-right btn btn-warning btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="bi bi-pencil-fill"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
			            </td>
			            <td>
                        	<a href="javascript:void(0)" onclick="delete_link(this, <?= $row_slider['id'];?>) " class="float-right btn btn-danger btn-icon-split btn-sm">
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
