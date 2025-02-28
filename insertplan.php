<?php
 $pi=$_REQUEST["plan_id"];
 $ci=$_REQUEST["cust_id"];
 $pl=$_REQUEST["plan"];
 $am=$_REQUEST["amount"];
 $pdt=$_REQUEST["plan_date"];
 
 $connection=mysql_connect("localhost","rajivbhatia","excess123") or die ('MySQL connect failed. ' . mysql_error());
  $db=mysql_select_db("rajivbhatia",$connection) or die('Cannot select database. ' . mysql_error());
  
  $query="insert into plan values('$pi','$ci','$pl','$am','$pdt')";
 $result=mysql_query($query);
 
 mysql_close($connection);
 
 header("location:index.html");
 
 ?>