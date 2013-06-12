<?php
  $result = mysql_query("select * from shop");
  
  $str;
  
  while( $cut = mysql_fetch_array($result)){
    $str ="no=$cut[no]& name=$cut[name]& id=$cut[id]& phone=$cut[phone]& score=$cut[score]& ★";
    
  }
  echo $str;
?>