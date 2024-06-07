<?php
require_once '../../conection/index.php';

if (isset($_GET['project_id'])) {
  $catagory = $_GET['catagory'];
  $project_id = $_GET['project_id'];
  if (empty($_GET['project_id'])) {
    $s_employ = $con->query("SELECT * FROM `project_info` where `catagory`LIKE '%$catagory%' ORDER BY `id` DESC");
  } else {

    $s_employ = $con->query("SELECT * FROM `project_info` where `id` < '$project_id' and `catagory`LIKE '%$catagory%' ORDER BY `id` DESC");
  }

  // Create an Object
  $full_data = new ArrayObject();



  while ($r_employ = $s_employ->fetch_assoc()) {

    // create array
    $data  = array();

    $data["name"] = $r_employ['name'];
    $data["feture"] = $r_employ['feture'];
    $data["image"] = $r_employ['file'];
    $data["view_id"] = $r_employ['id'];
    $data["catagory"] = $r_employ['catagory'];
    $data["description"] = $r_employ['description'];
    $data["download_link"] = $r_employ['demo'] . '.zip';


    // array push in object
    $full_data->append($data);
  }

  // encode object
  $full_data = json_encode($full_data);

  // print object for response
  echo $full_data;
}
