<head>
<title>Complain Management System</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
  #content
    {
	float:right;
	margin-left:30px;
	width:600px;
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
            $connection = mysql_connect("localhost", "rajivbhatia","excess123");
            $db=mysql_select_db("rajivbhatia",$connection);

            if (isset($_GET['submit'])) 
               {
               $eid = $_GET['eng_id'];
               $ena = $_GET['eng_name'];
               $add = $_GET['address'];
               $ema = $_GET['email'];
               $emob = $_GET['emobile'];
			   $edat=$_GET['date_time'];
			   $query = mysql_query("update engineer set eng_name='$ena', address='$add', email='$ema',emobile='$emob',date_time='$edat' where eng_id='$eid'", $connection);
              }
       if(isset($_GET['update_n'])) 
{
$update_no = $_GET['update_n'];
$query1 = mysql_query("select * from engineer where eng_id=$update_no", $connection);
while ($row1=mysql_fetch_array($query1)) 
{
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='eng_id' value='{$row1['eng_id']}' />";
echo "<br />";
echo "<table>";
echo "<tr>";
 echo "<td><label>" . "Eng. Name :" . "</label></td>";
 echo"<td><input class='input' type='text' name='eng_name' value='{$row1['eng_name']}' /><td>";
 echo "</tr>";
echo "<tr>";
 echo "<td><label>" . "Address:" . "</label></td>" ;
echo"<td><input class='input' type='text' name='address' value='{$row1['address']}' /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><label>" . "Email :" . "</label></td>" ;
echo"<td><input class='input' type='text' name='email' value='{$row1['email']}' /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><label>" . "Mobile :" . "</label></td>";
echo "<td><input class='input' type='text' name='emobile' value='{$row1['emobile']}' /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><label>" . "Date of Joining:" . "</label></td>" ;
echo "<td><input class='input' type='text' name='date_time' value='{$row1['date_time']}' /></td>";
echo "</tr>";
echo "</table>";

echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) 
{
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
echo "<br><br><br><br>";
echo "<button name='Back' value='Back'><a href='adminpage.html'>Back</a></button>";
}
 mysql_close($connection);
?>


<br>
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



