<?php
    include("conn.php");
    $r=mysql_query("INSERT INTO ou (date,no,name,level,class,why,time)
VALUES('$_POST[date]','$_POST[no]','$_POST[name]','$_POST[level]','$_POST[class]','$_POST[why]','$_POST[time]')");
    if($r)
    {
        echo "<script> alert('تمت إضافة سجل غياب');</script>";
        require_once('ou.php');

    }
    else
    {
        echo "<script> alert('لم يتم إضافة سجل غياب');</script>";
        require_once('ou.php');
    }



?>