<?php
$data_arry = array();
$data_arry['i_icon'] = 'error';
$data_arry['i_title'] = 'Something is Wrong';
if (isset($_FILES['file'])) {
    // random string

    function random_string($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }


    // get file
    $file = $_FILES['file'];

    // echo $file_name;
    $file_type = $file['type'];
    $file_type_extend = explode("/", $file_type);
    $file_type = $file_type_extend[0];

    // catch file name
    $file_name = $file['name'];
    $file_name = '/image/blog/' . random_string(100) . "." . $file_type_extend[1];

    // temp name
    $file_tmp = $file['tmp_name'];

    if ($file_type == 'image') {
        if (move_uploaded_file($file_tmp, '../../..' . $file_name)) {
            $data_arry['i_icon'] = 'success';
            $data_arry['i_title'] = 'http://' . $_SERVER['SERVER_NAME']  . $file_name;
        } else {
            $data_arry['i_icon'] = 'error';
            $data_arry['i_title'] = 'Plase slect Lowest size image upload fast';
        }
    } else {
        $data_arry['i_icon'] = 'warning';
        $data_arry['i_title'] = 'This file not image';
    }
}
$data_arry = json_encode($data_arry);
echo $data_arry;
