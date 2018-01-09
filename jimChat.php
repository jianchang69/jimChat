<?php
  $json_str = file_get_contents('php://input'); //接收request之body
  $json_obj = json_decode($json_str); //轉json format

  $myfile = fopen("log.txt","w+") or die( "unable to open file"); //設一個log.txt用來印訊息
  fwrite($myfile, "\xEF\xBB\xBF".$json_str); //在字串前加入 \xEF\xBB\xBf 轉成utf8
  fclose($myfile);
  
?>
