

<!-- ===========icon and title start dialog=============== -->
<!-- ===========icon and title start dialog=============== -->
                <form enctype="multipart/form-data" id="icon_title_form" method="post" action="">
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
                               <!-- catagory -->
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Catagory</span>
                              </div>
                             <select id="catagory"  name='catagory' onchange="logo(this)" class="catagory form-control">
                                 <option>----Catagory----</option>
                                 <option value="logo">Logo</option>
                                 <option value="fav_icon">Fav icon</option>
                                 <option value="web_title">Web Title</option>
                                 <option value="full_form">Web Full from</option>
                             </select>
                            </div>
                            <!-- logo -->
                            <div class="input-group mb-3 logo">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Logo</span>
                              </div>
                              <input type="file" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="logo1">
                            </div>
                            <!-- Fav icon -->
                            <div  class="input-group mb-3 fav_icon">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Fav icon</span>
                              </div>
                              <input type="file" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="fav_icon1">
                            </div>
                            <!-- Title -->
                            <div  class="input-group mb-3 web_title">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Web Title</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" name="web_title1">
                            </div>
                            <!-- full form -->
                            <div class="input-group mb-3 full_form">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Web full form</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Full form" aria-label="Username" aria-describedby="basic-addon1" name="full_form1">
                            </div>
                            <!-- end --> 

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

<!--================= end icon and title start dialog=============== -->
<!--================= end icon and title start dialog=============== -->




<!-- ================== information web ================== -->
<!-- ================== information web ================== -->
        <form enctype="multipart/form-data" id="info_form" method="post" action="">
                    <div class="modal fade" id="info_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Link</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Phone</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" name="phone">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Facebook</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Facebook" aria-label="Username" aria-describedby="basic-addon1" name="facebook">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                          </div>
                          <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Location</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Location" aria-label="Username" aria-describedby="basic-addon1" name="location">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Area</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Area" aria-label="Username" aria-describedby="basic-addon1" name="area">
                        </div>

                            <div class="status_web">
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

<!-- ================== information web ================== -->
<!-- ================== information web ================== -->




<!-- =========== content title and icon content=========== -->
<div class="card">
    <div class="card-header h2 text-center">
       <i class="bi bi-gear-fill mr-2"></i>Setting
        <a class="btn btn-primary float-right btn-sm btn-icon-split" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">
          <span class="icon text-white-50">+</span>
          <span class="text">Add logo or title</span>
        </a>
    </div>

    <div class="card-body">
        <div class="icon_title_display">
            <!-- load by ajax -->
        </div>
     </div>  
</div>
    <!-- end card -->


<!-- start card -->
         <div class="card mt-2">
             <div class="card-header text-center h1">
                 
               <i class="bi bi-info-circle-fill mr-2"></i> Information     
                <a class="btn btn-primary float-right btn-sm btn-icon-split" href="javascript:void(0)" data-toggle="modal" data-target="#info_modal">
                    <span class="icon text-white-50">+</span>
                    <span class="text">Add Contacts Information</span>
                </a>
    
             </div>
             <div class="card-body">
                  <!-- information -->
                <div class="display_info">
                    <!-- load by ajax info web -->
                </div>
             </div>
        </div>
<!-- end body and card -->
