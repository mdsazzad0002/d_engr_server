<?php
if (!defined('main')) {
  echo "<script>window.location.href='../'</script>";
  exit();
};
?>

<!-- DataTales Example -->
<div class="card">
  <div class="card-header py-3 h3 text-center">
    <h6 class="m-0 font-weight-bold text-primary"> <span class="text-success h2">Message & Review box</span>
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>View</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>View</th>
          </tr>
        </tfoot>
        <tbody>


          <?php
          $row_si = 0;
          $student_info_select = mysqli_query($con, "SELECT * FROM `message` ORDER BY `id` DESC LIMIT 50");
          while ($student_info_row = mysqli_fetch_assoc($student_info_select)) {
          ?>
            <tr>
              <td><?php $row_si++;
                  echo $row_si; ?></td>
              <td><?php echo $student_info_row['name']; ?></td>

              <td><?php echo $student_info_row['subject']; ?></td>

        

              <td style="height: 30px; overflow:hidden;"><?php echo $student_info_row['email']; ?></td>
              <td>




                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModalCenter<?php echo $student_info_row['id']; ?>">
                  <span class="icon text-white-50">
                    <i class="bi bi-reply-all-fill"></i>
                  </span>
                  <span class="text">
                    Replay
                  </span>
                </button>
                <!-- end modal tiger -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter<?php echo $student_info_row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">New Message to <span class="text-danger"><?php echo $student_info_row['email']; ?></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p class="mb-1"><span class="text-primary">Name: </span> <?php echo $student_info_row['name']; ?></p>
                        <p class="mb-1"><span class="text-primary">Subject: </span> <?php echo $student_info_row['subject']; ?></p>

                        <p class="text-align-justify mb-1 message<?php echo $student_info_row['id']; ?>"><span class="text-primary">Received message: </span> <?php echo $student_info_row['message']; ?></p>
                        <hr class="m-0 p-0 mb-2">
                        <form>
                          <!-- Recipient: -->
                          <input hidden class="email_reply<?php echo $student_info_row['id']; ?> form-control" type="email" value="<?php echo $student_info_row['email']; ?>" name="email" placeholder="e-mail account">

                          Message:
                          <textarea class="descrip_reply<?php echo $student_info_row['id']; ?> form-control">Thanks for feedback</textarea>
                          <br>
                          <p class="text-center p-3 text-light bg-success rounded success_alert success_alert<?php echo $student_info_row['id']; ?>">
                            Message send success</p>
                          <p class="text-center p-3 text-light bg-danger rounded failed_alert failed_alert<?php echo $student_info_row['id']; ?>">
                            Message send Failed</p>
                          <div class="spinner-border text-warning success_loading success_loading<?php echo $student_info_row['id']; ?>" role="status">
                            <span class="sr-only">Loading...</span>

                          </div>

                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input class="btn  btn-primary" type="button" name="submit" onclick="reply(<?php echo $student_info_row['id']; ?>)" value="Send">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- model show data below -->
                <a class="btn btn-primary btn-sm btn-icon-split" href="#modal<?php echo $student_info_row['id']; ?>" data-lightbox>
                  <span class="icon text-white-50">
                    <i class="bi bi-eye-fill"></i>
                  </span>
                  <span class="text">
                    Details
                  </span>
                </a>

                <!-- model for information -->
                <div id="modal<?php echo $student_info_row['id']; ?>" class="lightbox-hide">
                  <div class="modal-content" style="overflow: auto;">
                    <div class="m-3 p-3 text-dark">
                      <a class="btn btn-primary float-right" target="_blank" href="print_preview.php?id=<?php echo $student_info_row['id']; ?>"><i class="bi bi-printer-fill mr-2"></i>print</a>
                      <p>তারিখ: <?php echo $student_info_row['date']; ?><br>

                      <p>বিষয়ঃ <?php echo $student_info_row['subject']; ?></p>

                      <p style="text-align: justify;">জনাব,<br>
                        <?php echo $student_info_row['message']; ?></p>

                    </div>
                  </div>
                </div>
                <!-- end model box -->


                <!-- delete data -->
                <a href="javascript:void(0)" onclick="delete_message(this, <?= $student_info_row['id']; ?>)" class="btn btn-danger myBtn btn-sm btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="bi bi-trash"></i>
                  </span>
                  <span class="text">
                    Delete
                  </span>
                </a>
                <!-- The Modal -->

              </td>

            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</div>






