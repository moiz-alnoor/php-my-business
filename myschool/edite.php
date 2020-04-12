<?

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
    <link rel="stylesheet" type="text/css" href="rep.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>تعديل#مدرستي</title>
</head>
<body>



<div class="header" style="height: 12em;">
</div>
    <div class="pp" >مدرستي #</div>
    <?
        include("conn.php");
        $a=mysql_query("select * from moiz");
        $qq=mysql_fetch_array($a);
        $ss=$qq['name'];


    ?>
<div class="s" ><? echo "مرحبا  ..  ".$ss; ?></div>


    <div class="nav6"><?echo date("F d Y ")."  -  التاريخ "; ?></div>



<div class="main">
    <a href="dgree.php">نتيجة المستوي الأول |</a>
    <a href="dgree_two.php"> نتيجة المستوي الثاني |</a>

    <a href="dgree_three.php"> نتيجة المستوي الثالث |</a>

    <a href="eshar.php">بيانات مالية |</a>
    <a href="report.php"> إستعلام |</a>
    <a href="form1.php">تسجيل |</a>
    <a href="out.php">خروج</a>
</div>

<div id="addressedit" style="left: 2em; top: 13em; position: absolute; border-radius: 100%; height: 2em; width: 2em; border: solid 3px; border-color: darkorange;"><a href="report.php"> رجوع</a></div>

</div>
<br><br><br><br>
<br><br>
<br><br>


<!----one---->
<? include("conn.php");
    $a=$_POST['x'];
    $m=mysql_query("select *from student where no ='$a'");
    $f=mysql_fetch_array($m);
    $b=$f['level'];
    $c=$f['name'];
    $d=$f['amount_d'];
    $p=$f['amount_mtg'];
    $e=$f['class_n'];
    $g=$f['amount_r'];
    $h=$f['tel'];
    $i=$f['date'];
    $k=$f['thinks'];


?>
<br><br><br><br><br><br>
<div id="addressedit">المستوي الأول</div>
<dioedit class="arrow_box">تعديل بيانات<br><? echo $c; ?></dioedit>


<center>
    <form name="f" action="edite1.php" method="post">
        <br><table class="area" >
            <tr><td> <input type="hidden" name="a" value= "<? echo $a; ?>" ></td></tr>
              <td>المستوي<br><input class="put" type="text" name="level" value= "<? echo $b; ?>"required></td>
            <td>الأسم<br><input type="text"class="put" name="name" value= "<? echo $c; ?>"required></td>
            <td>المبلغ المدفوع<br><input class="put" type="text" name="amount_d" value= "<? echo $d; ?>"required></td>
            <td> إسم الفصل<br><input class="put" type="text" name="class_n" value= "<? echo $e; ?>"required ></td></tr>
            <td>المبلغ المقرر<br><input class="put" type="text" name="amount_r" value= "<? echo $g; ?>"required></td>
            <td>هاتف<br><input type="text" class="put" name="tel" value= "<? echo $h; ?>"required></td>
            <td> تاريخ<br><input type="date"class="put" name="date" value= "<? echo $i; ?>" required=""></td>
            <td>ملحوظة<br><input type="text" class="put" name="thinks" value= "<? echo $k; ?>"></td>
            <tr> <td>قسط جدبد<br><input type="text"  value="" name="ges" class="put" /></td></tr>
            <tr><td> &pound   المبلغ المتبقي<?echo $p;?><br><input type="hidden" name="amount_mtg" value=" <?echo $p;?>" class="put" > </td></tr>

            <tr><td><input type="submit"id="ok" value="تعديــل" ></td></tr>
        </table></form>
</center>



<!----two---->


<? include("conn.php");
    $y=$_POST['y'];
    $m=mysql_query("select *from student1 where no ='$y'");
    $f=mysql_fetch_array($m);
    $b=$f['level'];
    $c=$f['name'];
    $d=$f['amount_d'];
    $s=$f['amount_mtg'];

    $e=$f['class_n'];

    $g=$f['amount_r'];
    $h=$f['tel'];
    $i=$f['date'];
    $k=$f['thinks'];

?>
<div id="addressedit">المستوي الثاني</div><br>
<dioedit class="arrow_box"> تعديل بيانات<br><? echo $c; ?></dioedit>

<center>
    <form name="f" action="edite1.php" method="post">
        <br><table class="area" >
            <tr><td> <input type="hidden" name="y" value= "<? echo $y; ?>" ></td></tr>
            <td>المستوي<br><input class="put" type="text" name="level" value= "<? echo $b; ?>"required></td>
            <td>الأسم<br><input type="text"class="put" name="name" value= "<? echo $c; ?>"required></td>
            <td>المبلغ المدفوع<br><input class="put" type="text" name="amount_d" value= "<? echo $d; ?>"required></td>
            <td> إسم الفصل<br><input class="put" type="text" name="class_n" value= "<? echo $e; ?>" ></td></tr>
            <td>المبلغ المقرر<br><input class="put" type="text" name="amount_r" value= "<? echo $g; ?>"required></td>
            <td>هاتف<br><input type="text" class="put" name="tel" value= "<? echo $h; ?>"required></td>
            <td> تاريخ<br><input type="date"class="put" name="date" value= "<? echo $i; ?>" required></td>
            <td>ملحوظة<br><input type="text" class="put" name="thinks" value= "<? echo $k; ?>"/></td>
            <tr> <td>قسط جدبد<br><input type="text"  value="" name="ges" class="put" /></td></tr>
            <tr><td>&pound   المبلغ المتبقي <?echo $s;?><br><input type="hidden" name="amount_mtg" value=" <?echo $s;?>" class="put" > </td></tr>

            <tr><td><input type="submit"id="ok" value="تعديــل" ></td></tr>

        </table></form>
</center>



<!----three---->


<? include("conn.php");
    $z=$_POST['z'];
    $m=mysql_query("select *from student2 where no ='$z'");
    $f=mysql_fetch_array($m);
    $b=$f['level'];
    $c=$f['name'];

    $e=$f['cl'];
    $d=$f['amount_d'];
    $g=$f['amount_r'];
    $h=$f['tel'];
    $i=$f['date'];
    $k=$f['thinks'];
    $s=$f['ms'];
    $x=$f['amount_mtg'];

?>

<div id="addressedit">المستوي الثالث </div><br>

<dioedit class="arrow_box"> تعديل بيانات<br> <? echo $c; ?></dioedit>

<center>
    <form name="f" action="edite1.php" method="post">
        <br><table class="area" >
            <tr><td> <input type="hidden" name="z" value= "<? echo $z; ?>" ></td></tr>
            <td>المستوي<br><input class="put" type="text" name="level" value= "<? echo $b; ?>"required></td>
            <td>الأسم<br><input type="text"class="put" name="name" value= "<? echo $c; ?>"required></td>
            <td>المبلغ المدفوع<br><input type="text" name="amount_d"  class="put" value=" <? echo $d; ?>" required/></td>
            <td> إسم الفصل<br><input class="put" type="text" name="cl" value= "<? echo $e; ?>" required></td></tr>
            <td>المبلغ المقرر<br><input class="put" type="text" name="amount_r" value= "<? echo $g; ?>"required></td>
            <td>هاتف<br><input type="text" class="put" name="tel" value= "<? echo $h; ?>"required></td>
            <td> تاريخ<br><input type="date"class="put" name="date" value= "<? echo $i; ?>" ></td>
            <td>ملحوظة<br><input type="text" class="put" name="thinks" value= "<? echo $k; ?>" ></td>

            <tr><td>المساق<br><input type="text"  value="<?echo $s;?>" name="ms" class="put" required/></td>
            <td>قسط جدبد<br><input type="text"  value="" name="ges" class="put" /></td></tr>
            <tr><td>&pound   المبلغ المتبقي <?echo $x;?><br><input type="hidden" name="amount_mtg" value=" <?echo $x;?>" class="put" > </td></tr>
            <tr><td><input type="submit"id="ok" value="تعديــل" ></td></tr>

        </table></form>
</center>





</html>