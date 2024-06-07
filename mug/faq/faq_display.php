<?php 
        require_once '../../conection/index.php';
 ?>

  <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                           <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                <?php $row_si=0;
       
                    $faq_s=mysqli_query($con,"SELECT * FROM `faq`");
                    while($faq_r=mysqli_fetch_assoc($faq_s)){
                    $row_si++;
                ?>
                        <tr>
                            <td><?= $row_si;?></td>

                            <td><?= $faq_r['ask'];?></td>
                            <td><?= $faq_r['ans'];?></td>


                            <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand<?= $faq_r['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
        
                    <div class="modal fade" id="user_expand<?= $faq_r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of faq</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                              
                               
                                <tr>
                                    <td>Question</td>
                                    <td><?php echo $faq_r['ask']; ?></td>

                                </tr>
                               
                                <tr>
                                    <td>Answer</td>
                                    <td><?php echo $faq_r['ans']; ?></td>

                                </tr>
                               
                                
                               
                                
                               <tr>
                                    <td>Uploaded by</td>
                                    <td><?php echo $faq_r['user_type']; ?></td>

                               </tr>
                               <tr>
                                    <td>Uploaded Date</td>
                                    <td><?php echo $faq_r['date']; ?></td>

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

                           <td><button class="btn btn-warning btn-icon-split btn-sm" onclick="update_faq(<?= $faq_r['id'];?>)">
                            <span class="icon text-white-50">
                                <i class="bi bi-pencil-square"></i>
                            </span>
                            <span class="text">
                                Edit
                            </span> 
                        </button></td>
                            
                     
                            <td> 
                                <a href="javascript:void(0)" onclick="delete_faq(this, <?=$faq_r['id'];?>)" class="float-right btn btn-danger btn-icon-split btn-sm">
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