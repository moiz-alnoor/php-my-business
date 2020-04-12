<?php
include("conn.php");
$r=mysql_query("INSERT INTO student (level,name,amount_d,class_n,amount_r,tel,date,thinks)
VALUES('$_POST[level]','$_POST[name]','$_POST[amount_d]','$_POST[class_n]','$_POST[amount_r]','$_POST[tel]','$_POST[date]','$_POST[thinks]')");
if($r)
{
echo "<script> alert('your data has added  thanks');</script>";
require_once('form.php');

}
else
{
echo "<script> alert('no');</script>";
header("location:form.php");
}



?>