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
               $ena = $_GET['name'];
               $add = $_GET['address'];
			   $cty=$_GET['city'];
			   $sta=$_GET['state'];
			   $pin=$_GET['pin'];
			   $ema = $_GET['emailid'];
               $pho = $_GET['phoneno'];
			   $use=$_GET['user'];
			   $pas=$_GET['password'];
			   
			   $query = mysql_query("update engineer set name='$ena', address='$add',city='$cty',state='$sta',pin='$pin',email='$ema',phoneno='$pho',user='$use',password='$pas' where user='$use'", $connection);
              }
       if(isset($_GET['update_n'])) 
{
$update_no = $_GET['update_n'];
$query1 = mysql_query("select * from usertable where user='$update_no'", $connection);

while ($row1=mysql_fetch_array($query1)) 
{
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='user' value='{$row1['user']}' />";
echo "<br />";
echo "<table>";
echo "<tr>";
 echo "<td><label>" . "User Name :" . "</label></td>";
 echo"<td><input class='input' type='text' name='name' value='{$row1['name']}' /><td>";
 echo "</tr>";
echo "<tr>";
 echo "<td><label>" . "Address:" . "</label></td>" ;
echo"<td><input class='input' type='text' name='address' value='{$row1['address']}' /></td>";
echo "</tr>";

echo "<tr>";
 echo "<td><label>" . "City:" . "</label></td>" ;
echo"<td><input class='input' type='text' name='city' value='{$row1['city']}' /></td>";
echo "</tr>";

echo "<tr>";
 echo "<td><label>" . "State:" . "</label></td>" ;
echo"<td><input class='input' type='text' name='state' value='{$row1['state']}' /></td>";
echo "</tr>";

echo "<tr>";
 echo "<td><label>" . "Pin:" . "</label></td>" ;
echo"<td><input class='input' type='text' name='pin' value='{$row1['pin']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Email :" . "</label></td>" ;
echo"<td><input class='input' type='text' name='emailid' value='{$row1['emailid']}' /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><label>" . "Phone No :" . "</label></td>";
echo "<td><input class='input' type='text' name='phoneno' value='{$row1['phoneno']}' /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><label>" . "User Name:" . "</label></td>" ;
echo "<td><input class='input' type='text' name='user' value='{$row1['user']}' /></td>";
echo "</tr>";

echo "<tr>";
 echo "<td><label>" . "Password:" . "</label></td>" ;
echo"<td><input class='input' type='text' name='password' value='{$row1['password']}' /></td>";
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



