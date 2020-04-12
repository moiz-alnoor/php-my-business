<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>تقاريـــــر</title>
    <link rel="stylesheet" type="text/css" href="rep.css">
    <!-- <link rel="stylesheet" type="text/css" href="sch.css">-->
</head>
<body>
<div class="header">
    <div class="p" >بن رشــد</div>
    <div class="s" >أن تعرف أكثــر</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<form action="report.php" method="post">

    <input type="text" name="a" value="">

    <input type="submit" value="ok" name="">
</form>



<? include("conn.php");

    $a=$_POST['a'];

    $m=mysql_query("select *from student where tel='$a' or class_n='$a'");


    $f=mysql_fetch_array($m);
    $b=$f['no'];
    $c=$f['level'];
    $d=$f['name'];
    $e=$f['amount_d'];
    $z=$f['cl'];
    $g=$f['amount_r'];
    $h=$f['tel'];
    $i=$f['date'];
    $j=$f['thinks'];
    do {?>
<table border="3" bgcolor="blue" >

    <tr>


        <td><? echo $c; ?></td>
        <td><input type="text" value=" <? echo $d; ?>" name=""/> </td>
        <td><? echo $e; ?></td>
        <td><? echo $z; ?></td>
        <td><? echo $g; ?></td>
        <td><? echo $h; ?></td>
        <td><? echo $i; ?></td>

        <td><input type="text" value=" <? echo $j; ?>" name=""/> </td>

        <td>
            <form action="delete.php" method="post">
                <input type="hidden" name="x" value="<?echo $h?>">
                <input type="hidden" name="w" value="<?echo $a?>">
                <input type="submit" value="ok" name="">

            </form>
        </td>
        <td>
            <form action="edite.php" method="post">

                <input type="hidden" name="r" value="<?echo $b?>"/>
                <input type="submit" value="ok" name=""/>


            </form>
        </td>

    </tr>
    <? }while ($f=mysql_fetch_array($m)) ;?>
</table>
</form>



</body>
</html>