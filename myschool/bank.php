<html>
<head>
<meta http-equiv="">
<meta charset="utf-8">
</head>
<body dir="rtl">



<form action="bank_action.php" method="post">
<input type="number" name="client_no" value="" placeholder="رقم العميل" required="required">
<input type="text" name="client_name" value="" placeholder="إسم العميل" required="required">
<input type="number" name="balance_no" value="" placeholder="رقم الحساب" required="required">
<input type="number" name="balance_value" value="" placeholder="الرصيد" required="required">
<input type="submit" value="حفظ">

</form>

<table border="1">
    <?
    include("conn.php");
    $a = mysql_query("select * from  bank ");
        $w = mysql_fetch_array($a);
    do{?>
    <tr></tr>
    <tr>
        <td><?echo $w['key']?></td>
        <td><?echo $w['client_no']?></td>
        <td><?echo$w['client_name']?></td>
        <td><?echo$w['balance_no']?></td>
        <td><?echo$w['balance_value']?></td>
        <td>
            <form action="del.php" method="post">
                <input type="hidden" name="del" value="<?echo $w['client_key']?>">

                <input type="submit"  value="حزف">
</form>
        </td>
        <td>
        <form action="edite.php" method="post">
            <input type="hidden" name="del" value="<?echo $w['client_key']?>">

            <input type="submit"  value="حزف">

            </form>

        </td>

    </tr>
    <?}while ($w = mysql_fetch_array($a));?>

</table>
</body></html>