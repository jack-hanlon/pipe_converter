<?php

//directory upload files are stored
$target_dir = "uploads/";
$Target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target = basename($_FILES["fileToUpload"]["name"]);
$target_arr = explode (".", $target);
//file path
//if up_or_down is 1 then its an upload if 0 then a download

$settings = array(
  'target_file' => $Target_file
);

//set bit to 0 if file breaches rules


?>
