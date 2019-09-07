<?php
file_put_contents("uploads/pipe_delimited.txt","\n");
$row = 1;
if (($handle = fopen($Target_file, "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $count = 0;
    for($i = 0;$i < count($data);$i++){
        if($data[$i] != ''){
          $count++;
        }
        if($count == 0){
          break;
        }
    }
    if($count > 0 ){
    //echo $count;
  }
    //echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;

    for ($c=0; $c < $count; $c++) {
      if($data[$c] !== '' && $c !== $count-1){
        file_put_contents("uploads/pipe_delimited.txt",$data[$c]."|",FILE_APPEND);
        //echo $data[$c] . "|";
      }
      if($c == $count-1){
        file_put_contents("uploads/pipe_delimited.txt",$data[$c],FILE_APPEND);
      //  echo $data[$c];
      }
    }
    if($data[0] == ""){
      continue;
    }else{
    file_put_contents("uploads/pipe_delimited.txt","\n",FILE_APPEND);
}
    //echo "</br>";
  }
  fclose($handle);
}

header("Location: http://localhost:8080/raw_pipe_converter/");
 ?>
