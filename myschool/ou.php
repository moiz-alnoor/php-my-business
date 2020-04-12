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
    <title>غياب # مدرستي</title>
</head>
<body>
<body dir="ltr">

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


<div class="header"></div>
<center>
<div class="asaid" style="height: 50em;">
<br><br><br>
        <form action="insert_ou.php" method="post">
            <table style="text-align: right;background-color: hsl(0,0%,95%); border: 1px solid hsl(0,0%,90%); border-radius: 0px; padding: 1em; direction: rtl;">
            <tr> 
                    <td>الرقم<br> <input type="number"  class="put1" value="" name="no" required /></td>
                    <td>الإسم <br><input type="text"  class="put1" value="" name="name"   required /></td>


                    <td>المستوي<br><select name="level"   class="put1" required />
            <option value=""></option>
            <option value="المستوي الأول">المستوي الأول</option>
            <option value="المستوي الثاني">المستوي الثاني</option>
            <option value="المستوي الثالث">المستوي الثالث</option>

        </select>
                    <td>إسم الفصل<br><input type="text"  class="put1" value="" name="class"  required /></td>
                    </tr><tr>
 
                    <td> التاريخ<br><input type="date" class="put1" name="date" value="" required /></td>
        
                     <td>  مدة الغياب  <br><input type="text"  class="put1" value="" name="time"  required /></td>

                    <td>  مدة الغياب  <br><input type="text"  class="put1" value="" name="time"  required /></td>
                    <td> علة الغياب<br><input type="text"  class="put1" value="" name="why" required /></td>

        </tr>
        <input type="submit"  id="ok" value=" غــياب" name="" style="height: 2.8em;top:16.5em; left:20em; position: absolute; "></td>
        
            </table>

    </form>
<br><br><br><br>
<form action="ou.php" method="post">
    <input type="submit"  id="ok" value="إستعلام" name=" " style="height: 2.7em;left:55em; position: absolute;top:23em;">
    <select name="level"   class="put" required style="height: 2.9em;width: 15em; left:67.3em; position: absolute;" >
        <option value=""></option>
        <option value="المستوي الأول">المستوي الأول</option>
        <option value="المستوي الثاني">المستوي الثاني</option>
        <option value="المستوي الثالث">المستوي الثالث</option>

    </select>

</form>
<br><br>
    <table style="font-family:inherit;background-color: #c2e1f5; border-radius: 15px; padding: 1em; font-size: 15px;text-align: center; color: blue;" border="0">

        <tr style="color: black; "><td> حزف </td><td>تعديل</td><td>التاريخ</td><td>مدة الغياب</td><td>علة الغياب</td><td>إسم الفصل</td><td>المستوي</td><td>الأسم</td><td>الرقم</td></tr>

        <?

            include("conn.php");
            $a=$_POST['level'];

            $m=mysql_query("select * from ou where level ='$a'");

            $l=mysql_fetch_array($m);
            $date=$l['date'];
            $no=$l['no'];
            $name=$l['name'];
            $level=$l['level'];
            $class=$l['class'];
            $why=$l['why'];
            $time=$l['time'];
            $number=$l['number'];

            do{?>
                <tr>
                    <td>
                        <form name="h" action="delete_ou.php" method="post" ">
                        <input type="hidden" name="x" value="<? echo $number;?>" >
                        <input type="hidden" name="name" value="<? echo $name;?>" >
                        <input type="submit" id="edit"   value="حزف" style="margin-top: 1em;  height: 2em;">
                        </form>
                    </td>


              <form  action="edite_ou.php" method="post" >

                        <td>   <input type="submit" id="edit"   value="تعديل" style="margin-top: 1px;  height: 2em;"> </td>

                        <input type="hidden" name="number" value="<? echo $number;?>" style=" height: 2em;" >

                  <td> <input type="text" class="put" name="date" value="<? echo $date;?>" style=" height: 2em;"/></td>

                    <td> <input type="text" class="put" name="time" value="<? echo $time;?>" style=" height: 2em;"/></td>

                    <td> <input type="text" class="put" name="why" value="<? echo $why;?>" style=" height: 2em;"/></td>
                    <td> <input type="text" class="put" name="class" value="<? echo $class;?>" style=" height: 2em;"/></td>
                    <td> <input type="text" class="put" name="level" value="<? echo $level;?>" style=" height: 2em;"/></td>
                    <td> <input type="text" class="put" name="name" value="<? echo $name;?>" style=" height: 2em;"/></td>
                    <td> <input type="text" class="put" name="no" value="<? echo $no;?>" style="width: 2.8em; height: 2em;"/></td>

              </form>

                </tr>


            <? }while ($l=mysql_fetch_array($m));?>


    </table>




</div>
</center>
</body></html>