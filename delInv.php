<?php

$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);
$sql="DELETE FROM `invite` WHERE `name`='$_POST[dname]' and `add`='$_POST[dadd]' ";
if(!mysql_query($sql,$con))
{
    die('error :'.mysql_error());
}
header("Location:deletePersonSuccess.html");
?>