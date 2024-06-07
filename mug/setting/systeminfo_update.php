<?php 
	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		require_once '../../conection/index.php';
		$row_id=mysqli_fetch_assoc($con->query("SELECT * FROM `information` WHERE `id`='$id'"));
		?>
			<h3 class="text-center display-1"><i class="bi bi-pencil-square"></i></h3>
		    <p class="text-center h2">Update information for website info</p>
		    <form method="post" action="">
		    	<input type="number" value="<?= $id;?>" name="id" hidden>
		        <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">Phone</span>
				  </div>
				  <input type="text" value="<?= $row_id['phone'];?>" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" name="phone">
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">Facebook</span>
				  </div>
				  <input type="text" value="<?= $row_id['facebook'];?>" class="form-control" placeholder="Facebook" aria-label="Username" aria-describedby="basic-addon1" name="facebook">
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">Email</span>
				  </div>
				  <input type="email" class="form-control" placeholder="Email" aria-label="Username" value="<?= $row_id['email'];?>" aria-describedby="basic-addon1" name="email">
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"  id="basic-addon1">Location</span>
				  </div>
				  <input type="text" class="form-control" placeholder="Location" aria-label="Username" value="<?= $row_id['location'];?>" aria-describedby="basic-addon1" name="location">
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">Area</span>
				  </div>
				  <input type="text" class="form-control" placeholder="Area" aria-label="Username" value="<?= $row_id['area'];?>" aria-describedby="basic-addon1" name="area">
				</div>

				<button class="btn btn-primary float-right " name="updateInfo" type="submit">
				   <i class="bi bi-cloud-plus-fill mr-2"></i> Update
				</button>


		    </form>
		<?php
	}

 ?>

