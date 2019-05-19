<?php

$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);

$sql="UPDATE `invite` SET `no`='$_POST[uno]' WHERE `name`='$_POST[uname]'and `add`='$_POST[uadd]'";

if(!mysql_query($sql,$con))
{
    die('error :'.mysql_error());
}
header("Location:updatePersonSuccess.html");
?>