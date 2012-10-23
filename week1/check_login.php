<!DOCTYPE html> 
<html> 
<head> 
	<title>Map'n'Whales</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="themes/derp.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	
</head> 

<body> 
	<div data-role="page" id="checklogin">

	<div data-role="header">
		<h1>NO TEST, YOU ARE THE DEMONS.</h1>
	</div><!-- /header -->

	<div data-role="content">
	<?php

$host="mysql-user-master.stanford.edu"; 
$username="ccs147defade"; 
$password="chietiwe"; 
$db_name="c_cs147_defade"; 
$tbl_name="members";


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

$query="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($query);

$count=mysql_num_rows($result);

if($count==1){	
	echo "<img src='trollface.jpg' 	style='margin:auto;display:block;'>";
}
else {
	echo "Wrong Username or Password";
}
?>

	     	</div><!-- /content -->

	<div data-role="footer">
		<h4>And then test was a troll.</h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>