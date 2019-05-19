<?php

$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);
$sql="INSERT INTO invite VALUES('$_POST[iname]','$_POST[iadd]','$_POST[ino]')";
if(!mysql_query($sql,$con))
{
    die('error :'.mysql_error());
}
header("Location:addPerson.html");
?>