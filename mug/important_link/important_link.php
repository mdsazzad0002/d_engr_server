
                   
    <!-- =========== insert link ============ -->
    <!-- =========== insert link ============ -->

                <form method="post" id="link_from" enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Link</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                         <!-- link input -->

                            <!-- who inserted data defined usertype -->
                            <input type="text" name="user_type" value="<?=$user_type;?>" hidden>
                             
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="form2Example1">Link title</label>
                              </div>
                              <input placeholder="Type link title" type="text" id="form2Example1" class="form-control" name="name" />
                            </div>

                               <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="form2Example2">Link url</label>
                                </div>
                               
                                <input type="text" placeholder="Type url" id="form2Example2"  class="form-control" name="description">
                                
                               </div>  
                               <div class="input-group mb-2">
                               <div class='input-group-prepend'>
                                 <label class="input-group-text" for="form2Examples2">Link Type</label>
                               </div>
                 
                                <select class='form-control' name="type" id="form2Examples2">
                                  <option value="">-----select------</option>
                                  <option value="useful">Use full</option>
                                  <option value="services">Services</option>
                                </select>
                                
                               </div>  

                            <div class="status">
                                    <!-- RESPONSE BY AJAX  -->
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                <span class="icon text-white-50">X</span>
                                <span class="text">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                                <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                                <span class="text"> Save changes</span>
                           </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

      
        <!-- ================ end insert link ========== -->
        <!-- ================ end insert link ========== -->
                   
    <!-- =========== updaate link ============ -->
    <!-- =========== update link ============ -->
               <a hidden class='exampleModalsdfasd' data-toggle="modal" data-target="#exampleModalsdfasd">This is updadte dialog open link </a>

                <form method="post" id="update_link_form" enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModalsdfasd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Link</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                         <!-- link input -->
                              <input type="text" name="user_type" value="<?=$user_type;?>" hidden>
                             
                              <div class="update_content">
                                <!-- load content by ajax -->
                              </div>
                                

                            <div class="status_update">
                                    <!-- RESPONSE BY AJAX  -->
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                <span class="icon text-white-50">X</span>
                                <span class="text">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                                <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                                <span class="text"> Save changes</span>
                           </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

      
        <!-- ================ end Update link ========== -->
        <!-- ================ end Update link ========== -->


                    <div class="card">
                        <h1 class="card-header h3 text-gray-800 text-center">Important Link <!-- Page Heading -->
                            <a class="btn btn-primary float-right btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModal">
                                 <span class="icon text-white-50">+</span>
                                 <span class="text">Add New</span>
                            </a>
                        </h1>
                        <div class="card-body">
                            <div class="link_display">
                                <!-- load by ajax -->
                            </div>
                        </div>
                    </div>
                
         
            
