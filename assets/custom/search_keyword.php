<?php
require '../../conection/index.php';

$slect_all_data = $con->query("SELECT blog.name FROM blog INNER JOIN project_info");
while ($row_key = $slect_all_data->fetch_assoc()) {
    $data = $row_key['name'];
    echo "<option value='" . $data . "'></option>";
}
