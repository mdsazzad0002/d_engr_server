	<?php
   if (isset($_POST['id'])) {
      require_once '../../conection/index.php';
      $id = $_POST['id'];
      $row_id = mysqli_fetch_assoc($con->query("SELECT * FROM `project_catagory` WHERE `id`='$id'"));
   ?>


	   <input type="number" value="<?= $id; ?>" hidden name="id">
	   <!-- who inserted data defined usertype -->

	   <div class="input-group mb-2">
	      <div class="input-group-prepend">
	         <label class="input-group-text" for="form2Example1">Project Catagory</label>
	      </div>
	      <input placeholder="Type link title" type="text" id="form2Example1" value='<?= $row_id['catagory']; ?>' class="form-control" name="name" />
	   </div>

	<?php
   }

   ?>