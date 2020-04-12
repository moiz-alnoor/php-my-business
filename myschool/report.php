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
    <title>تقارير#مدرستي</title>
</head>
<body>

<div id="top">www.myschool.com </div>
<div class="img">
 <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 4em;">
  <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 7em;">
   <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right:10em;">
 </div>
 
    <?
        include("conn.php");
        $a=mysql_query("select * from moiz");
        $qq=mysql_fetch_array($a);
        $ss=$qq['name'];


    ?>
  

<div class="header"></div>
    <center>
    <div class="asaid">
    
  <br><br>

<form action="report.php" method="post">
    <input type="submit"  id="ok" value="تقرير" name="">

    <input type="text"  class="put" value="" name="a"  placeholder="الفصل#أولي" required style="height: 2.8em; width: 16em;"/>

</form>



<table>    
    <tr id="reporttop"><td>ملحوظة</td><td>هاتف ولي الأمر</td><td>المبلغ المتبقي</td><td>المبلغ المدفوع</td><td>المبلغ المقرر</td><td>هاتف</td><td>إسم الفصل</td><td>المستوي</td><td>الأسم</td><td>الرقم</td></tr>

    <?

        include("conn.php");
        $a=$_POST['a'];

        $m=mysql_query("select * from student where  class  ='$a'");

        $l=mysql_fetch_array($m);

        do{?>
            <tr id="reporttab">
           


                <td> <? echo $l['note'];?></td>


                <td> <? echo $l['ftel'];?></td>


                <td> <? echo " &pound  ".$l['amountrim'];?></td>
                <td> <? echo " &pound  ".$l['totalamountdue'];?></td>
                <td> <? echo " &pound  ".$l['amountmgrer'];?></td>
                  <td> <? echo $l['tel'];?></td>

                <td> <? echo $l['class'];?></td>

                <td> <? echo $l['level'];?></td>

                <td> <? echo $l['name'];?></td>
                <td> <? echo $l['no'];?> </td>

                </td></tr>
        <? }while ($l=mysql_fetch_array($m));?>
</table>
<br><br>
    

    <form action="report.php" method="post">
        <input type="submit"  id="ok" value="تقرير" name="">

        <input type="text"  class="put" value="" name="b" placeholder="الفصل#تانية" required style="height: 2.8em; width: 16em;"/>

    </form>



    <table>

        <tr id="reporttop"><td>ملحوظة</td><td>هاتف ولي الأمر</td><td>المبلغ المتبقي</td><td>المبلغ المدفوع</td><td>المبلغ المقرر</td><td>هاتف</td><td>إسم الفصل</td><td>المستوي</td><td>الأسم</td><td>الرقم</td></tr>

        <?

            include("conn.php");
            $b=$_POST['b'];

            $m=mysql_query("select * from student_two where  class  ='$b'");

            $l=mysql_fetch_array($m);

            do{?>

                <tr id="reporttab">
                               <td> <? echo $l['note'];?></td>


                    <td> <? echo $l['ftel'];?></td>


                    <td> <? echo " &pound  ".$l['amountrim'];?></td>
                    <td> <? echo " &pound  ".$l['totalamountdue'];?></td>
                    <td> <? echo " &pound  ".$l['amountmgrer'];?></td>
                    <td> <? echo $l['tel'];?></td>

                    <td> <? echo $l['class'];?></td>

                    <td> <? echo $l['level'];?></td>

                    <td> <? echo $l['name'];?></td>
                    <td> <? echo $l['no'];?> </td>
                    </td></tr>
            <? }while ($l=mysql_fetch_array($m));?>
    </table>
    <br><br>
    
    <form action="report.php" method="post">
        <input type="submit"  id="ok" value="تقرير" name="">

        <input type="text"  class="put" value="" name="c" placeholder="الفصل#تالتة" required style="height: 2.8em; width: 16em;"/>

    </form>



    <table>

        <tr id="reporttop"><td>ملحوظة</td><td>هاتف ولي الأمر</td><td>المبلغ المتبقي</td><td>المبلغ المدفوع</td><td>المبلغ المقرر</td><td>هاتف</td><td>إسم الفصل</td><td>المستوي</td><td>الأسم</td><td>الرقم</td></tr>

        <?

            include("conn.php");
            $c=$_POST['c'];

            $m=mysql_query("select * from student_three  where  class ='$c'");

            $l=mysql_fetch_array($m);

            do{?>
                <tr id="reporttab">
                                <td id="reporttab"> <? echo $l['note'];?></td>


                    <td > <? echo $l['ftel'];?></td>


                    <td><? echo " &pound  ".$l['amountrim'];?></td>
                    <td > <? echo " &pound  ".$l['totalamountdue'];?></td>
                    <td > <? echo " &pound  ".$l['amountmgrer'];?></td>
                    <td > <? echo $l['tel'];?></td>

                    <td > <? echo $l['class'];?></td>

                    <td > <? echo $l['level'];?></td>

                    <td > <? echo $l['name'];?></td>
                    <td > <? echo $l['no'];?> </td>

                    </td>
                    </tr>
            <? }while ($l=mysql_fetch_array($m));?>
    </table>

<br><br>
</div>

</center>
    
<div class="footer" style="top:32em;">
   
</body>
</html>