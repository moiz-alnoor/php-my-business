<?

    session_start();
    if(!isset($_SESSION['user_name']))
    {
        header("location:school.php");
        //  include("school.php");
    }
?>
<?php


    ob_start();
    session_start();
    include('conn.php');


    $a=mysql_query("select * from moiz");
    $f = mysql_fetch_array($a);


    $_SESSION['user_name']=$f['email'];


        if($f ['email']==$_POST['email'] and $f['text']==$_POST['pass'])

        {
            $_SESSION['user_name']=$f['email'];
            header("location:form1.php");
        }
    else
    {
        echo "<script> alert('لم يتم تسجيل الدخول.. البيانات التي أدخلتها غير صحيحة');</script>";
    //    header("location:school.php");
    require('school.php');
    }
    ob_end_flush();
    exit;

?>