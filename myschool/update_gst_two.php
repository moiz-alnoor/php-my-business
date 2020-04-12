<?php
    include("conn.php");

    $number=$_POST['number'];



    $vgstone=$_POST['vgstone'];
    $vgsttwo=$_POST['vgsttwo'];
    $vgstthree=$_POST['vgstthree'];
    $vgstfour=$_POST['vgstfour'];
    $vgstfive=$_POST['vgstfive'];
    $vgstsex=$_POST['vgstsex'];
    $vgstseven=$_POST['vgstseven'];
    $vgsteyt=$_POST['vgsteyt'];

    $dgstone=$_POST['dgstone'];
    $dgsttwo=$_POST['dgsttwo'];
    $dgstthree=$_POST['dgstthree'];
    $dgstfour=$_POST['dgstfour'];
    $dgstfive=$_POST['dgstfive'];
    $dgstsex=$_POST['dgstsex'];
    $dgstseven=$_POST['dgstseven'];
    $dgsteyt=$_POST['dgsteyt'];

    $m=mysql_query("update student_two set vgstone ='$vgstone', vgsttwo ='$vgsttwo', vgstthree ='$vgstthree', vgstfour ='$vgstfour', vgstfive='$vgstfive',
  dgstone='$dgstone', dgsttwo ='$dgsttwo', dgstthree ='$dgstthree', dgstfour='$dgstfour', dgstfive='$dgstfive',
  vgstsex='$vgstsex',vgstseven='$vgstseven',vgsteyt='$vgsteyt',dgstsex='$dgstsex',dgstseven='$dgstseven',dgsteyt='$dgsteyt',
  totalamountdue ='$total'  where number ='$number'");

    if($m and $number>0){
        echo "<script> alert('تمت عملية معالجة بيانات الطالب');</script>";
        require_once("est3lam.php");

    }
    else{
        echo "<script> alert('عملية معالجة بيانات الطالب لم تتم')</script>";
        require_once("est3lam.php");

    }


?>

<?
    include("conn.php");
    $num=$_POST['number'];


    $a=mysql_query("select * from student_two where number ='$num'");
    $b=mysql_fetch_array($a);
    $vgstone=$b['vgstone'];
    $vgsttwo=$b['vgsttwo'];
    $vgstthree=$b['vgstthree'];
    $vgstfour=$b['vgstfour'];
    $vgstfive=$b['vgstfive'];
    $vgstsex=$b['vgstsex'];
    $vgstseven=$b['vgstseven'];
    $vgsteyt=$b['vgsteyt'];

    $amountrim=$b['amountrim'];

    $total=$vgstone+$vgsttwo+$vgstthree+$vgstfour+$vgstfive+$vgstsex+$vgstseven+$vgsteyt;

    $amountmgrer=$b['amountmgrer'];
    $amountrim=$amountmgrer-$total;



    $m=mysql_query("update student_two set amountrim ='$amountrim',totalamountdue ='$total'  where number ='$num'");

?>