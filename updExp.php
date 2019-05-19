<?php

$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);

$sql="UPDATE `expenses` SET `amount`='$_POST[exp]' WHERE `year`='$_POST[year]'and `items`='$_POST[category]'";

if(!mysql_query($sql,$con))
{
    die('error :'.mysql_error());
}
header("Location:updateExpensesSuccess.html");
?>