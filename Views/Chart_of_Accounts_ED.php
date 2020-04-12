<?
    include("../Controllers/c_chart_of_account.php");
?>
<html>
<head>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/mybusiness.js"></script>
    <link rel="stylesheet" href="css/business.css" type="text/css">
    <meta charset="utf-8">
</head>
<body>
<div id="url">www.Mybusiness.com</div>

<br><br>
<center>
    <form action="chart_of_accounts_opreations.php" method="post">
         <select id="list" name="item_name">
            <option value=""></option>
             <?

                $mysqli = new mysqli("localhost","root","123","mybusiness");
                $query = $mysqli->query("select * from chart ");
                while ($name = $query->fetch_array()){?>
                    <option  value="<?echo $name['account_name'];?>"> <?echo $name['account_name'];?>   </option>
                    <input type="hidden" name="account_id" value="<? echo $name['account_id'];?>"/>

                <?}?>

        </select>
 <input type="submit" name="query" value="إستعلام"/>
    </form>

    <?
    $account_id = $_POST['account_id'];
    $query=$mysqli->query("select * from chart where account_id = '$account_id'");
    $f = $query->fetch_array();
?>
    <form action="chart_of_accounts_opreations.php" method="post">
        <table>
            <tr>

                <td>الرقم<br>
                    <input type="hidden" name="account_id" value="<?echo $f['account_id'];?>" >

                    <input type="number" id="show" name="account_no" value="<?echo $f['account_no'];?>" required/></td>

                <td>النوع<br>
                    <input type="text" id="show" name="account_type" value="<?echo $f['account_type'];?>" required/></td>

                <td>الإسم<br>
                    <input type="text" id="show" name="account_name" value="<?echo $f['account_name'];?>" required/></td>

            </tr>
            <tr>

                <td> الوصف<br>
                    <input type="text" id="show" name="account_desc" value="<?echo $f['account_desc'];?>"></td>

                <td>ملحوظة<br>
                    <input type="text" id="show" name="account_note" value="<?echo $f['account_note'];?>"></td>


            <td>التاريخ<br>
                    <input type="date" id="show"  name="account_date" value="<?echo $f['account_date'];?>" required/>
                </td><td></td></tr>

        </table><br>
        <input type="submit" name="save" value="حفظ التعديل" >
        <input type="submit" name="delete" value="حزف السجل" onclick="return confi();">

    </form>

</body>
</html>