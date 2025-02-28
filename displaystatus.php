<head>
<title>Complain Management System</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
 .star
  {
  color:red;
  }
  input::placeholder
  {
  color:#dddddd;
  }
  textarea::placeholder
  {
  color:#dddddd;
  
  }
  th
   {
    background-color:#aa66ff;
	color:white;
	width:100px;
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
 
 session_start();
 if(isset($_SESSION['uname']))
   {
   $u=$_SESSION['uname'];
   }

 $query="select * from reg_complain where user like 'prashant1'";
 $result=mysql_query($query);
 
 echo "<table border='1'>";
 echo "<tr>";
 echo "<th>Cust Name</th><th>Comp. Type</th><th>Comp. Title</th> <th>Comp. Desc</th><th> Comp. Date</th>";
 echo "</tr>";
 while($row=mysql_fetch_array($result))
  {
    echo "<tr>";
	echo "<td>",$row['cust_name'],"</td>";
	echo "<td>",$row['comp_type'],"</td>";
	echo "<td>",$row['comp_title'],"</td>";
	echo "<td>",$row['comp_desc'],"</td>";
	echo "<td>",$row['comp_date'],"</td>";
	echo "</tr>";
  }
  echo "</table>";
 mysql_close($connection);
 ?>
			
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Service Categories</h2>
					<ul>
						<li><a href="#">Software</a> <span>Share Software Problems with us</span></li>
						<li><a href="#">Hardware</a> <span>Harware Problem any type</span></li>
						<li><a href="#">Network</a>  <span>Network Problem such as LAN,Man,Wan</span> </li>
					</ul>
				</li>
				
				</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="footer">
		<p>Copyright (c) 2017 - 2018  MCA Batch MIT</p>
	</div>
</div>
</html>
