<?

    session_start();
    if(!isset($_SESSION['user_name']))
    {
        header("location:school.php");
        //  include("school.php");
    }
?>

<!DOCTYPE html>
<html>
<head lang="ar">
    <meta charset="UTF-8">
    <title>إحصائية#مدرستي</title>

    <link rel="stylesheet" href="sch.css" type="text/css">
    <link rel="stylesheet" href="esh.css" type="text/css">
</head>
<body>
 <div id="top" >www.myschool.com </div>
 <div class="img">
 <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 4em;">
  <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 7em;">
   <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right:10em;">

 </div>
 <div class="header"></div>
<?
    include("conn.php");
    $a=mysql_query("select * from moiz");
    $qq=mysql_fetch_array($a);
    $ss=$qq['name'];


?>
<div class="s" style="right: 1em; position: absolute;"><? echo "مرحبا  ..  ".$ss; ?></div>
<center>
<div class="asaid" style="height: 40em;">
<?
    include("conn.php");
    //class one
    $a=mysql_query("select *from student ");

    $z= mysql_fetch_array($a);

    //total due
$due1 =0;
    $mtg1=0;
    $mugrer1=0;
//total mtg

    do{

        $due1+=$z['totalamountdue'];

$mugrer1+=$z['amountmgrer'];
        $mtg1=$mugrer1-$due1;

     }while ($z=mysql_fetch_array($a));?>


<d class="arrow_box"  style="position: absolute; left:38em; top:23em; ">المستوي الأول</d>
<table class="tat1 ">
    <tr><td><?echo"&pound  ". $mugrer1;?></td><td>المبلغ المقرر</td></tr>
    <tr><td><?echo"&pound  ". $due1;?></td><td>المبلغ المدفوع</td></tr>
    <tr><td><?echo"&pound  ". $mtg1;?></td><td>المبلغ المتبقي</td></tr>
</table>
<?
//class two
$a=mysql_query("select * from student_two ");

$z= mysql_fetch_array($a);

//total due
$due2=0;
$mtg2=0;
$mugrer2=0;
//total mtg

do{

$due2+=$z['totalamountdue'];

$mugrer2+=$z['amountmgrer'];
    $mtg2=$mugrer2-$due2;

}while ($z=mysql_fetch_array($a));?>
<d class="arrow_box" style="position: absolute; left: 47em; top:5em; ">المستوي الثاني</d>

<table class="tat2 ">
    <tr><td><?echo"&pound  ". $mugrer2;?></td><td>المبلغ المقرر</td></tr>
    <tr><td><?echo"&pound  ". $due2;?></td><td>المبلغ المدفوع</td></tr>
    <tr><td><?echo"&pound  ". $mtg2;?></td><td>المبلغ المتبقي</td></tr>
</table>

<?
//class three
$a=mysql_query("select *from student_three ");

$z= mysql_fetch_array($a);

//total due
$due3 =0;
$mtg3=0;
$mugrer3=0;
//total mtg

do{

$due3+=$z['totalamountdue'];

$mugrer3+=$z['amountmgrer'];
    $mtg3=$mugrer3-$due3;

}while ($z=mysql_fetch_array($a));?>
<d class="arrow_box" style="position: absolute; left: 17em; top:5em; ">المستوي الثالث</d>
<table class="tat3">
    <tr><td><?echo"&pound  ". $mugrer3;?></td><td>المبلغ المقرر</td></tr>
    <tr><td><?echo"&pound  ". $due3;?></td><td>المبلغ المدفوع</td></tr>
    <tr><td><?echo"&pound  ". $mtg3;?></td><td>المبلغ المتبقي</td></tr>
</table>
<?
$totaldue=$due1+$due2+$due3;
    $totamtg=$mtg1+$mtg2+$mtg3;
    $totamugrer=$mugrer1+$mugrer2+$mugrer3;

?>

<d class="arrow_box" style="position: absolute; left:2.5em;; top:23em; ">كل طلاب # مدرستي</d>
<table class="tat4">
    <tr><td><?echo"&pound  ". $totamugrer;?></td><td>المبلغ المقرر</td></tr>
    <tr><td><?echo"&pound  ". $totaldue;?></td><td>المبلغ المدفوع</td></tr>
    <tr><td><?echo"&pound  ". $totamtg;?></td><td>المبلغ المتبقي</td></tr>
</table>


</div>
</center>

</body>
<div class="footer">  </div>
</html>