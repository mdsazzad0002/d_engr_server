<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='../'</script>";
    exit();
   } ;
?>



  
  <!-- insert data team_displ  -->
  <!-- insert data team_displ  -->
  <!-- insert data team_displ  -->
  <!-- insert data team_displ  -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
    <div class="modal-content">
         <form class="form" action="" id="insert_project"  method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">+ Add new</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <!-- link input -->
              <div class="row">

                    <!-- indicated inserted data -->
                    <input type="text" hidden name="insert_employ">
                    <!-- indicated inserted data -->
                    
                    <input type="text" hidden value="<?=$user_type;?>" name="user_type">
                <!-- divide tow col -->
                  <div class="col-md-12">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" for="form2Example1"><i class="bi bi-justify-left mr-2"></i> Name</label>
                          </div>
                           <input placeholder="Type employ Name" type="text" id="form2Example1" class="form-control" name="name" />
                       </div>


                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" class="form-label" for="form2Example2"><i class="bi bi-phone mr-2"></i>Mobile</label>
                          </div>
                           <input type="text" placeholder="Type phone number" id="form2Example2" class="form-control" name="phone" />
                        </div>


                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" class="form-label" for="form2Example3"><i class="bi bi-envelope mr-2"></i> Email</label>
                            
                          </div>
                          <input placeholder="Type Email address" type="text" id="form2Example3" class="form-control" name="email" />
                        </div>
                  </div>
                  <!-- end first col -->

                  <!-- start second col -->
                  <div class="col-md-12">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" class="form-label" for="form2Example4"><i class="bi bi-justify-left mr-2"></i> Employ Title</label>
                          </div>
                         <input type="text" class="form-control" placeholder="Enter title" name="title">
                        </div>



                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" class="form-label" for="form2Example5"><i class="bi bi-facebook mr-2"></i>facebook</label>
                          </div>
                         <input type="text" class="form-control" name="facebook">
                        </div>
                           
                        <div class="input-group mb-3">
                         <div class="input-group-prepend">
                           <label class="input-group-text" class="form-label" for="form2Example322"><i class="bi bi-image mr-2"></i> photo</label>
                          </div>
                          <div class="custom-file">
                            <input type="file" id="form2Example322" class="form-control" name="file" />
                            
                          </div>
                        </div>
                  </div>
                  <!-- end second col  -->
             </div>
             <!-- end row -->

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="form834"><i class="bi bi-info-circle mr-2"></i>Youtube</label>
                </div>
                <input id="form834" name="youtube" placeholder="Youtube link" class="form-control"/>
                
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="form83"><i class="bi bi-info-circle mr-2"></i>About</label>
                </div>
                <textarea id="form83" name="describe" placeholder="Describe about you" class="form-control" rows="6"></textarea>
                
            </div>
              
            <div class="status">
                <!-- load by ajax -->
            </div>
          
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal">
            <span class="icon text-white-50">
                <i class="bi bi-x-circle"></i>
            </span>
            <span class="text">
                Close
            </span>
        </button>
          <button class="btn btn-primary btn-icon-split btn-sm" type="submit" name="submit">
            <span class="icon text-white-50">
                <i class="bi bi-upload"></i>
            </span> 
            <span class="text">
                Upload
            </span>
        </button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- end insert modal project -->
<!-- end insert modal project -->
<!-- end insert modal project -->
<!-- end insert modal project -->




<!-- update data employ team -->
<!-- update data employ team -->
<!-- update data employ team -->
<!-- update data employ team -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary update_content_show_btn" data-toggle="modal" hidden data-target="#exampleModalCenter">
  Launch demo modal
</button>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update employ information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" action="" id="update_project"  method="post" enctype="multipart/form-data">
      <div class="modal-body">

      <input type="text" hidden name="update_employ">
       <input type="text" hidden value="<?=$user_type;?>" name="user_type">
        <div class="update_data">
            <!-- load data by ajax -->
        </div>
        <div class="update_status">
            <!-- load by ajax -->
        </div>

        
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"> <span class="icon text-white-50">
                <i class="bi bi-x-circle"></i>
            </span>
            <span class="text">
                Close
            </span>
          </button>
        <button type="submit" class="btn btn-primary btn-sm btn-icon-split"  name="update_employ">
         <span class="icon text-white-50">
                <i class="bi bi-upload"></i>
            </span> 
            <span class="text">
                Save changes
            </span>
          </button>
      </div>
      </form> 
    </div>
  </div>
</div>
<!-- end update modal -->
<!-- end update modal -->
<!-- end update modal -->
<!-- end update modal -->

<!-- end update code -->


 <div class="card">
        <div class="card-header text-center h3">
            Employ Information

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm btn-icon-split float-right" data-toggle="modal" data-target="#exampleModalLong">
                <span class="icon text-white-50">
                    +
                </span>
                <span class="text">
                    Add new
                </span>
            </button>
        </div>
        <!-- end card header -->

        <!-- View team information -->
        <div class="card-body">
            <div class="team-content">
                <!-- load by ajax -->
                
            </div>
        </div>
    </div>
    <!-- end view team information -->
   <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

        // firstime content load
        function team_display(){
           $.ajax({
                type:'post',
                url:'team_display.php',
                data:{
                },success:function(data){
                    $('.team-content').html(data);
                }
            })
        }
        team_display()


        // insert project
        $('#insert_project').on("submit",function(e){
            e.preventDefault();
            $.ajax({
                type:'post',
                url:'insert_update_project.php',
                contentType:false,
                processData:false,
                data:new FormData(this),
                success:function(data){
                    $('.status').html(data);
                     team_display()
                    setTimeout(() => {
                       $('.status').html('');
                    }, 4000);
                }
            })
        })
    


        // show data update display
        function update_team(id){
            console.log(id);
            $.ajax({
                type:'post',
                url:'update_display.php',
                data:{
                    'id':id,
                },success:function(data){
                    $('.update_data').html(data);
                    setTimeout(() => {
                         document.querySelector('.update_content_show_btn').click();
                    }, 700);
                   
                }
            })
        }
        
     
    
    
        // update project
    $('#update_project').on("submit",function(e){
        e.preventDefault();
        $.ajax({
            type:'post',
            url:'insert_update_project.php',
            contentType:false,
            processData:false,
            data:new FormData(this),
            success:function(data){
                $('.update_status').html(data);
                 team_display()
                setTimeout(() => {
                   $('.update_status').html('');
                }, 4000);
            }
        })
    })


    // delete team

        function delete_team(thi, id){
      $.ajax({
            type:'post',
            url:'team_delete.php',
            data:{
              'id':id
            },
            success:function(data){
                console.log(data);
                   $(thi).parents('tr').hide();
            }
        })
    }
    </script>
