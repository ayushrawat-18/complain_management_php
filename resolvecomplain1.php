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
               $cid = $_GET['com_id'];
               $cname = $_GET['cust_name'];
               $ctype = $_GET['comp_type'];
               $ctitle = $_GET['comp_tytle'];
               $cdesc = $_GET['comp_desc'];
			   $cstatus=$_GET['status'];
			   $eid=$_GET['eng_id'];
			   $ename=$_GET['eng_name'];
			   $ecomm=$_GET['eng_comment'];
			   $credate=$_GET['create_date'];
			   $clodate=$_GET['close_date'];
			   $query = mysql_query("update complain set cust_name='$cname', comp_type='$ctype', comp_title='$ctitle',comp_desc='$cdesc',status='$cdesc',eng_id='$eid',eng_name='$ename',eng_comment='$ecomm',create_time='$credate',close_date='$clodate' where com_id='$cid'", $connection);
              }
       if(isset($_GET['update_n'])) 
{
$update_no = $_GET['update_n'];
$query1 = mysql_query("select * from complain where com_id=$update_no", $connection);
while ($row1=mysql_fetch_array($query1)) 
{
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='eng_id' value='{$row1['com_id']}' />";
echo "<br />";
echo "<table>";
echo "<tr>";
 echo "<td><label>" . "Cust. Name :" . "</label></td>";
 echo"<td><input class='input' type='text' name='cust_name' value='{$row1['cust_name']}' /><td>";
 echo "</tr>";
echo "<tr>";
 echo "<td><label>" . "Comp. Type:" . "</label></td>" ;
echo"<td><input class='input' type='text' name='comp_type' value='{$row1['comp_type']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Comp. Title :" . "</label></td>" ;
echo"<td><input class='input' type='text' name='comp_title' value='{$row1['comp_tytle']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Comp. Desc :" . "</label></td>";
echo "<td><input class='input' type='text' name='comp_desc' value='{$row1['comp_desc']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Status :" . "</label></td>";
echo "<td><input class='input' type='text' name='status' value='{$row1['status']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Eng. Id :" . "</label></td>";
echo "<td><input class='input' type='text' name='eng_id' value='{$row1['eng_id']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Eng. Name :" . "</label></td>";
echo "<td><input class='input' type='text' name='eng_name' value='{$row1['eng_name']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Eng. Comment :" . "</label></td>";
echo "<td><input class='input' type='text' name='eng_comment' value='{$row1['eng_comment']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Create Date:" . "</label></td>" ;
echo "<td><input class='input' type='text' name='create_date' value='{$row1['create_date']}' /></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>" . "Close Date:" . "</label></td>" ;
echo "<td><input class='input' type='text' name='close_date' value='{$row1['close_date']}' /></td>";
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
echo "<button name='Back' value='Back'><a href='engineerpage.html'>Back</a></button>";
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



