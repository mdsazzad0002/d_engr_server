<?php 
    if (isset($_POST['id'])) {
      $id=$_POST['id'];
      require_once '../../conection/index.php';
      $row_id=mysqli_fetch_assoc($con->query("SELECT * FROM `project_info` WHERE `id`='$id'"));
      ?>
      <h3 class="display-1 text-center"><img class="w-25" src="../../image/notice/<?= $row_id['file'];?>"></h3>                         
      <input type="number" name="id" hidden value="<?= $id;?>">
      <input type="text" name="prev" hidden value="<?= $row_id['file'];?>">
    <!-- link input -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="form2Example1"> <i class="bi bi-fonts mr-2"></i> Project Title</label>
          </div>
            <input placeholder="Project title" value="<?= $row_id['name'];?>" type="text" id="form2Example1" class="form-control" name="name" />
        </div>
        
         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i> Video link</label>
          </div>
            <input placeholder="Project Link" type="text" value="<?= $row_id['video'];?>" id="form2Example13" class="form-control" name="vlink" />
        </div>

          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i>Web link</label>
          </div>
            <input placeholder="Project demo Link" type="text" id="form2Example13" class="form-control" value="<?= $row_id['demo'];?>" name="dlink" />
        </div>
          
         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i> Feature</label>
          </div>
            <input placeholder="Feature" type="text" id="form2Example13" class="form-control" value="<?= $row_id['feture'];?>" name="feature" />
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
          <textarea type="te" id="form2Example31" class="form-control" name="description" placeholder="Type slider description"><?= $row_id['description'];?></textarea>
        </div>    
            <?php
    }
 ?>
