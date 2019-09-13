<?php

//Scrape the name of the file that was converted
$files = glob("uploads/*.csv");
foreach($files as $filepath) {
if ($handle = fopen($filepath, "r")) {
   $csv_file_name = explode ("/", $filepath);
   $csv_name = strval($csv_file_name[1]);
   $csv = explode(".",$csv_name);
  }
  fclose($handle);
}
//Download the file
  $output_file_name = "pipe_delimited_".$csv[0].".txt";
  header('Content-Type: application/download');
  header("Content-Disposition: attachment; filename=$output_file_name");
  header("Content-Length: " . filesize("uploads/pipe_delimited.txt"));
  $fp = fopen("uploads/pipe_delimited.txt", "r");
  fpassthru($fp);
  fclose($fp);

//Delete files in server after use
$all_files = glob("uploads/*");
  foreach($all_files as $filepath) {
    if(is_file($filepath)){
     unlink($filepath);
   }
 }


?>
