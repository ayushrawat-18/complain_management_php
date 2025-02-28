<?php
 $us=$_REQUEST["user"];
 $cn=$_REQUEST["cust_name"];
 $ctype=$_REQUEST["comp_type"];
 $ct2=$_REQUEST["comp_title"];
 $cd1=$_REQUEST["comp_desc"];
 $cd2=$_REQUEST["comp_date"];
 
 $connection=mysql_connect("localhost","rajivbhatia","excess123") or die ('MySQL connect failed. ' . mysql_error());
  $db=mysql_select_db("rajivbhatia",$connection) or die('Cannot select database. ' . mysql_error());
 
 $query="insert into reg_complain values('$us','$cn','$ctype','$ct2','$cd1','$cd2')";
 $result=mysql_query($query);
 
 mysql_close($connection);
 
 header("location:userpage.html");
 
 ?>
  
  