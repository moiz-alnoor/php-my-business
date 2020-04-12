<?

    include("conn.php");
    $a=$_POST['z'];


    $c=$_POST['level'];
    $d=$_POST['name'];
    $e=$_POST['amount_d'];
    $z=$_POST['cl'];
    $g=$_POST['amount_r'];
    $h=$_POST['tel'];
    $i=$_POST['date'];
    $j=$_POST['thinks'];

    $m=mysql_query("update student2 set level ='$c',name ='$d',amount_d ='$e',cl ='$z',amount_r ='$g',tel ='$h',date ='$i',thinks ='$j'  where no ='$a'");
    echo "<script> alert('لقد تم تعديل بيانات الطالب بنجاح');</script>";
    require_once("report.php");
?>