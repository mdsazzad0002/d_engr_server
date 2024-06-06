<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='../'</script>";
    exit();
   } ;
?>



  <div class="card">
  <div class="card-header">
    FAQ(Frequently Ask Question)
    <a class="btn btn-primary btn-sm btn-icon-split float-right" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand'><span class="icon text-white-50"><i class="bi bi-plus"></i></span><span class="text">Add new</span> </a>

<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
           <form class="form" action="" id="form_faq"  method="post" enctype="multipart/form-data">
                    <div class="modal fade" id="user_expand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of faq</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="input-group mb-3">
              <div class="input-group-prepend">
                 <label class="input-group-text" for="form2Example1"><i class="bi bi-justify-left mr-2"></i> Question</label>
              </div>
               <input placeholder="Type a Question" type="text" id="form2Example1" class="form-control" name="ask" />
           </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="form83"><i class="bi bi-info-circle mr-2"></i>Answer</label>
                </div>
                <textarea id="form83" name="ans" placeholder="Type Question Answer" class="form-control" rows="6"></textarea>
                
            </div>
              <div class="status">
                  
              </div>
                         
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                <span class="icon text-white-50">X</span>
                                <span class="text">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                                <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                                <span class="text">Upload</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

          </form>
<!-- ================== information web short title ================== -->
<!-- ================== information web short title ================== -->

<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== --> <a hidden class="btn btn-primary btn-sm btn-icon-split float-right" href="javascript:void(0)" id="btn_show" data-toggle='modal' data-target='#user_expand12'><span class="icon text-white-50"><i class="bi bi-plus"></i></span><span class="text">Update</span> </a>

           <form class="form" action="" id="form_faq_update"  method="post" enctype="multipart/form-data">
                    <div class="modal fade" id="user_expand12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of faq</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="content_faq">
                                
                            </div>
              <div class="status_update">
                  
              </div>
                         
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                <span class="icon text-white-50">X</span>
                                <span class="text">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                                <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                                <span class="text">Upload</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

          </form>
<!-- ================== information web short title ================== -->
<!-- ================== information web short title ================== -->

 

       
        </div>
        <!-- end card header -->

        <!-- View team information -->
        <div class="card-body">
            <div class="faq_display"></div>
        </div>
    </div>
    <!-- end view team information -->`<h1></h1>
