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
    <div class="pp" >مدرستي  #</div>
    <div class="s" ></div>
    <?
        include("conn.php");
        $a=mysql_query("select * from moiz");
        $qq=mysql_fetch_array($a);
        $ss=$qq['name'];


    ?>
    <div class="s" ><? echo "مرحبا  ..  ".$ss; ?></div>


    <div class="nav6"><?echo date("F d Y ")."  -  التاريخ "; ?></div>

</div>


<body>
<nav style=" position: absolute;width: 100%; height: 100%;  background-color: black; opacity: 0.6; top: 0px; left: 0px;" ></nav>

<aside  style="position: absolute;padding-top: 3.5em; left:29.3em; top:17em; background-color:black;color: white; border-radius:15px;font-size: large; text-align: center;height: 5.7em; width: 17.7em;">





    <?$name=$_POST['name']; echo "أنت علي وشك حزف ".$name ?>

</aside>

<form action="delete_table3.php" method="post">
    <input type="hidden" name="z"  value="<?echo $_POST['z']?>"/>

    <input type="hidden" name="a" value="2"/>
    <br> <br><input type="submit" value="تراجع"
                    style="text-align: center;
    font-size: 15px;
    width: 10.7em;
    top: 27.6em;
    left: 34.6em;
    height: 41px;

position: absolute;
    color: white;
    background-color: dodgerblue;
    border: 0px solid ;
    border-radius: 5px;
    border-color: dodgerblue;">
</form>


<form action="delete_table3.php" method="post">
    <input type="hidden" name="z"  value="<?echo $_POST['z']?>"/>
    <input type="hidden" name="a" value="1"/>

    <br> <br><input type="submit" value="تأكيد"
                    style="text-align: center;
    font-size: 15px;
    width: 11em;
    top: 27.6em;
    height: 41px;
left: 46em;
position: absolute;
    color: white;
    background-color: dodgerblue;
    border: 0px solid ;
    border-radius: 5px;
    border-color: dodgerblue;">
</form>

<?php
    $s=$_POST['z'];
    $r=$_POST['a'];


    switch($r){

        case 1:
            include("conn.php");

            $m=mysql_query("delete from student_three where number ='$s'");
            echo "<script> alert(' تم حزف الطالب');</script>";
            header("location:report.php");

            break;


        case 2:
            //require_once("report.php");
            header("location:report.php");

            break;
    }
    ob_end_flush();
    exit;
?>
</body></html>