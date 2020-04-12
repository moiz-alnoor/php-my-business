<?
    include("conn.php");
$a=$_POST['amountmgrer'];

    $r=mysql_query("INSERT INTO student(no,name,level,class,address,tel,bday,dgree,lastedu,fname,fadd,ftel,amountmgrer,numbergst,note,amountrim)
VALUES('$_POST[no]','$_POST[name]','$_POST[level]','$_POST[class]','$_POST[address]','$_POST[tel]','$_POST[bday]','$_POST[dgree]',
'$_POST[lastedu]','$_POST[fname]','$_POST[fadd]','$_POST[ftel]','$_POST[amountmgrer]','$_POST[numbergst]','$_POST[note]','$a')");
    if($r)
    {
        echo "<script> alert('تم تسجيل الطالب ضمن طلاب المستوي الأول');</script>";
        require_once('form1.php');

    }
    else
    {
        echo "<script> alert('لم يتم تسجيل الطالب');</script>";
        require_once('form1.php');

    }

?>