<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if (!defined('main')) {
  echo "<script>window.location.href='../'</script>";
  exit();
};
?>

<!-- porject insert -->
<!-- porject insert -->
<!-- porject insert -->
<!-- porject insert -->
<form class="form" id="project_Insert" action="" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="exampleModalCenterinsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">+ New project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <input hidden name="user_type" type="text" value="<?= $user_type; ?>">
          <!-- link input -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="form2Example1"> <i class="bi bi-fonts mr-2"></i> Project Title</label>
            </div>
            <input placeholder="Project title" type="text" id="form2Example1" class="form-control" name="name" />
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i> Video link</label>
            </div>
            <input placeholder="Project Link" type="text" id="form2Example13" class="form-control" name="vlink" />
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i>Web link</label>
            </div>
            <input placeholder="Project demo Link" type="text" id="form2Example13" class="form-control" name="dlink" />
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i> Feature</label>
            </div>
            <input placeholder="Feature" type="text" id="form2Example13" class="form-control" name="feature" />
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="form2Example3"><i class="bi bi-image mr-2"></i>Project photo</label>
            </div>
            <div class="custom-file">
              <input type="file" id="form2Example3" class="form-control" name="file" />

            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="form2Example31"><i class="bi bi-info-square mr-2"></i>Description</label>
            </div>
            <textarea type="te" id="form2Example31" class="form-control" name="description" placeholder="Type slider description"></textarea>
          </div>
          <div class="status_ins">
            <!-- load by ajax -->
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button class="btn btn-primary btn-sm btn-icon-split" type="submit" name="submit">
            <span class="icon text-white-50">
              <i class="bi bi-cloud-arrow-up"></i>
            </span>
            <span class="text">
              Upload
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- end project insert box -->
<!-- end project insert box -->
<!-- end project insert box -->
<!-- end project insert box -->




<!-- start project update modal -->
<!-- start project update modal -->
<!-- start project update modal -->
<!-- start project update modal -->
<button hidden class="btn btn-primary float-right lsdjflskdjfiuks" data-toggle="modal" data-target="#exampleModalCenterupdate"> update </button>

<form class="form" action="" id="update_project" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="exampleModalCenterupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"> Edit your project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input hidden name="user_type" type="text" value="<?= $user_type; ?>">

          <div id="update_content">
            <!-- load by ajax -->
          </div>

          <div class="status_update">
            <!-- load by ajax -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button class="btn btn-warning  btn-sm btn-icon-split" type="submit" name="update_project">
            <span class="icon text-white-50">
              <i class="bi bi-cloud-arrow-up"></i>
            </span>
            <span class="text">
              Update
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

</form>
<!-- end update model  -->
<!-- end update model  -->
<!-- end update model  -->
<!-- end update model  -->



<!-- start DataTales Example  -->
<div class="card shadow mb-4">
  <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary text-center"> <span class="text-success h2 text-center">Project Management</span>
      <button class="btn btn-primary float-right btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModalCenterinsert">
        <span class="icon text-white-50">
          +
        </span>
        <span class="text">
          add New
        </span>
      </button>


    </h6>


  </div>
  <div class="card-body">
    <div class="project_display">
      <!-- load by ajax from load_project.php -->
    </div>
  </div>

  <script type="text/javascript" src="<?= APP_URL;?>assets/vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript">
    // insert porject by ajax
    $('#project_Insert').on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        type: 'post',
        url: 'insert_update_project.php',
        contentType: false,
        processData: false,
        data: new FormData(this),
        success: function(data) {
          $('.status_ins').html(data);
          load_project()
          setTimeout(() => {
            $('.status_ins').html('');
          }, 4000);
        }
      })
    })



    // load project
    function load_project() {
      $.ajax({
        type: 'post',
        url: 'project_display.php',
        success: function(data) {
          $('.project_display').html(data);
        }
      })
    }
    load_project()



    // update project display
    function update_project(id) {
      $.ajax({
        type: 'post',
        url: 'update_project.php',
        data: {
          'id': id,
        },
        success: function(data) {
          $('#update_content').html(data);
          document.querySelector('.lsdjflskdjfiuks').click();
        }
      })
    }


    // update porject by ajax
    $('#update_project').on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        type: 'post',
        url: 'insert_update_project.php',
        contentType: false,
        processData: false,
        data: new FormData(this),
        success: function(data) {
          $('.status_update').html(data);
          load_project()
          setTimeout(() => {
            $('.status_update').html('');
          }, 4000);
        }
      })
    })

    function delete_project(thi, id) {
      $.ajax({
        type: 'post',
        url: 'project_delete.php',
        data: {
          'id': id
        },
        success: function(data) {
          console.log(data);
          $(thi).parents('tr').hide();
        }
      })
    }



    function mailfun(data) {
      $.ajax({
        type: 'GET',
        url: '<?= APP_URL?>email/',
        data: {
          'project_id': data,
        },
        success: function(sdata) {
          sdata =JSON.parse(sdata);
          if (sdata.code == '22000') {
            swal("Email alert!", "Mail send Failed", "error");
            } else if(sdata.code == '200') {
            swal("Email alert!", "Mail send success", "success");
          }

        }
      })
    }


    function catagory_change(thi, id) {
      let xhttp = new XMLHttpRequest;

      let formdata = new FormData();
      formdata.append('catagory_id', id);
      formdata.append('catagory_val', thi.value);


      xhttp.open('POST', 'catagory_change.php');
      xhttp.send(formdata);


      xhttp.onload = function() {
        let data = JSON.parse(this.responseText);
        swal({
          'icon': data.i_icon,
          'title': data.i_title,
          'timer': 1500,
        })
      }
    }
  </script>