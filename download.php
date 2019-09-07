<?php

  header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="pipe_delimited.txt"');
  header("Content-Length: " . filesize("uploads/pipe_delimited.txt"));
  $fp = fopen("uploads/pipe_delimited.txt", "r");
  fpassthru($fp);
  fclose($fp);

?>
