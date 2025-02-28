<head>
<title>Complain Management System</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
  
  #content
    {
	float:left;
	margin-left:30px;
	width:655px;
	padding :4px;
	}
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>We Serve the Best Services</h1>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="aboutc.html">About</a></li>
			<li><a href="photoscsm.html">Photos</a></li>
			<li><a href="links.html">Links</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="csmcontactus.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="banner">&nbsp;</div>
		<div id="content">
			<?php
  
 $connection=mysql_connect("localhost","rajivbhatia","excess123") or die ('MySQL connect failed. ' . mysql_error());
 
 $db=mysql_select_db("rajivbhatia",$connection) or die('Cannot select database. ' . mysql_error());
 
 $query="select * from usertable";
 $result=mysql_query($query);
 echo "<font color='Red' size=4>Please Click on Engineer id to Update </font><br><br>";
 echo "<table border='1'>";
 echo "<tr>";
 echo "<th>Name</th><th>Address</th><th>City</th><th>State</th><th>Pin</th><th>Email id </th><th>Mobile No</th> <th>Username</th><th>Password</th>";
 echo "</tr>";
 while($row=mysql_fetch_array($result))
  {
    echo "<tr>";
	echo "<td><a href='updateuser1.php?update_n={$row['user']}'>",$row["user"],"</td>";
	echo "<td>",$row['name'],"</td>"; 
	echo "<td>",$row['address'],"</td>"; 
	echo "<td>",$row['city'],"</td>"; 
	echo "<td>",$row['state'],"</td>"; 
	echo "<td>",$row['pin'],"</td>"; 
	echo "<td>",$row['emailid'],"</td>"; 
	echo "<td>",$row['phoneno'],"</td>"; 
	echo "<td>",$row['user'],"</td>"; 
	echo "<td>",$row['password'],"</td>"; 
	echo "</tr>";
  }
  echo "</table>";
  
 mysql_close($connection);
 ?>
 <br>
 <button name="Back" value="Back"><a href="adminpage.html">Back</a></button>
		</div>
		<!-- end #content -->
		
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="footer">
		<p>Copyright (c) 2017 - 2018  MCA Batch MIT</p>
	</div>
</div>
</html>
