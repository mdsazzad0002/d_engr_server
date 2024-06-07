<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='../'</script>";
    exit();
   } ;
?>

  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Suscriber</li>
      </ol>
    </nav>
  </div>


<!-- DataTales Example -->
<div class="card">
    <div class="card-header py-3 h3 text-center">
        <h6 class="m-0 font-weight-bold text-primary"> <span class="text-success h2">Suscriber</span> 
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                     <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Reply</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Reply</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>


         <?php  
            $row_si=0;
            $student_info_select=mysqli_query($con,"SELECT * FROM `suscribe` ORDER BY `id` DESC");
            while ($student_info_row=mysqli_fetch_assoc($student_info_select)) {
                if ($row_si==50) {
                    break;
                }
        ?>
                <tr>
                    <td><?php $row_si++; echo $row_si;?></td>
                    <td style="height: 30px; overflow:hidden;"><?php echo $student_info_row['email']; ?></td>
                        <td><button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModalCenter<?php echo $student_info_row['id'];?>"><span class="icon text-white-50">
                            <i class="bi bi-reply-all-fill"></i>
                        </span> <span class="text">Replay</span></button></td>
                        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $student_info_row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New Message to <span class="text-danger"><?php echo $student_info_row['email']; ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <hr class="m-0 p-0 mb-2">
            <form>
             <!-- Recipient: -->
              <input hidden class="email_reply<?php echo $student_info_row['id'];?> form-control" type="email" value="<?php echo $student_info_row['email']; ?>" name="email" placeholder="e-mail account">
              
              Message:
              <textarea class="descrip_reply<?php echo $student_info_row['id'];?> form-control">Thanks for feedback</textarea>
              <br>
              <p class="text-center p-3 text-light bg-success rounded success_alert success_alert<?php echo $student_info_row['id'];?>" >
                Message send success</p>
              <p class="text-center p-3 text-light bg-danger rounded failed_alert failed_alert<?php echo $student_info_row['id'];?>" >
                Message send Failed</p>
              <div  class="spinner-border text-warning success_loading success_loading<?php echo $student_info_row['id'];?>" role="status">
                  <span class="sr-only">Loading...</span>

                </div>
              
            </form>      
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn  btn-primary" type="button" name="submit" onclick="reply(<?php echo $student_info_row['id'];?>)" value="Send">
      </div>
    </div>
  </div>
</div>
                  <td>


                        <!-- delete data -->
                        <a  href="../delete/?id=<?php echo $student_info_row['id'];?>&tb=suscribe&re=suscriber" class="btn btn-danger myBtn btn-sm btn-icon-split" ><span class="icon text-white-50"><i class="bi bi-trash"></i></span><span class="text">Delete</span></a>
                        <!-- The Modal -->

                        </td>
                       
                    </tr>
              <?php } ?>
              
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
      $('.success_loading').hide();
      $('.success_alert').hide();
      $('.failed_alert').hide();
    }, false);
      
    function reply(id) {
 
        var message=$('.message'+id).html();
        var email=$('.email_reply'+id).val();
        var reply=$('.descrip_reply'+id).val();
        $('.success_loading'+id).show();
        $('.failed_alert'+id).hide();
         $('.success_alert'+id).hide();
        $.ajax({
            type:'GET',
            url:'../mail/suscribe.php',
            data:{
                'id':id,
                'message':reply,
                
            },success:function(data){
                $('.success_loading'+id).hide();
                if (data=='success') {
                     $('.success_alert'+id).show();
                      $('.failed_alert'+id).hide();
                }else{
                     $('.failed_alert'+id).show();
                     $('.success_alert'+id).hide();
                }
                
               

            }
        })
    }
</script>