<?php
require_once '../conection/index.php';

if (isset($_POST['project_id'])) {
  $catagory = $_POST['catagory'];
  $project_id = $_POST['project_id'];
  if (empty($_POST['project_id'])) {
    $s_employ = $con->query("SELECT * FROM `project_info` where `catagory`LIKE '%$catagory%' ORDER BY `id` DESC");
  } else {

    $s_employ = $con->query("SELECT * FROM `project_info` where `id` < '$project_id' and `catagory`LIKE '%$catagory%' ORDER BY `id` DESC");
  }


  $i = 0;
  while ($r_employ = $s_employ->fetch_assoc()) {
    $project_id = $r_employ['id'];
    if ($i >= 1) {
      break;
    } else {
      $i++;
    }

    $myObj = new stdClass();
    $myObj->name = $r_employ['name'];
    $myObj->feture = $r_employ['feture'];
    $myObj->image = $r_employ['file'];
    $myObj->view_id = $r_employ['id'];
    $myObj->description = $r_employ['description'];
    $myObj->download_link =  $r_employ['demo'] . '.zip';
    $myObj->project_id =  $project_id;


    $myJSON = json_encode($myObj);

    echo $myJSON;
  }

  if ($i == 0) {
    $myObj = new stdClass();
    $myObj->name = '';
    $myObj->feture = '';
    $myObj->image = '';
    $myObj->view_id = '';
    $myObj->description = '';
    $myObj->download_link =  '';
    $myObj->project_id =  'break';


    $myJSON = json_encode($myObj);

    echo $myJSON;
  }
}
