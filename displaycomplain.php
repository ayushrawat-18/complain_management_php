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
 
 $query="select * from complain";
 $result=mysql_query($query);
 
 echo "<table border='1'>";
 echo "<tr>";
 echo "<th>Com. id</th><th>Cust id</th><th>Cust Name</th><th>Complain Type</th><th>Complain Title</th> <th>Complain Desc</th><th>Status</th><th>Engineer id</th><th>Engineer Name</th><th>Engineer Comm</th><th> Comp.Date</th><th>Close.date</th>";
 echo "</tr>";
 while($row=mysql_fetch_array($result))
  {
    echo "<tr>";
	echo "<td>",$row['com_id'],"</td>";
	echo "<td>",$row['cust_id'],"</td>"; 
	echo "<td>",$row['cust_name'],"</td>"; 
	echo "<td>",$row['comp_type'],"</td>"; 
	echo "<td>",$row['comp_tytle'],"</td>"; 
	echo "<td>",$row['comp_desc'],"</td>"; 
	echo "<td>",$row['status'],"</td>"; 
	echo "<td>",$row['eng_id'],"</td>"; 
	echo "<td>",$row['eng_name'],"</td>"; 
	echo "<td>",$row['eng_comment'],"</td>"; 
	echo "<td>",$row['create_date'],"</td>"; 
	echo "<td>",$row['close_date'],"</td>";
	echo "</tr>";
  }
  echo "</table>";
  
 mysql_close($connection);
 ?>
 <br>
 <button name="Back" value="Back"><a href="engineerpage.html">Back</a></button>
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
