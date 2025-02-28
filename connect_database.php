<?php
  $connection=mysql_connect("localhost","rajivbhatia","excess123") or die ('MySQL connect failed. ' . mysql_error());
  $db=mysql_select_db("rajivbhatia",$connection) or die('Cannot select database. ' . mysql_error());
?>
