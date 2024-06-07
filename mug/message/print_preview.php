
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <?php require_once "../../conection/index.php"; ?>
</style>

</head>
<body>
    <div class="container-fluid">
      <div class="m-4">
                
       <?php 
       if (isset($_GET['id'])) {
         $id=$_GET['id'];
          $student_info_select=mysqli_query($con,"SELECT * FROM `message` WHERE `id` ='$id'");
           while($student_info_row=mysqli_fetch_assoc($student_info_select)){
           ?>
  <!-- Modal content -->
  <div class="text-dark" style="padding: 56px;">
    <p>তারিখ: <?php echo $student_info_row['date']; ?><br>
  
   <p>বিষয়ঃ <?php echo $student_info_row['subject']; ?></p>

   <p style="text-align: justify;">জনাব,<br>
    <?php echo $student_info_row['message']; ?></p>
    
  </div>
<title>Application box (<?php echo $student_info_row['name']; ?>)</title>

  <?php }}?>
      </div>
    </div>



<script type="text/javascript">
  print();
  setTimeout(function(){
      //window.location.href='application.php';
      window.close();
    },1500)

</script>
</body>
</html>



    
  

