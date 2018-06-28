<?php
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE' ) !== FALSE){
  echo "Internet explorer";
  
  }
  else {
  echo "other";
  }
  ?>
  