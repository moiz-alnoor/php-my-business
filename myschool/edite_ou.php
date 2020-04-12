<?
    include("conn.php");
    $number=$_POST['number'];
    $date=$_POST['date'];
    $no=$_POST['no'];
    $name=$_POST['name'];
    $level=$_POST['level'];
    $class=$_POST['class'];
    $why=$_POST['why'];
    $time=$_POST['time'];


    $m=mysql_query("update ou set date='$date',no='$no',name='$name',level='$level',
     class='$class',why='$why',time='$time' where number ='$number'");
if($m){
    echo "<script> alert('تم تعديل سجل الغياب');</script>";
    require_once('ou.php');

}
    else{
        echo "<script> alert(' لم يتم التعديل');</script>";
        require_once('ou.php');
    }
?>