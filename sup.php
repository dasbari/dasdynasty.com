<!doctype html>
<html>
<head>	
    <link rel="icon" type="image/icon" href="icons/favicon.png"/>
<title>signup</title>
    <style>
        h1{
            color: royalblue;
            font-family:"century gothic";
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        h2{
            color: tomato;
            font-family:"century gothic";
            position:absolute;
            top:55%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        h3{
            color: royalblue;
            font-family:"century gothic";
            position:absolute;
            top:60%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        h3 a{
            text-decoration: none;
            color:red;
        }
    </style>
</head>

<body>
	<div id="text">
        <img src="icons/Welcome-blue.jpg" style="position:absolute;top:30%;left:50%; transform:translate(-50%,-50%);">
	<?php
	$a=$_POST["txt3"];
 		$con=mysql_connect("localhost","root");
	if(!$con)
	{
		die('could not connect:'.mysqli_error());
	}
	mysql_select_db("das bari",$con);
	$sql="INSERT INTO login VALUES('$_POST[txt3]','$_POST[txt4]','$_POST[txt5]')";
    
	if (!mysql_query($sql,$con))
	{
		die('error:'.mysql_error());
	}
	echo"<h1><center>You are Successfully Signed up. Thank you!</h1> <br><h2> $a </center></h2>";
	mysql_close($con);
	?>
        <h3><center>please click here to <a href="login.html">Log in</a></center></h3>
    </div>
</body>
</html>
