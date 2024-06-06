<?php require_once '../../conection/index.php'; ?>
<div class="row">
          <div class="col-md-6">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>logo</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
             <?php $i=1;
                    $s_logo=$con->query("SELECT * FROM `logo` WHERE `type`='logo'");
                    while($r_logo=$s_logo->fetch_assoc()){
                 ?>
            <tr>

                <td><?php echo $i++;?></td>
                <td><img style="width:80px; height: auto;" src="/image/logo/<?php echo $r_logo['file']; ?>" alt="/image/ttcm.jpg"></td>
                <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#logo_expand<?= $r_logo['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
        
                    <div class="modal fade" id="logo_expand<?= $r_logo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Website Logo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                               <tr>
                                    <td style="text-align:center;" colspan="2"><img style="width:80px; height: auto;" src="/image/logo/<?php echo $r_logo['file']; ?>" alt="/image/ttcm.jpg"></td>
                                </tr>
                               
                                <tr>
                                    <td>Uploaded By</td>
                                    <td><?php echo $r_logo['user_type']; ?></td>

                                </tr>
                                <tr>
                                    <td>Uploaded Date</td>
                                    <td><?php echo $r_logo['date']; ?></td>

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
                <td><a class="btn btn-danger btn-sm btn-icon-split" onclick="icon_delete(this,'<?= $r_logo['id']; ?>','logo','file')" href="javascript:void(0)"><span class="icon text-white-50"><i class="bi bi-trash"></i></span><span class="text">Delete</span></a></td>
            </tr>
             <?php } ?>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>logo</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
            <?php $i=1;
                    $s_logo=$con->query("SELECT * FROM `logo` WHERE `type`='fav'");
                    while($r_logo=$s_logo->fetch_assoc()){
                 ?>
            <tr>

                <td><?php echo $i++;?></td>
                <td><img style="width:80px; height: auto;" src="/image/logo/<?php echo $r_logo['file']; ?>" alt="/image/ttcm.jpg"></td>
                <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#fav_expand<?= $r_logo['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
        
                    <div class="modal fade" id="fav_expand<?= $r_logo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Website Favicon</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                               <tr>
                                    <td style="text-align:center;" colspan="2"><img style="width:80px; height: auto;" src="/image/logo/<?php echo $r_logo['file']; ?>" alt="/image/ttcm.jpg"></td>
                                </tr>
                               
                                <tr>
                                    <td>Uploaded By</td>
                                    <td><?php echo $r_logo['user_type']; ?></td>

                                </tr>
                                <tr>
                                    <td>Uploaded Date</td>
                                    <td><?php echo $r_logo['date']; ?></td>

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
                
                <td><a class="btn btn-danger btn-sm btn-icon-split" onclick="icon_delete(this,'<?= $r_logo['id']; ?>','logo','file')" href="javascript:void(0)"><span class="icon text-white-50"><i class="bi bi-trash"></i></span><span class="text">Delete</span></a></td>
            </tr>
             <?php } ?>
        </table>
    </div>

    <div class="col-md-6">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Short title</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
            <?php $i=1;
                    $s_title=$con->query("SELECT * FROM `web_title` WHERE `type`='title'");
                    while($r_title=$s_title->fetch_assoc()){
                 ?>
            <tr>

                <td><?php echo $i++;?></td>
                <td><?php echo $r_title['title']; ?></td>
                <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#short_title_expand<?= $r_title['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
        
                    <div class="modal fade" id="short_title_expand<?= $r_title['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Website Title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                               <tr>
                                    <td>Long Title</td>
                                    <td><?php echo $r_title['title']; ?></td>
                                </tr>
                               
                                <tr>
                                    <td>Uploaded By</td>
                                    <td><?php echo $r_title['user_type']; ?></td>

                                </tr>
                                <tr>
                                    <td>Uploaded Date</td>
                                    <td><?php echo $r_title['date']; ?></td>

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
                <td><a class="btn btn-danger btn-sm btn-icon-split"onclick="info_delete(this, '<?php echo $r_title['id']; ?>', 'web_title')" href="javascript:void(0)"><span class="icon text-white-50"><i class="bi bi-trash"></i></span><span class="text">Delete</span></a></td>
            </tr>
             <?php } ?>
        </table>
    </div>

    <div class="col-md-6">

        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Long title</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
           <?php $i=1;
                    $s_title=$con->query("SELECT * FROM `web_title` WHERE `type`='full'");
                    while($r_title=$s_title->fetch_assoc()){
                 ?>
            <tr>

                <td><?php echo $i++;?></td>
                <td><?php echo $r_title['title']; ?></td>

                <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#long_title_expand<?= $r_title['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web title ================== -->
<!-- ================== information web  title ================== -->
        
                    <div class="modal fade" id="long_title_expand<?= $r_title['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Website Title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                               <tr>
                                    <td>Long Title</td>
                                    <td><?php echo $r_title['title']; ?></td>
                                </tr>
                               
                                <tr>
                                    <td>Uploaded By</td>
                                    <td><?php echo $r_title['user_type']; ?></td>

                                </tr>
                                <tr>
                                    <td>Uploaded Date</td>
                                    <td><?php echo $r_title['date']; ?></td>

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

<!-- ================== information web title ================== -->
<!-- ================== information web title ================== -->





                </td>


                <td><a class="btn btn-danger btn-sm btn-icon-split" onclick="info_delete(this, '<?php echo $r_title['id']; ?>', 'web_title')" href="javascript:void(0)"><span class="icon text-white-50"><i class="bi bi-trash"></i></span><span class="text">Delete</span></a></td>
            </tr>
             <?php } ?>
        </table>
    </div>
 </div>