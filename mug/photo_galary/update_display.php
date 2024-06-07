	<?php 
		require_once '../../conection/index.php';
		if(isset($_POST['id'])){
			$id=$_POST['id'];
			$r_photo=mysqli_fetch_assoc($con->query("SELECT * FROM `photo_galary` WHERE `id`='$id'"));
		


	 ?>
		<div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="form2Example1"> <i class="bi bi-fonts mr-2"></i> Photo Title</label>
              </div>
                <input value="<?= $r_photo['name'];?>"  placeholder="Photo title" type="text" id="form2Example1" class="form-control" name="name" />
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="form2Example112"> <i class="bi bi-fonts mr-2"></i> Photo Type</label>
              </div>
                <select  class="form-control" name="type" id="form2Example112">
                    <option value="<?= $r_photo['type'];?>"><?=$r_photo['type'];?></option>
                    <option>glary</option>
                    <option>slider</option>
                    <option>success</option>
                    
                </select>
            </div>
            
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i> Link</label>
              </div>
                <input value="<?= $r_photo['link'];?>"  placeholder="Photo title" type="text" id="form2Example13" class="form-control" name="link" />
            </div>
              


          <input hidden type="text" value="<?= $id;?>" name="id">


    <?php } ?>