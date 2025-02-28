<?php
 $na=$_REQUEST["name"];
 $ad=$_REQUEST["addr"];
 $ci=$_REQUEST["city"];
 $st=$_REQUEST["state"];
 $pi=$_REQUEST["pin"];
 $em=$_REQUEST["email"];
 $ph=$_REQUEST["phone"];
 $us=$_REQUEST["user"];
 $pa=$_REQUEST["pass"];
 $cp=$_REQUEST["cpass"];
 $sq=$_REQUEST["sec_que"];
 $sa=$_REQUEST["sec_ans"];

 $connection=mysql_connect("localhost","rajivbhatia","excess123") or die ('MySQL connect failed. ' . mysql_error());
  $db=mysql_select_db("rajivbhatia",$connection) or die('Cannot select database. ' . mysql_error());
 
 $query="insert into usertable values('$na','$ad','$ci','$st','$pi','$em','$ph','$us','$pa','$cp','$sq','$sa')";
 $result=mysql_query($query);
 
 mysql_close($connection);
 
 header("location:index11.html");
 
 ?>
  
  