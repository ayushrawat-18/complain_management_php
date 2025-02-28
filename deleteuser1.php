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
	<div id="page">
		<div id="banner">&nbsp;</div>
		<div id="content">
			          <?php
            $connection = mysql_connect("localhost", "rajivbhatia","excess123");
            $db=mysql_select_db("rajivbhatia",$connection);
if(isset($_GET['delete_n'])) 
{
$delete_no = $_GET['delete_n'];
$query1 = mysql_query("delete from usertable where user=$delete_no", $connection);
echo "<Span>Data Deleted Successfuly......!!</span>";
echo "<br><br><br><br>";
echo "<button name='Back' value='Back'><a href='adminpage.html'>Back</a></button>";
}
 mysql_close($connection);
?>
</div>
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



