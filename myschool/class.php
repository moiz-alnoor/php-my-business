<?

    ob_start();
    session_start();
    if(!isset($_SESSION['user_name']))
    {
        header("location:school.php");
        //  include("school.php");
    }
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="sch.css">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>حزف#مدرستي</title>
</head>
<div class="header">
   <div class="pp" >ثانوية الأوائل الخاصة # </div>


    <div class="footer" style="top: 31em; position: absolute;" >
        <a href="form1.php"> <p style="right: 15em; top: 1em;"> تسجيل جديد  #</p> </a>

        <a href="addgst.php"> <p style="right: 15em; top: 3em;"> دفع قسط  #</p> </a>

        <a href="est3lam.php"> <p style="right: 15em; top: 5em;"> إستعلامات  #</p> </a>
        <a href="report.php"> <p style="right: 45em; top: 1em;"> تقارير  #</p> </a>

        <a href="eshar.php"> <p style="right: 45em; top: 3em;"> بيانات مالية #</p> </a>

        <a href="class.php"> <p style="right: 45em; top: 5em;"> حزف سجل فصل  #</p> </a>


    </div>

    <div class="nav6"><?echo date("F d Y ")."  -  التاريخ "; ?></div>

</div>



<?
    include("conn.php");
    $a=mysql_query("select * from moiz");
    $qq=mysql_fetch_array($a);
    $ss=$qq['name'];


?>

<div class="s" ><? echo "مرحبا  ..  ".$ss; ?></div>


<body >

<nav style=" position: absolute; width: 100%; height: 100%;  background-color: black; opacity: 0.6; top: 0px; left: 0px;" ></nav>


<aside  style="position: absolute;padding-top: 3.5em; left:24.4em; top:17em; background-color:black;color: white; border-radius:15px;font-size: large; text-align: center;height: 5.7em; width: 27em;">


</aside>

<form action="class.php" method="post">
<input type="hidden" name="w" value="1">
    <input type="password" name="p"  value="" class="put"required placeholder="كلمة المرور" style=" left: 48.1em; top: 19em; width: 9em;" required/>
    <input type="text" name="x"  value="" class="put"  placeholder="إسم الفصل" style=" left: 38.8em; top: 20.9em; width: 9em;" required/>

    <br> <br><input type="submit" value="المستوي الأول#حزف"
                    style="text-align: center;
    font-size: 15px;
    width: 10.7em;
    top: 27.6em;
    left: 52em;
    height: 41px;

position: absolute;
    color: white;
    background-color: dodgerblue;
    border: 0px solid ;
    border-radius: 5px;
    border-color: dodgerblue;">
</form>


<form action="class.php" method="post">
    <input type="hidden" name="w" value="2">
    <input type="text" name="y"  value="" class="put" placeholder="إسم الفصل" style=" left: 37.6em; top:16.8em; width: 9em;" required/>
    <input type="password" name="p"  value="" class="put" placeholder="كلمة المرور" style=" left: 28.3em; top:14.9em; width: 9em;"required />
    <br> <br><input type="submit" value="المستوي الثاني#حزف"
                    style="text-align: center;
    font-size: 15px;
    width: 11em;
    top: 27.6em;
    height: 41px;
left: 40em;
position: absolute;
    color: white;
    background-color: dodgerblue;
    border: 0px solid ;
    border-radius: 5px;
    border-color: dodgerblue;">
</form>
<form action="class.php" method="post">
    <input type="hidden" name="w" value="3">
    <input type="password" name="p"  value="" class="put"  placeholder="كلمة المرور" style=" left: 27em; top: 10.8em; width: 9em;" required/>
    <input type="text" name="z"  value="" class="put" placeholder="إسم الفصل" style=" left: 17.6em; top: 12.7em; width: 9em;" required=""/>
    <br> <br><input type="submit" value="المستوي الثالث#حزف"
                    style="text-align: center;
    font-size: 15px;
    width: 11em;
    top: 27.6em;
    height: 41px;
left: 28em;
position: absolute;
    color: white;
    background-color: dodgerblue;
    border: 0px solid ;
    border-radius: 5px;
    border-color: dodgerblue;">
</form>


<div class="main" style="left: 23em;" >
    <a href="form1.php"> تسجيل جديد |</a>
    <a href="addgst.php">دفع مبلغ |</a>
    <a href="est3lam.php">أستعلامات |</a>
    <a href="report.php">تقارير |</a>
    <a href="eshar.php">بيانات مالية |</a>
    <a href="out.php">خروج</a>
</div>


<?php

    include("conn.php");

    $w=$_POST['w'];
    $p=$_POST['p'];
    $x=$_POST['x'];
    $y=$_POST['y'];
    $z=$_POST['z'];
switch ($w){
    case 1 :
  $a=mysql_query("select * from moiz where text='$p'");
    $b=mysql_fetch_array($a);
    if($b){

        $w=mysql_query("select * from student where class ='$x'");
        $z=mysql_fetch_array($w);
        if($z){
            $m=mysql_query("delete from student where class ='$x'");
            echo "<script> alert('تم حزف طلاب الفصل الذي حددته');</script>";

        }
        else{
            echo "<script> alert('لا يوجد فصل بهذا الإسم الرجاء التأكد من الحروف والفراغات');</script>";
        }

    }

    else{
    echo "<script> alert('كلمة المرور غير صحيحة');</script>";
    }

break;


        case 2:
    $a=mysql_query("select * from moiz where text='$p'");
    $b=mysql_fetch_array($a);
    if($b){

        $s=mysql_query("select * from student_two where class ='$y'");
        $c=mysql_fetch_array($s);
        if($c){
            $m=mysql_query("delete from student_two where class ='$y'");
            echo "<script> alert('تم حزف طلاب الفصل الذي حددته');</script>";
        }
        else{
            echo "<script> alert('لا يوجد فصل بهذا الإسم الرجاء التأكد من الحروف والفراغات');</script>";
        }

    }
    else{
        echo "<script> alert('كلمة المرور غير صحيحة');</script>";

    }

break;

        case 3:
        $a=mysql_query("select * from moiz where text='$p'");
        $b=mysql_fetch_array($a);
        if($b){

            $k=mysql_query("select * from student_three where class ='$z'");
            $r=mysql_fetch_array($k);
            if($r){
                $m=mysql_query("delete from student_three where class ='$z'");
                echo "<script> alert('تم حزف طلاب الفصل الذي حددته');</script>";
            }
            else{
                echo "<script> alert('لا يوجد فصل بهذا الإسم الرجاء التأكد من الحروف والفراغات');</script>";
            }

        }
        else{
            echo "<script> alert('كلمة المرور غير صحيحة');</script>";

        }

            break;
}





?>
</body>
</html>