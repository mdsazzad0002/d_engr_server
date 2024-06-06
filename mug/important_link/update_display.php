	<?php 
		if (isset($_POST['id'])) {
			require_once '../../conection/index.php';
			$id=$_POST['id'];
			$row_id=mysqli_fetch_assoc($con->query("SELECT * FROM `important_link` WHERE `id`='$id'"));
			?>

			
			<input type="number" value="<?= $id;?>" hidden name="id">
                <!-- who inserted data defined usertype -->
   
      <div class="input-group mb-2">
      <div class="input-group-prepend">
            <label class="input-group-text" for="form2Example1">Link title</label>
      </div>
      <input placeholder="Type link title" type="text" id="form2Example1" value='<?=	$row_id['name'];?>' class="form-control" name="name" />
      </div>

         <div class="input-group mb-2">
         <div class="input-group-prepend">
            <label class="input-group-text" for="form2Example2">Link url</label>
         </div>
         
         <input type="text" placeholder="Type url"  value='<?=	$row_id['description'];?>' id="form2Example2"  class="form-control" name="description">
         
         </div>  
         <div class="input-group mb-2">
         <div class='input-group-prepend'>
         <label class="input-group-text" for="form2Examples2">Link Type</label>
         </div>

         <select class='form-control' name="type" id="form2Examples2">
            <option value="<?=$row_id['type'];?>"><?=$row_id['type'];?></option>
            <option value="useful">Use full</option>
            <option value="services">Services</option>
         </select>
         
         </div>  

			<?php
		}

	 ?>


