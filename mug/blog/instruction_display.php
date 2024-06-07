                        <?php
                        require_once '../../conection/index.php';
                        $select_slider = mysqli_query($con, "SELECT * FROM `blog` ORDER BY `id` DESC");
                        while ($row_slider = mysqli_fetch_assoc($select_slider)) {


                        ?>
                          <div class="card ins_root mt-2 ">
                            <h3 class="card-header h6">

                              <span class="h6"><?= $row_slider['name']; ?></span>


                              <a class="btn btn-primary btn-sm btn-icon-split float-right ml-2" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand<?= $row_slider['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>

                              <a onclick="copy_a_link(this)" title="This link can copy" class="btn btn-warning btn-sm btn-icon-split float-right ml-2" href="javascript:void(0)" data-href="https://dengrweb.com/blog/?id=<?= $row_slider['id']; ?>&title=<?= $row_slider['name']; ?>"><span class="icon text-white-50"><i class="bi bi-link-45deg"></i></span><span class="text">Copy</span> </a>

                              <a class="btn btn-warning btn-sm btn-icon-split float-right ml-2" onclick="upload_and_update(this)" href="javascript:void(0)" data-url="blog_upload/?id=<?= $row_slider['id']; ?>"><span class="icon text-white-50"><i class="bi bi-pencil-square"></i></span><span class="text">Edit</span> </a>


                              <!-- ================== information web short title ================== -->
                              <!-- ================== information web  short title ================== -->

                              <div class="modal fade" id="user_expand<?= $row_slider['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content ">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">D Engr Web Blog</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <table class="table table-bordered table-striped table-hover">

                                        <tr>
                                          <td>Title</td>
                                          <td><?php echo $row_slider['name']; ?></td>

                                        </tr>
                                        <tr>
                                          <td>Photo</td>
                                          <td><img onclick="copy(this)" title="Click to copy url " class="img-fluid" src="<?php echo $row_slider['image']; ?>" /></td>

                                        </tr>
                                        <tr>
                                          <td>Description</td>
                                          <td><?php echo $row_slider['description']; ?></td>

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





                              <a href="javascript:void(0)" onclick="delete_ins(this,<?= $row_slider['id']; ?>)" class="float-right btn btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                              </a>
                            </h3>
                            <style>
                              .height-limit {
                                overflow: hidden;
                                display: -webkit-box;
                                -webkit-line-clamp: 3;
                                /* number of lines to show */
                                line-clamp: 3;
                                -webkit-box-orient: vertical;
                              }
                            </style>
                            <div class="card-body height-limit p-0 m-3">
                              <img onclick="copy(this)" title="Click to copy url " style="width: 100px; height:100px; float:left; margin:0" class="img-fluid" src="<?php echo $row_slider['image']; ?>" />
                              <?= $row_slider['description']; ?>
                            </div>

                          </div>
                          </div>



                        <?php } ?>