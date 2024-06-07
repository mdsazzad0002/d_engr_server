<?php 
	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		require_once '../../conection/index.php';
		$row_id=mysqli_fetch_assoc($con->query("SELECT * FROM `faq` WHERE `id`= '$id'"));
		?>

		<h3 class="display-1 text-center"><i class="bi bi-info-circle-fill"></i></h3>
            <p class="text-center"><i class="bi bi-vector-pen"></i> Edit F.A.Q</p>
           <form class="form" action=""  method="post" enctype="multipart/form-data">
           	<input type="number" value="<?= $id;?>" hidden name="id">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                 <label class="input-group-text"  for="form2Example1"><i class="bi bi-justify-left mr-2"></i> Question</label>
              </div>
               <input placeholder="Type a Question" type="text" id="form2Example1" class="form-control" value="<?= $row_id['ask']; ?>" name="ask" />
           </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="form83"><i class="bi bi-info-circle mr-2"></i>Answer</label>
                </div>
                <textarea id="form83" name="ans" placeholder="Type Question Answer" class="form-control" value="" rows="6"><?= $row_id['ans']; ?></textarea>
                
            </div>
              

            <button class="btn  float-right btn-warning btn-icon-split btn-sm" type="submit" name="update_faq">
                <span class="icon text-white-50">
                    <i class="bi bi-upload"></i>
                </span> 
                <span class="text">
                    Update
                </span>
            </button>
        </form>

		<?php
	}



 ?>



