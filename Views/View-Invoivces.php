<?php

    session_start();
    if(!isset ($_SESSION['company_name'])){
        header("location:../My.php");
    }

    include("../Models/Connect_DB.php");

    include("../Controllers/Links.php");

    include("../Framework/knowledge.php");

    include("../Framework/Inventory.php");

    include("../Controllers/Inventory.php");

    include("../Models/Sale.php");

?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <title>business | Prechese-Order</title>
    <link rel="icon" type="image/icon" href="../Public/Mybusiness_img/moiz.png" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="../Public/Mybusiness_js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="../Public/Mybusiness_js/Mybusiness.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../Public/Icon_font/demo.css" type="text/css">

    <link rel="stylesheet" href="../Public/Mybusiness_css/All.css" type="text/css">
    <link rel="stylesheet" href="../Public/Mybusiness_css/Rwd.css" type="text/css">
    <script type="javascript">

    </script>

</head>
<body>
<section id="top">
    <div id="address"><var>My</var>Business</div>
    <div class="icon icon-office"></div>
    <div id="comp_name"><?echo $_SESSION['company_name'];?></div>
</section>

<section class="header">
    <div id="left-icon"><a href="../Index.php"> <i class="icon icon-switch"></i> </a> <i class="icon icon-menu"></i> </div>
    <div id="right-icon">  <?echo $_SESSION['visitor_name'];?><i class="icon icon-user"></i>  </div>
    <div id="right-icon"><a href=""> </a> </div>

    <nav>

        <?php   $obj = new Links();
            $obj->Inventory_pc_links();?>

    </nav>
</section>

<nav class="logo">

    <?php   $obj = new Links();
        $obj->Inventory_tab_phone_links();
    ?>


</nav>
<section class="container-min">


    <label>
        <div class="icon icon-embed">
        </div>إستخراج | فاتوره
    </label>
<br><br>

       <table class="inv">

           <form action="View-Invoivces.php" method="post">

           <tr><td class="tab_chart1"> إسم الصنف</td><td class="tab_chart1"> نوع الصنف </td><td class="tab_chart1">الكميه المباعه</td><td class="tab_chart1">سعر الوحده</td><td class="tab_chart1">الوصف</td></tr>
    <?
            class V_Chart{


            public  function Accounts_Functions(){

            $obj = new connect_db();

            $R = $obj->query("select * from  invoice_two where company_key = '$_SESSION[company_key]'");
            while($new = mysqli_fetch_array($R)){?>

<tr>


    <input type="hidden" name="group_id" value="<?echo $new['group_id']?>">
    <input type="hidden" name="item_total" value="<?echo $new['item_total']?>">

    <input type="hidden" name="t_date" value="<?echo $new['t_date']?>">
    <input type="hidden" name="perches_price_unite" value="<?echo $new['perches_price_unite']?>"



</tr>
                <tr>

                    <td class="tab_chart"><?echo $new['item']?></td>
                    <td class="tab_chart"><?echo $new['item_type']?> </label></td>
                    <td class="tab_chart"><?echo $new['item_total']?></label></td>
                    <td class="tab_chart"><?echo $new['perches_price_unite']?>  </label></td>
                    <td class="tab_chart"><?echo $new['description']?></td>
                </tr>


            <?}}}
        $obj = new V_Chart();
        $obj->Accounts_Functions();?>

<tr>

    <td><input type="submit"   onclick="return conf();" class="Sa" name="Sale" value="بيع المنتج"></td>

    <td><input type="submit"  class="Re" name="Resale" value="تراجع عن العمليه"></td>

</tr>

</form>

           <tr>
                <td><form action="Sale_Items.php"> <input  type="submit"  name="Resale" value="رجوع "></form></td>
</tr>
       </table>
</section>

</body>
</html>