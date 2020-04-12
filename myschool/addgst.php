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
    <title>دفع قسط#مدرستي</title>
</head>
<body>

 <div id="top" >www.myschool.com </div>
 <div class="img">
 <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 4em;">
  <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 7em;">
   <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right:10em;">
 </div>
 </div>
    <?
        include("conn.php");
        $a=mysql_query("select * from moiz");
        $qq=mysql_fetch_array($a);
        $ss=$qq['name'];


    ?>
    <div class="s" ><? echo "مرحبا  ..  ".$ss; ?></div>
<center>
<div class="header"  >
</div>
<div class="asaid" style=" height:54em; "> 

<form action="addgst.php" method="post" style="left:37em; position: absolute; top: 2em;">
    <input type="submit"  id="ok" value="إستعلام" name="">

    <input type="text"  class="put" value="" name="a"  placeholder="رقم#أولي"required style="height: 2.9em; width: 15em;"/>


</form>
<?
    include("conn.php");
    $a=$_POST['a'];
    $q=mysql_query("select * from student where no ='$a'");
    $s=mysql_fetch_array($q);
    $number=$s['number'];
    $name=$s['name'];
    $class=$s['class'];

    $no=$s['no'];
?>

<form action="new_gst.php" method="post">
    <table style="position: absolute;top: 6em; left:20.3em; text-align: right; font-size: 13px;background-color: hsl(0,0%,95%); padding: 9px; padding-bottom: 1.5em; border: 1px solid hsl(0,0%,90%); ">
        <tr><td><input type="hidden" name="number" value="<?echo $number;?>"></td></tr>
        <tr><td>إسم الفصل<br><input type="text" class="put1" name="class" value="<?echo $class;?>" />
            </td>
        <td>الإسم<br><input type="text"  class="put1" name="name" value="<?echo $name;;?>"  /></td>
        <td>الرقم<br><input type="text" class="put1" name="no" value="<?echo $no;?>" /></td>
        </tr>
        <tr>

            <td>ترتيب الدفعة المالية<br>
                <select name="t_new_gst"  class="put1" required>
                    <option value=""></option>
					<option value="1">الأولي</option>
                    <option value="2">الثانيه</option>
                    <option value="3">الثالثه</option>
                    <option value="4">الرابعه</option>
                    <option value="5">الخامسه</option>
                    <option value="6">السادسه</option>
                    <option value="7">السابعه</option>
                    <option value="8">الثامنه</option>
                </select>

            </td>
            <td>تاريخ الدفع<br><input type="date"  class="put1" name="d_new_gst" value=" " required/>
            </td><td>القيمة المدفوعة<br><input type="number" class="put1" required name="v_new_gst" value=""/>

            </td>
        </tr>
<tr>    <input type="submit" class="save" value="دفع القسط" style="left: 21em; position: absolute; top: 17em; width: 7em; height: 2.5em;"></tr>

</form>






<form action="addgst.php" method="post" >
    <input type="submit"  id="ok" value="إستعلام" name="" style="position: absolute; top: 22.6em; left: 44.3em; height: 2.6em; width: 5em;"/>

    <input type="text"  class="put" value="" name="b"  placeholder="رقم#تانية" required style="position: absolute; top: 25em; left: 55em; height: 3em; width: 15em;"  />
    </form>

<?
    include("conn.php");
    $b=$_POST['b'];
    $q=mysql_query("select * from student_two where no ='$b' or name ='$b'");
    $s=mysql_fetch_array($q);
    $number=$s['number'];
    $name=$s['name'];
    $class=$s['class'];

    $no=$s['no'];
?>

<form action="new_gst_two.php" method="post">
    <table style="position: absolute;top: 27em; left: 20.2em; text-align: right; font-size: 13px;  background-color: hsl(0,0%,95%); padding: 9px; padding-bottom: 1.5em;  border: 1px solid hsl(0,0%,90%);">
        <tr><td><input type="hidden" name="number" value="<?echo $number;?>"></td></tr>
        <tr><td>إسم الفصل<br><input type="text" class="put1" name="class" value="<?echo $class;?>" />
            </td>
            <td>الإسم<br><input type="text"  class="put1" name="name" value="<?echo $name;;?>"  /></td>
            <td>الرقم<br><input type="text" class="put1" name="no" value="<?echo $no;?>" /></td>
        </tr>
        <tr>

            <td>ترتيب الدفعة المالية<br>
                <select name="t_new_gst"  class="put1" required>
<option value=""></option>                  
				  <option value="1">الأولي</option>
                    <option value="2">الثانيه</option>
                    <option value="3">الثالثه</option>
                    <option value="4">الرابعه</option>
                    <option value="5">الخامسه</option>
                    <option value="6">السادسه</option>
                    <option value="7">السابعه</option>
                    <option value="8">الثامنه</option>
                </select>

            </td>
            <td>تاريخ الدفع<br><input type="date"  class="put1" name="d_new_gst" value=" " required/>
            </td><td>قيمة الدفعة المالية<br><input type="number" class="put1" required name="v_new_gst" value=""/>

            </td>
        </tr>
        <tr>    <input type="submit" class="save" value="دفع القسط" style="left: 21em; position: absolute; top: 37.4em; width: 7em; height: 2.5em;"></tr>

</form>

<form action="addgst.php" method="post" >
    <input type="submit"  id="ok" value="إستعلام" name="" style="position: absolute; top: 43.3em; left: 44.3em; height: 2.6em; width: 5em;"/>

    <input type="text"  class="put" value="" name="c"  placeholder="رقم#تالتة" required style="position: absolute; top: 48em; left: 55em; height: 3em; width: 15em;"  />
</form>

<?
    include("conn.php");
    $c=$_POST['c'];
    $q=mysql_query("select * from student_three where no ='$c' or name ='$c'");
    $s=mysql_fetch_array($q);
    $number=$s['number'];
    $name=$s['name'];
    $class=$s['class'];

    $no=$s['no'];
?>

<form action="new_gst_three.php" method="post">
    <table style="position: absolute;top: 49em; left: 20.2em; text-align: right; font-size: 13px;  background-color: hsl(0,0%,95%); padding: 9px; padding-bottom: 1.5em; border: 1px solid hsl(0,0%,90%);">
        <tr><td><input type="hidden" name="number" value="<?echo $number;?>"></td></tr>
        <tr><td>إسم الفصل<br><input type="text" class="put1" name="class" value="<?echo $class;?>" />
            </td>
            <td>الإسم<br><input type="text"  class="put1" name="name" value="<?echo $name;;?>"  /></td>
            <td>الرقم<br><input type="text" class="put1" name="no" value="<?echo $no;?>" /></td>
        </tr>
        <tr>

            <td>ترتيب الدفعة المالية<br>
                <select name="t_new_gst"  class="put1" required>
				  <option value=""></option>
                    <option value="1">الأولي</option>
                    <option value="2">الثانيه</option>
                    <option value="3">الثالثه</option>
                    <option value="4">الرابعه</option>
                    <option value="5">الخامسه</option>
                    <option value="6">السادسه</option>
                    <option value="7">السابعه</option>
                    <option value="8">الثامنه</option>

                </select>

            </td>
            <td>تاريخ الدفعة المالية<br><input type="date"  class="put1" name="d_new_gst" value=" " required/>
            </td><td>قيمة الدفعة المالية<br><input type="number" class="put1" required name="v_new_gst" value=""/>

            </td>
        </tr>
        <tr>    <input type="submit" class="save" value="دفع القسط" style="left: 21.5em; position: absolute; top: 59em; width: 7em; height: 2.5em;"></tr>

</form>

</table>
</div>


<div class="footer" style="top:57em;"></div>
</body>
</html>