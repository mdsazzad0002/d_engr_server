 		<?php require_once '../../conection/index.php'; ?>
        <table class="table table-bordered table-striped table-hover">
            <tr class="bg-primary text-light">
                <td>ID</td>
                <td>Phone</td>
                <td>Facebook</td>
                <td>Email</td>
                <td>View</td>
                <td>Delete</td>
            </tr>
            <?php 
            $i=1;
                $s_information=$con->query("SELECT * FROM `information`");
                while($r_info=$s_information->fetch_assoc()){
             ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $r_info['phone']; ?></td>
                <td><?php echo $r_info['facebook']; ?></td>
                <td><?php echo $r_info['email']; ?></td>
               




                <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#info_data_expand<?= $r_info['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web ================== -->
<!-- ================== information web ================== -->
        
                    <div class="modal fade" id="info_data_expand<?= $r_info['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Website</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                               <tr>
                                    <td>Phone</td>
                                    <td><?php echo $r_info['phone']; ?></td>
                                </tr>
                                <tr>

                                    <td>Facebook</td>
                                     <td><?php echo $r_info['facebook']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $r_info['email']; ?></td>

                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td><?php echo $r_info['location']; ?></td>
                               </tr>
                                <tr>
                                    <td>Area</td>
                                    <td><?php echo $r_info['area']; ?></td>
                                </tr>
                                <tr>
                                    <td>Uploaded By</td>
                                    <td><?php echo $r_info['user_type']; ?></td>

                                </tr>
                                <tr>
                                    <td>Uploaded Date</td>
                                    <td><?php echo $r_info['date']; ?></td>

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

<!-- ================== information web ================== -->
<!-- ================== information web ================== -->





                </td>
                <td><a class="btn btn-danger btn-sm btn-icon-split" onclick="icon_delete(this,'<?= $r_info['id']; ?>','information')" href="javascript:void(0)"><span class="icon text-white-50"><i class="bi bi-trash"></i></span><span class="text">Delete</span></a></td>
            </tr>
        <?php } ?>
        </table>