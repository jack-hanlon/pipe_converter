<?php
//Puts an empty line at start of file
file_put_contents("uploads/pipe_delimited.txt","\n");
//row counter
$row = 1;
//open a file handle for the upload file
if (($handle = fopen($Target_file, "r")) !== FALSE) {
  //while theres another row called $data get it from $handle
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    //set count
    $count = 0;
    //
    for($i = 0;$i < count($data);$i++){
        if($data[$i] != ''){
          $count++;
        }
        if($count == 0){
          break;
        }
    }
  /*  if($count > 0 ){
    //echo $count;
  }*/
    //echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
// for each column item in row that isnt blank either do A or B
    for ($c=0; $c < $count; $c++) {
      //A: if it is not the last column add to file the content and a | after the content
      if($data[$c] !== '' && $c !== $count-1){
        file_put_contents("uploads/pipe_delimited.txt",$data[$c]."|",FILE_APPEND);
        //echo $data[$c] . "|";
      }
      //B: if it is the last column just  add the content
      if($c == $count-1){
        file_put_contents("uploads/pipe_delimited.txt",$data[$c],FILE_APPEND);
      //  echo $data[$c];
      }
    }
    //if the first column of a row has no data then skip it
    if($data[0] == ""){
      continue;
    }else{
      //if the column is the blank column after the last filled column in the row create a new line
    file_put_contents("uploads/pipe_delimited.txt","\n",FILE_APPEND);
}
    //echo "</br>";
  }
  //close the handle
  fclose($handle);
}
// redirect back to main page
header("Location: http://localhost:8080/raw_pipe_converter/");
 ?>
