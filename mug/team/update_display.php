<?php 
	if (isset($_POST['id'])) {
		require_once '../../conection/index.php';
		$id=$_POST['id'];
		$row_id=mysqli_fetch_assoc($con->query("SELECT * FROM `employ` WHERE `id`='$id'"));
		?>




      	<input type="number" value="<?= $id;?>" hidden name="id_id">
			<input type="text" value="<?php echo $row_id['file']; ?>" hidden name="prev">

      <!-- link input -->
      <div class="row">
      	<div class="col-4 mb-2">
      		<p>Current Image</p>
      		<img style="max-width:100px; max-height: 100px" src="<?php echo APP_URL.'assets/img/'.$row_id['file']; ?>">
      	</div>
      	<div class="col-8">
      		New Image
      		*This feature is not avialable
      	</div>

        <!-- divide tow col -->
          <div class="col-md-12">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <label class="input-group-text" for="form2Example1"><i class="bi bi-justify-left mr-2"></i> Name</label>
                  </div>
                   <input placeholder="Type employ Name" value="<?= $row_id['name'];?>" type="text" id="form2Example1" class="form-control" name="name" />
               </div>


                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <label class="input-group-text" class="form-label" for="form2Example2"><i class="bi bi-phone mr-2"></i>Mobile</label>
                  </div>
                   <input value="<?= $row_id['phone'];?>" type="text" placeholder="Type phone number" id="form2Example2" class="form-control" name="phone" />
                </div>


                 <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <label class="input-group-text" class="form-label" for="form2Example3"><i class="bi bi-envelope mr-2"></i> Email</label>
                    
                  </div>
                  <input value="<?= $row_id['email'];?>" placeholder="Type Email address" type="text" id="form2Example3" class="form-control" name="email" />
                </div>
          </div>
          <!-- end first col -->

          <!-- start second col -->
          <div class="col-md-12">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" class="form-label" for="form2Example4"><i class="bi bi-justify-left mr-2"></i> Employ Title</label>
                  </div>
                 <input type="text" value="<?= $row_id['title'];?>" class="form-control" placeholder="Enter title" name="title">
                </div>



                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" class="form-label" for="form2Example5"><i class="bi bi-facebook mr-2"></i>facebook</label>
                  </div>
                 <input value="<?= $row_id['facebook'];?>" type="text" class="form-control" name="facebook">
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
        <input id="form834" value="<?= $row_id['youtube'];?>" name="youtube" placeholder="Youtube link" class="form-control"/>
        
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="form83"><i class="bi bi-info-circle mr-2"></i>About</label>
        </div>
        <textarea id="form83" name="describe"  placeholder="Describe about you" class="form-control" rows="6"><?= $row_id['describ'];?></textarea>
        
    </div>
	 
			<?php
		}

?>




          