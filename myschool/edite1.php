
<?  include("conn.php");
    $a=$_POST['a'];


    $c=$_POST['level'];
    $d=$_POST['name'];


    //المدفوع
    $e=$_POST['amount_d']+$_POST['ges'];
    //متبقي
    $s=$_POST['amount_r']-$e;
    //المقرر
    $g=$_POST['amount_r'];





    $z=$_POST['class_n'];






    $h=$_POST['tel'];
    $i=$_POST['date'];
    $j=$_POST['thinks'];

    $m=mysql_query("update student set level ='$c',name ='$d',amount_d ='$e',class_n ='$z',amount_r ='$g',amount_mtg ='$s',tel ='$h',date ='$i',thinks ='$j'  where no ='$a'");
    echo "<script> alert('تم تعديل بيانات الطالب');</script>";
                   require_once("report.php");
?>


<?php
    include("conn.php");
    $y=$_POST['y'];
    $c=$_POST['level'];
    $d=$_POST['name'];




    $z=$_POST['class_n'];





    //المدفوع
    $e=$_POST['amount_d']+$_POST['ges'];
    //متبقي
    $s=$_POST['amount_r']-$e;
    //المقرر
    $g=$_POST['amount_r'];






    $h=$_POST['tel'];
    $i=$_POST['date'];
    $j=$_POST['thinks'];

    $m=mysql_query("update student1 set level ='$c',name ='$d',amount_d ='$e',amount_mtg ='$s',class_n ='$z',amount_r ='$g',tel ='$h',date ='$i',thinks ='$j'  where no ='$y'");
    echo "<script> alert('تم تعديل بيانات الطالب');</script>";
    require_once("report.php");
?>
<?  include("conn.php");
    $z=$_POST['z'];


    $c=$_POST['level'];
    $d=$_POST['name'];
    $r=$_POST['ms'];


    //المدفوع
    $e=$_POST['amount_d']+$_POST['ges'];
    //متبقي
    $s=$_POST['amount_r']-$e;
//المقرر
    $g=$_POST['amount_r'];









    $t=$_POST['cl'];




    $g=$_POST['amount_r'];
    $h=$_POST['tel'];
    $i=$_POST['date'];
    $j=$_POST['thinks'];

    $m=mysql_query("update student2 set level ='$c',name ='$d',ms ='$r',amount_d ='$e',amount_mtg ='$s',cl ='$t',amount_r ='$g',tel ='$h',date ='$i',thinks ='$j'  where no ='$z'");
    echo "<script> alert('تم تعديل بيانات الطالب');</script>";
    require_once("report.php");
?>
