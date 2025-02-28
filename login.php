<?php
 $ut=$_REQUEST["usertype"];
 $us=$_REQUEST["usr"];
 $pa=$_REQUEST["pass"];
 $flag=0;
 
  $connection=mysql_connect("localhost","rajivbhatia","excess123") or die ('MySQL connect failed. ' . mysql_error());
  $db=mysql_select_db("rajivbhatia",$connection) or die('Cannot select database. ' . mysql_error());
 
if($us=="Admin" &&  $pa=="Admin")
     header("location:adminpage.html");
  else
  {
  $query="select user,password from usertable";
  $result=mysql_query($query) or die("query failed".mysql_error());
  while($row=mysql_fetch_array($result))
   {
    if($row['user']==$us && $row['password']==$pa && $ut=='Engineer')
      {
	  session_start();
	  $_SESSION['uname']=$us;
	  $flag=1;
	  break;
	  }
	else if($row['user']==$us && $row['password']==$pa && $ut=='Customer')  
      {
	  session_start();
	  $_SESSION['uname']=$us;
	  $flag=2;
	  break;
	  }
   }	  
  if($flag==1)
     header("location:engineerpage.html");
  if($flag==2)
     header("location:userpage.html");
  }
 mysql_close($connection);
 
 ?>