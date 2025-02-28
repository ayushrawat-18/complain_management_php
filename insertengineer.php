<?php
 $ei=$_REQUEST["eng_id"];
 $en=$_REQUEST["eng_name"];
 $ad=$_REQUEST["addr"];
 $em=$_REQUEST["email"];
 $emo=$_REQUEST["emobile"];
 $dt=$_REQUEST["date_time"];
 
  $connection=mysql_connect("localhost","rajivbhatia","excess123") or die ('MySQL connect failed. ' . mysql_error());
  $db=mysql_select_db("rajivbhatia",$connection) or die('Cannot select database. ' . mysql_error());
  
  $query="insert into engineer values($ei,'$en','$ad','$em','$emo','$dt')";
 $result=mysql_query($query) or die("query failed".mysql_error());
 
 mysql_close($connection);
 
 header("location:index.html");
 
 ?>