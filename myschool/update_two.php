<?
    include("conn.php");


    $number=$_POST['number'];
$level=$_POST['level'];
$name=$_POST['name'];
$no=$_POST['no'];
$tel=$_POST['tel'];
$class=$_POST['class'];
$valuegst=$_POST['valuegst'];
$numbergst=$_POST['numbergst'];
$amountmgrer=$_POST['amountmgrer'];
$note=$_POST['note'];

    $lastedu=$_POST['lastedu'];

    $dgree=$_POST['dgree'];
    $bday=$_POST['bday'];
    $fname=$_POST['fname'];

    $ftel=$_POST['ftel'];
    $fadd=$_POST['fadd'];
    $address=$_POST['address'];




    $m=mysql_query("update student_two set no ='$no',name ='$name',level ='$level',class='$class',address='$address',tel ='$tel',bday='$bday',
dgree='$dgree',lastedu='$lastedu',fname='$fname',fadd='$fadd',ftel='$ftel',amountmgrer ='$amountmgrer',numbergst ='$numbergst',note='$note' where number ='$number'");

    if($m){
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