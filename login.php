<!DOCTYPE html>
<html>
	<head>
		<link href="csss.css" rel="stylesheet"/>
	</head>
	<body>
		<div id="text">
					<?php
					$uid=$_POST["txt1"];
					$pass=$_POST["txt2"];
					mysql_connect("localhost","root")or die("not connected");
					mysql_select_db("das bari") or die ("wrong database");
					$result=mysql_query("SELECT*from login where uid='$uid' and pass='$pass'");
					$no=mysql_num_rows($result);
					 if($no>=1)
					 {
						header('location:homePage.html');
					}
						else
						{
							header('location:logout.html');
							exit();
						}
				?>
		</div>
	</body>
</html>

