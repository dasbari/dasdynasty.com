<?php

$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);
$sql="INSERT INTO expenses VALUES('$_POST[year]','$_POST[category]','$_POST[exp]')";
if(!mysql_query($sql,$con))
{
    die('error :'.mysql_error());
}
header("Location:expenses.html");
?>