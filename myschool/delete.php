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
    <link rel="stylesheet" type="text/css" href="esh.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>حزف#مدرستي</title>
</head>
<div class="header">
     <div class="pp" >ثانوية الأوائل الخاصة # </div>
</div>
<div class="footer" style="top: 31em;" >
    <a href="form1.php"> <p style="right: 15em; top: 1em;"> تسجيل جديد  #</p> </a>

    <a href="addgst.php"> <p style="right: 15em; top: 3em;"> دفع قسط  #</p> </a>

    <a href="est3lam.php"> <p style="right: 15em; top: 5em;"> إستعلامات  #</p> </a>
    <a href="report.php"> <p style="right: 45em; top: 1em;"> تقارير  #</p> </a>

    <a href="eshar.php"> <p style="right: 45em; top: 3em;"> بيانات مالية #</p> </a>

    <a href="class.php"> <p style="right: 45em; top: 5em;"> حزف سجل فصل  #</p> </a>


</div>

<div class="nav6"><?echo date("F d Y ")."  -  التاريخ "; ?></div>

<?
    include("conn.php");
    $a=mysql_query("select * from moiz");
    $qq=mysql_fetch_array($a);
    $ss=$qq['name'];


?>
<div class="s" ><? echo "مرحبا  ..  ".$ss; ?></div>



<body>
<nav style=" position:absolute; width: 100%; height: 100%; left: 0px; top:0px;background-color: black; opacity: 0.6;" ></nav>
<aside  style="position: absolute;padding-top: 3.5em; left:29.3em; top:17em; background-color:black;color: white; border-radius:15px;font-size: large; text-align: center;height: 5.7em; width: 17.7em;">





    <?$name=$_POST['name']; echo "أنت علي وشك حزف ".$name ?>

</aside>

    <form action="delete.php" method="post">
    <input type="hidden" name="x"  value="<?echo $_POST['x']?>"/>

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


    <form action="delete.php" method="post">
        <input type="hidden" name="x"  value="<?echo $_POST['x']?>"/>
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
    $s=$_POST['x'];
$r=$_POST['a'];


    switch($r){

    case 1:
        include("conn.php");

    $m=mysql_query("delete from student where number ='$s'");
    echo "<script> alert(' تم حزف الطالب');</script>";
       header("location:report.php");
//require("report.php");

        break;


    case 2:
        header("location:report.php");

        break;
}
    ob_end_flush();
    exit;
?>

</body></html>