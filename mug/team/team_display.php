<?php
require_once '../../conection/index.php';
?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Image</th>
      <th>Name</th>
      <th>Type</th>
      <th>Details</th>

      <th>Update</th>
      <th>Delete</th>


    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Image</th>
      <th>Name</th>
      <th>Type</th>
      <th>Details</th>
      <th>Update</th>
      <th>Delete</th>


    </tr>
  </tfoot>
  <tbody>
    <?php $row_si = 0;

    $select_slider = mysqli_query($con, "SELECT * FROM `employ` order by id desc");
    while ($row_slider = mysqli_fetch_assoc($select_slider)) {
      $row_si++;
    ?>
      <tr>
        <td><?= $row_si; ?></td>
        <td><img onclick="copy(this)" title="Click to copy link" style="width: 50px; height:50px" src="<?= APP_URL.'assets/img/'.$row_slider['file']; ?>" alt="plase wait"></td>

        <td><?= $row_slider['name']; ?></td>
        <td><?= $row_slider['title']; ?></td>
        <td>
          <a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand<?= $row_slider['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
          <!-- ================== information web short title ================== -->
          <!-- ================== information web  short title ================== -->

          <div class="modal fade" id="user_expand<?= $row_slider['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Information of Project</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table table-bordered table-striped table-hover">
                    <tr>
                      <td style="text-align:center;" colspan="2"><img onclick="copy(this)" title="Click to copy link" style="max-width: 100px;" src="<?php echo APP_URL.'assets/img/'.$row_slider['file']; ?>"></td>
                    </tr>

                    <tr>
                      <td>Title</td>
                      <td><?php echo $row_slider['name']; ?></td>

                    </tr>


                    <tr>
                      <td>Uploaded by</td>
                      <td><?php echo $row_slider['user_type']; ?></td>

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
        </td>

        <td>
          <button class="btn btn-warning btn-icon-split btn-sm" onclick="update_team(<?= $row_slider['id']; ?>)">
            <span class="icon text-white-50">
              <i class="bi bi-pencil-square"></i>
            </span>
            <span class="text">
              Edit
            </span>
          </button>
        </td>
        <td>
          <a href="javascript:void(0)" onclick="delete_team(this, <?= $row_slider['id']; ?>)" class="float-right btn btn-danger btn-icon-split btn-sm">
            <span class="icon text-white-50">
              <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>

          </a>


        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>