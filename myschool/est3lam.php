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
    <title>إستعلام#مدرستي</title>
</head>
<body>

 <div id="top" >www.myschool.com </div>
 <div class="img">
 <img  src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 4em;">
  <img  src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 7em;">
   <img src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right:10em;">
 </div>
 <div class="header">
</div>
<center>
 <div class="asaid" style=" height:100em; "> 
 
<?
        include("conn.php");
        $a=mysql_query("select * from moiz");
        $qq=mysql_fetch_array($a);
        $ss=$qq['name'];


    ?>



<form action="est3lam.php" method="post" style="right: 4em; position: absolute; top: 1em;">
    <input type="submit"  id="ok" value="إستعلام" name="">

    <input type="text"  class="put" value="" name="a" placeholder="رقم#أولي" required style="height: 33px; width: 15em;"/>
</form>
<?
    include("conn.php");
    $a=$_POST['a'];
$q=mysql_query("select * from student where no ='$a' or name ='$a'");
    $s=mysql_fetch_array($q);

    $number=$s['number'];
    $level=$s['level'];
    $name=$s['name'];
    $no=$s['no'];
    $tel=$s['tel'];
    $class=$s['class'];
    $valuegst=$s['valuegst'];
    $numbergst=$s['numbergst'];
    $amountmgrer=$s['amountmgrer'];
    $lastedu=$s['lastedu'];
    $dgree=$s['dgree'];
    $bday=$s['bday'];
    $note=$s['note'];
    $fname=$s['fname'];
    $fadd=$s['fadd'];
	$ftel=$s['ftel'];
    $address=$s['address'];
	$vgstone=$s['vgstone'];
	$vgsttwo=$s['vgsttwo'];
	$vgstthree=$s['vgstthree'];
	$vgstfour=$s['vgstfour'];
	$vgstfive=$s['vgstfive'];

    $vgstsex=$s['vgstsex'];
    $vgstseven=$s['vgstseven'];
    $vgsteyt=$s['vgsteyt'];

    $dgstone=$s['dgstone'];
	$dgsttwo=$s['dgsttwo'];
	$dgstthree=$s['dgstthree'];
	$dgstfour=$s['dgstfour'];
	$dgstfive=$s['dgstfive'];

    $dgstsex=$s['dgstsex'];
    $dgstseven=$s['dgstseven'];
    $dgsteyt=$s['dgsteyt'];

    $totalamountdue=$s['totalamountdue'];


?>


<form action="update_one.php" method="post">
    <table  style="width: 35em; background-color: hsl(0,0%,95%); border: 1px solid hsl(0,0%,90%);padding: 6px; text-align: center; font-size: 13px; position:absolute;right:13em; top: 5em; padding-bottom: 2em;" >

        <tr><td><input type="hidden" name="number" value="<?echo $number;?>"/></td></tr>
        <tr >
            <td>المستوي<br><input type="text" class="put1" name="level" value="<?echo $level;?>" required />
            </td>
            <td>الإسم رباعي<br><input type="text"  class="put1" name="name" value="<?echo $name;;?>"  required/>
            </td><td>الرقم<br><input type="number" class="put1" name="no" value="<?echo $no;?>" required/>
            </td>
        </tr>
        <tr>
            <td>هاتف<br><input type="text" class="put1" name="tel" value="<?echo $tel;?>"  />
            </td>
            <td>السكن<br><input type="text"  class="put1" name="address" value="<?echo $address;?>"  />
            </td><td>إسم الفصل<br><input type="text" class="put1" name="class" value="<?echo $class;?>"  required/>
            </td>
        </tr>
        <tr>
            <td>المدرسة السابقة<br><input type="text" class="put1" name="lastedu" value="<?echo $lastedu;?>"/>
            </td>
            <td>مجموع الأساس<br><input type="number"  class="put1" name="dgree" value="<?echo $dgree;?>" />
            </td><td>تاريخ الميلاد<br><input type="date" class="put1" name="bday" value="<?echo $bday;?>" />
            </td>
        </tr>
        <tr>
            <td>هاتف<br><input type="text" class="put1" name="ftel" value="<?echo $ftel;?>" />
            </td>
            <td>السكن<br><input type="text"  class="put1" name="fadd" value="<?echo $fadd;?>" />
            </td><td>إسم ولي الأمر<br><input type="text" class="put1" name="fname" value="<?echo $fname;?>"/>
            </td>
        </tr>
        <tr>
            <td>ملحوظة<br><input type="text" class="put1" name="note" value="<?echo $note;?>" />
            </td>
            <td>عدد الدفعات المالية<br><input type="number"  class="put1" name="numbergst" value="<?echo $numbergst;?>" />
            </td><td>المبلغ المقرر<br><input type="number" class="put1" name="amountmgrer" value="<?echo $amountmgrer;?>" />

            </td>
        </tr>

        <input type="submit" class="save" value="حفظ التعديلات" style="left: 35em; position: absolute; top:28em; width: 9em; height: 3em;">

    </table>
 </form>
<form action="update_gst_one.php" method="post">
    <table  style="width: 30em; background-color: hsl(0,0%,95%); border: 1px solid hsl(0,0%,90%);padding: 6px; text-align: center; font-size: 13px; position:absolute;left:4em; top: 5em; padding-bottom: 2em;" >
    <tr><td> <input type="hidden" name="number" value="<?echo $number;?>"></td></tr>
    <tr><td> تاريخة</td> <td>قيمتة </td><td>الدفعية</td></tr>

    <tr><td><input type="text" class="put" name="dgstone" value="<? echo $dgstone;?>"/></td><td><input type="number" class="put" name="vgstone" value="<? echo $vgstone;?>"/></td><td>الأولي</td></tr>
    <tr><td><input type="text" class="put" name="dgsttwo" value="<? echo $dgsttwo;?>"/> </td><td><input type="number" class="put" name="vgsttwo" value="<? echo $vgsttwo;?>"/></td><td>الثانيه</td></tr>
    <tr><td><input type="text" class="put" name="dgstthree" value="<? echo $dgstthree;?>"/></td> <td><input type="number" class="put" name="vgstthree" value="<? echo $vgstthree;?>"/></td><td>الثالثه</td></tr>
    <tr><td><input type="text" class="put" name="dgstfour" value="<? echo $dgstfour;?>"/> </td><td><input type="number" class="put" name="vgstfour" value="<? echo $vgstfour;?>"/> </td><td>الرابعه</td></tr>
    <tr><td><input type="text" class="put" name="dgstfive" value="<? echo $dgstfive;?>"/></td> <td><input type="number" class="put" name="vgstfive" value="<? echo $vgstfive;?>"/></td><td>الخامسه</td></tr>
    <tr><td><input type="text" class="put" name="dgstsex" value="<? echo $dgstsex;?>"/></td> <td><input type="number" class="put" name="vgstsex" value="<? echo $vgstsex;?>"/></td><td>السادسه</td></tr>
    <tr><td><input type="text" class="put" name="dgstseven" value="<? echo $dgstseven;?>"/> </td><td><input type="number" class="put" name="vgstseven" value="<? echo $vgstseven;?>"/> </td><td>السابعه</td></tr>
    <tr><td><input type="text" class="put" name="dgsteyt" value="<? echo $dgsteyt;?>"/></td> <td><input type="number" class="put" name="vgsteyt" value="<? echo $vgsteyt;?>"/></td><td>الثامنه</td></tr>

    <tr> <td></td><td><? echo $totalamountdue;?></td><td>الإجمالي</td></tr>

</table>

    <input type="submit" class="save" value="حفظ التعديلات" style="left: 5em; position: absolute; top: 29em; width: 8em; height: 2.5em;">

</form>



<form action="est3lam.php" method="post" style="right: 4em; position: absolute; top: 30em;">
    <input type="submit"  id="ok" value="إستعلام" name="">

    <input type="text"  class="put" name="x" value="" placeholder="رقم#تانية" required style="height: 2.8em; width: 15em;"/>


</form>




<?
    include("conn.php");
    $x=$_POST['x'];
    $t=mysql_query("select * from student_two where no ='$x' or name ='$x'");
    $s=mysql_fetch_array($t);
    $number=$s['number'];
    $level=$s['level'];
    $name=$s['name'];
    $no=$s['no'];
    $tel=$s['tel'];
    $class=$s['class'];
    $valuegst=$s['valuegst'];
    $numbergst=$s['numbergst'];
    $amountmgrer=$s['amountmgrer'];
    $lastedu=$s['lastedu'];
    $dgree=$s['dgree'];
    $bday=$s['bday'];
    $note=$s['note'];
    $fname=$s['fname'];
    $fadd=$s['fadd'];
    $ftel=$s['ftel'];
    $address=$s['address'];
    $vgstone=$s['vgstone'];
    $vgsttwo=$s['vgsttwo'];
    $vgstthree=$s['vgstthree'];
    $vgstfour=$s['vgstfour'];
    $vgstfive=$s['vgstfive'];

    $vgstsex=$s['vgstsex'];
    $vgstseven=$s['vgstseven'];
    $vgsteyt=$s['vgsteyt'];

    $dgstone=$s['dgstone'];
    $dgsttwo=$s['dgsttwo'];
    $dgstthree=$s['dgstthree'];
    $dgstfour=$s['dgstfour'];
    $dgstfive=$s['dgstfive'];

    $dgstsex=$s['dgstsex'];
    $dgstseven=$s['dgstseven'];
    $dgsteyt=$s['dgsteyt'];

    $totalamountdue=$s['totalamountdue'];




?>


<form action="update_two.php" method="post">
 <table  style="width: 35em; background-color: hsl(0,0%,95%); border: 1px solid hsl(0,0%,90%);padding: 6px; text-align: center; font-size: 13px; position:absolute;right:13em; top: 43em; padding-bottom: 2em;" >
>

        <tr><td><input type="hidden" name="number" value="<?echo $number;?>"/></td></tr>
        <tr >
            <td>المستوي<br><input type="text" class="put1" name="level" value="<?echo $level;?>" required />
            </td>
            <td>الإسم رباعي<br><input type="text"  class="put1" name="name" value="<?echo $name;;?>"  required/>
            </td><td>الرقم<br><input type="number" class="put1" name="no" value="<?echo $no;?>" required/>
            </td>
        </tr>
        <tr>
            <td>هاتف<br><input type="text" class="put1" name="tel" value="<?echo $tel;?>"  />
            </td>
            <td>السكن<br><input type="text"  class="put1" name="address" value="<?echo $address;?>"  />
            </td><td>إسم الفصل<br><input type="text" class="put1" name="class" value="<?echo $class;?>"  required/>
            </td>
        </tr>
        <tr>
            <td>المدرسة السابقة<br><input type="text" class="put1" name="lastedu" value="<?echo $lastedu;?>"/>
            </td>
            <td>مجموع الأساس<br><input type="number"  class="put1" name="dgree" value="<?echo $dgree;?>" />
            </td><td>تاريخ الميلاد<br><input type="date" class="put1" name="bday" value="<?echo $bday;?>" />
            </td>
        </tr>
        <tr>
            <td>هاتف<br><input type="text" class="put1" name="ftel" value="<?echo $ftel;?>" />
            </td>
            <td>السكن<br><input type="text"  class="put1" name="fadd" value="<?echo $fadd;?>" />
            </td><td>إسم ولي الأمر<br><input type="text" class="put1" name="fname" value="<?echo $fname;?>"/>
            </td>
        </tr>
        <tr>
            <td>ملحوظة<br><input type="text" class="put1" name="note" value="<?echo $note;?>" />
            </td>
            <td>عدد الدفعات المالية<br><input type="number"  class="put1" name="numbergst" value="<?echo $numbergst;?>" />
            </td><td>المبلغ المقرر<br><input type="number" class="put1" name="amountmgrer" value="<?echo $amountmgrer;?>" />

            </td>
        </tr>

        <input type="submit" class="save" value="حفظ التعديلات" style="left: 35em; position: absolute; top: 65em; width: 9em; height: 3em;">

    </table>
</form>


<form action="update_gst_two.php" method="post">
    <table  style="width: 30em; background-color: hsl(0,0%,95%); border: 1px solid hsl(0,0%,90%);padding: 6px; text-align: center; font-size: 13px; position:absolute;left:4em; top: 43em; padding-bottom: 2em;" >
        <tr><td> <input type="hidden" name="number" value="<?echo $number;?>"></td></tr>
        <tr><td> تاريخة</td> <td>قيمتة </td><td>الدفعية</td></tr>

        <tr><td><input type="text" class="put" name="dgstone" value="<? echo $dgstone;?>"/></td><td><input type="number" class="put" name="vgstone" value="<? echo $vgstone;?>"/></td><td>الأولي</td></tr>
        <tr><td><input type="text" class="put" name="dgsttwo" value="<? echo $dgsttwo;?>"/> </td><td><input type="number" class="put" name="vgsttwo" value="<? echo $vgsttwo;?>"/></td><td>الثانيه</td></tr>
        <tr><td><input type="text" class="put" name="dgstthree" value="<? echo $dgstthree;?>"/></td> <td><input type="number" class="put" name="vgstthree" value="<? echo $vgstthree;?>"/></td><td>الثالثه</td></tr>
        <tr><td><input type="text" class="put" name="dgstfour" value="<? echo $dgstfour;?>"/> </td><td><input type="number" class="put" name="vgstfour" value="<? echo $vgstfour;?>"/> </td><td>الرابعه</td></tr>
        <tr><td><input type="text" class="put" name="dgstfive" value="<? echo $dgstfive;?>"/></td> <td><input type="number" class="put" name="vgstfive" value="<? echo $vgstfive;?>"/></td><td>الخامسه</td></tr>
        <tr><td><input type="text" class="put" name="dgstsex" value="<? echo $dgstsex;?>"/></td> <td><input type="number" class="put" name="vgstsex" value="<? echo $vgstsex;?>"/></td><td>السادسه</td></tr>
        <tr><td><input type="text" class="put" name="dgstseven" value="<? echo $dgstseven;?>"/> </td><td><input type="number" class="put" name="vgstseven" value="<? echo $vgstseven;?>"/> </td><td>السابعه</td></tr>
        <tr><td><input type="text" class="put" name="dgsteyt" value="<? echo $dgsteyt;?>"/></td> <td><input type="number" class="put" name="vgsteyt" value="<? echo $vgsteyt;?>"/></td><td>الثامنه</td></tr>

        <tr> <td></td><td><? echo $totalamountdue;?></td><td>الإجمالي</td></tr>

    </table>


    <input type="submit" class="save" value="حفظ التعديلات" style="left: 5em; position: absolute; top: 66em; width: 9em; height: 2.5em;">

</form>






<form action="est3lam.php" method="post" style="right:5em; position: absolute; top: 60em;">
    <input type="submit"  id="ok" value="إستعلام" name="">

    <input type="text"  class="put" value="" name="c" placeholder="رقم#تالتة" required style="height: 2.8em; width: 15em;"/>


</form>


<?
    include("conn.php");
    $c=$_POST['c'];
    $q=mysql_query("select * from student_three where no ='$c' or name ='$c'");
    $s=mysql_fetch_array($q);
    $number=$s['number'];
    $level=$s['level'];
    $name=$s['name'];
    $no=$s['no'];
    $tel=$s['tel'];
    $class=$s['class'];
    $valuegst=$s['valuegst'];
    $numbergst=$s['numbergst'];
    $amountmgrer=$s['amountmgrer'];
    $lastedu=$s['lastedu'];
    $dgree=$s['dgree'];
    $bday=$s['bday'];
    $note=$s['note'];
    $fname=$s['fname'];
    $fadd=$s['fadd'];
    $ftel=$s['ftel'];
    $address=$s['address'];
    $vgstone=$s['vgstone'];
    $vgsttwo=$s['vgsttwo'];
    $vgstthree=$s['vgstthree'];
    $vgstfour=$s['vgstfour'];
    $vgstfive=$s['vgstfive'];

    $vgstsex=$s['vgstsex'];
    $vgstseven=$s['vgstseven'];
    $vgsteyt=$s['vgsteyt'];

    $dgstone=$s['dgstone'];
    $dgsttwo=$s['dgsttwo'];
    $dgstthree=$s['dgstthree'];
    $dgstfour=$s['dgstfour'];
    $dgstfive=$s['dgstfive'];

    $dgstsex=$s['dgstsex'];
    $dgstseven=$s['dgstseven'];
    $dgsteyt=$s['dgsteyt'];

    $totalamountdue=$s['totalamountdue'];

?>


<form action="update_three.php" method="post">
 <table  style="width: 35em; background-color: hsl(0,0%,95%); border: 1px solid hsl(0,0%,90%);padding: 6px; text-align: center; font-size: 13px; position:absolute;right:13em; top: 80em; padding-bottom: 2em;" >
>

        <tr><td><input type="hidden" name="number" value="<?echo $number;?>"/></td></tr>
        <tr >
            <td>المستوي<br><input type="text" class="put1" name="level" value="<?echo $level;?>" required />
            </td>
            <td>الإسم رباعي<br><input type="text"  class="put1" name="name" value="<?echo $name;;?>"  required/>
            </td><td>الرقم<br><input type="number" class="put1" name="no" value="<?echo $no;?>" required/>
            </td>
        </tr>
        <tr>
            <td>هاتف<br><input type="text" class="put1" name="tel" value="<?echo $tel;?>"  />
            </td>
            <td>السكن<br><input type="text"  class="put1" name="address" value="<?echo $address;?>"  />
            </td><td>إسم الفصل<br><input type="text" class="put1" name="class" value="<?echo $class;?>"  required/>
            </td>
        </tr>
        <tr>
            <td>المدرسة السابقة<br><input type="text" class="put1" name="lastedu" value="<?echo $lastedu;?>"/>
            </td>
            <td>مجموع الأساس<br><input type="number"  class="put1" name="dgree" value="<?echo $dgree;?>" />
            </td><td>تاريخ الميلاد<br><input type="date" class="put1" name="bday" value="<?echo $bday;?>" />
            </td>
        </tr>
        <tr>
            <td>هاتف<br><input type="text" class="put1" name="ftel" value="<?echo $ftel;?>" />
            </td>
            <td>السكن<br><input type="text"  class="put1" name="fadd" value="<?echo $fadd;?>" />
            </td><td>إسم ولي الأمر<br><input type="text" class="put1" name="fname" value="<?echo $fname;?>"/>
            </td>
        </tr>
        <tr>
            <td>ملحوظة<br><input type="text" class="put1" name="note" value="<?echo $note;?>" />
            </td>
            <td>عدد الدفعات المالية<br><input type="number"  class="put1" name="numbergst" value="<?echo $numbergst;?>" />
            </td><td>المبلغ المقرر<br><input type="number" class="put1" name="amountmgrer" value="<?echo $amountmgrer;?>" />

            </td>
        </tr>

        <input type="submit" class="save" value="حفظ التعديلات" style="left: 35em; position: absolute; top: 101em; width: 9em; height: 3em;">

    </table>
</form>
<form action="update_gst_three.php" method="post">
    <table  style="width: 30em; background-color: hsl(0,0%,95%); border: 1px solid hsl(0,0%,90%);padding: 6px; text-align: center; font-size: 13px; position:absolute;left:4em; top: 80em; padding-bottom: 2em;" >
        <tr><td> <input type="hidden" name="number" value="<?echo $number;?>"></td></tr>
        <tr><td> تاريخة</td> <td>قيمتة </td><td>الدفعية</td></tr>

        <tr><td><input type="text" class="put" name="dgstone" value="<? echo $dgstone;?>"/></td><td><input type="number" class="put" name="vgstone" value="<? echo $vgstone;?>"/></td><td>الأولي</td></tr>
        <tr><td><input type="text" class="put" name="dgsttwo" value="<? echo $dgsttwo;?>"/> </td><td><input type="number" class="put" name="vgsttwo" value="<? echo $vgsttwo;?>"/></td><td>الثانيه</td></tr>
        <tr><td><input type="text" class="put" name="dgstthree" value="<? echo $dgstthree;?>"/></td> <td><input type="number" class="put" name="vgstthree" value="<? echo $vgstthree;?>"/></td><td>الثالثه</td></tr>
        <tr><td><input type="text" class="put" name="dgstfour" value="<? echo $dgstfour;?>"/> </td><td><input type="number" class="put" name="vgstfour" value="<? echo $vgstfour;?>"/> </td><td>الرابعه</td></tr>
        <tr><td><input type="text" class="put" name="dgstfive" value="<? echo $dgstfive;?>"/></td> <td><input type="number" class="put" name="vgstfive" value="<? echo $vgstfive;?>"/></td><td>الخامسه</td></tr>
        <tr><td><input type="text" class="put" name="dgstsex" value="<? echo $dgstsex;?>"/></td> <td><input type="number" class="put" name="vgstsex" value="<? echo $vgstsex;?>"/></td><td>السادسه</td></tr>
        <tr><td><input type="text" class="put" name="dgstseven" value="<? echo $dgstseven;?>"/> </td><td><input type="number" class="put" name="vgstseven" value="<? echo $vgstseven;?>"/> </td><td>السابعه</td></tr>
        <tr><td><input type="text" class="put" name="dgsteyt" value="<? echo $dgsteyt;?>"/></td> <td><input type="number" class="put" name="vgsteyt" value="<? echo $vgsteyt;?>"/></td><td>الثامنه</td></tr>

        <tr> <td></td><td><? echo $totalamountdue;?></td><td>الإجمالي</td></tr>

    </table>

    <input type="submit" class="save" value="حفظ التعديلات" style="left: 5em; position: absolute; top: 104em; width: 9em; height: 3em;">

</table>

</form>

</div>
</center>
<div class="footer" style="top:103em"></div>
</body></html>