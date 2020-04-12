<?php

    include("conn.php");
    $a=$_POST['a'];


    $a=mysql_query("select * from moiz where text='$a'");
    $f = mysql_fetch_array($a);




    if($f){
    switch(1){

        case 1:
            $n=$_POST['name'];
            $b=$_POST['pass'];
            $c=$_POST['email'];
            $a=$_POST['a'];



            $m=mysql_query("update moiz set text ='$b',email ='$c',name ='$n' where text ='$a'");
            echo "<script> alert('تم تغيير بيانات الخصوصية سيتم توجيهك إلي صفحة الدخول للتأكيد');</script>";
            require_once("school.php");

    }}
    else{
        echo "<script> alert('لم يتم تغييرالبيانات كلمة المرور التي أدخلتها خطأ');</script>";
        require_once("form1.php");

    }

?>