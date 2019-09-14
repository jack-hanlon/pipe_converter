<?php
file_put_contents("uploads/pipe_delimited.txt","\n",FILE_APPEND);
//GLOBAL VARIABLES
$row = 1;
$unit_col = -1;
$amount_col = -1;
$desc_col = -1;
$date_col = -1;
$desired_date_col = 0;
$desired_unit_col = 1;
$desired_amount_col = 2;
$desired_desc_col = 3;

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

    $row++;
// for each column item in row that isnt blank either do A or B
    $out_order_arr = array($count);

    for ($c=0; $c < $count; $c++) {
      //A: if it is not the last column add to file the content and a | after the content
      if($data[$c] != ''){
          if($data[$c] == "Unit" || $data[$c] == " Unit " || $data[$c] == "Unit " || $data[$c] == " Unit" || $data[$c] == "UNIT"){
                  $unit_col = $c;
          }else if($data[$c] == "Amount" || $data[$c] == " Amount " || $data[$c] == "Amount " || $data[$c] == " Amount" || $data[$c] == "AMOUNT"){
                  $amount_col = $c;
          }else if($data[$c] == "Description" || $data[$c] == " Description " || $data[$c] == "Description " || $data[$c] == " Description" || $data[$c] == "DESCR"){
                  $desc_col = $c;
          }else if($data[$c] == "MonthEnter" || $data[$c] == " MonthEnter " || $data[$c] == "MonthEnter " || $data[$c] == " MonthEnter" || $data[$c] == "DATE" || $data[$c] == "DATE " ){
                  $date_col = $c;
          }


      }
      if($unit_col != -1 && $amount_col != -1 && $desc_col != -1 && $date_col != -1){
              if($unit_col == $c){
                  $out_order_arr[$desired_unit_col] = $data[$c]."|";
              }else if($amount_col == $c){
                    if(strpos($data[$c],'(') != FALSE){
                      str_replace(array("(",")"),array("-",""),$data[$c]);
                    }
                  $out_order_arr[$desired_amount_col] = $data[$c]."|";
              }else if($date_col == $c){
                  $out_order_arr[$desired_date_col] = $data[$c]."|";
              }else if($desc_col == $c){
                  $out_order_arr[$desired_desc_col] = $data[$c];
              }





    }
      if($unit_col == -1 && $amount_col == -1 && $desc_col == -1 && $date_col == -1){
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


  }
  if($unit_col == -1 && $amount_col == -1 && $desc_col == -1 && $date_col == -1){
  if($data[0] == ""){
    continue;
  }else{
    //if the column is the blank column after the last filled column in the row create a new line
  file_put_contents("uploads/pipe_delimited.txt","\n",FILE_APPEND);
  }
}

  if($row > 2 && $unit_col != -1 && $amount_col != -1 && $desc_col != -1 && $date_col != -1 && $data[0] != "" ){
file_put_contents("uploads/pipe_delimited.txt",$out_order_arr,FILE_APPEND);
file_put_contents("uploads/pipe_delimited.txt","\n",FILE_APPEND);
}

  /*
  for($d = 0; $d < $count; $d++){
    file_put_contents
  }*/
}
  //close the handle
  fclose($handle);
}
// redirect back to main page
header("Location: http://localhost:8080/raw_pipe_converter/");
 ?>
