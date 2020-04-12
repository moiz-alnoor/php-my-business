<?php
session_start();

    if(!isset($_SESSION['Company']) && !isset ($_SESSION['Inventory'])){

    header("location:../My.php");

    }

    include("../Models/Connect_DB.php");

    include("../Framework/knowledge.php");

    include("../Framework/Inventory.php");

    include("../Controllers/Inventory.php");

    include("../Models/Inventory.php");

    include("../Controllers/Links.php");

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
    <div id="comp_name"><?php echo $_SESSION['company_name'];?></div>
</section>

<section class="header">
    <div id="left-icon"><a href="../My.php"> <i class="icon icon-switch"></i> </a> <i class="icon icon-menu"></i> </div>
    <div id="right-icon">  <?php echo $_SESSION['visitor_name'];?><i class="icon icon-user"></i>  </div>


    <nav>

            <?php   $obj = new Links();
                     $obj->Inventory_pc_links();?>

    </nav>
</section>
<div class="know"></div>
<nav class="logo">

    <?php   $obj = new Links();
        $obj->Inventory_tab_phone_links();
    ?>


</nav>
    <!------------------------------------------------->
</section>
<section class="container">
    <label>

   <div class="icon icon-embed">
    </div>حزف - أستلام | طلب الشراء
    </label>
     <br>
    <br>
    <form action="Resive-Orders.php" method="post">

        <article id="search">

            <label>

                <select  id="s" name="order_id" class="input-search" required="">
<option value=""></option>
                    <?php  $obj = new inventory(); $obj->selEct_Order_from();?>

                </select>


            </label>

        </article>

        <article id="search">

            <label>
                <input type="image"  id="img-search" src="../Public/Mybusiness_img/wew.png">
            </label>


        </article>
    </form>

</section>

<section class="container">

    <form action="Resive-Orders.php" method='post'>

            <article id='col-2'>

                <label> إسم الطلب
                <?php

                       class V_Orders extends  inventory {

                        public  function Select(){

                       $obj = new inventory();
                       $obj->Order_from();
                ?>

                    <input type="hidden" name="order_id" value="<?php echo $obj->_order_id;?>">
                    <input type="hidden" name="group_id" value="<?php echo $obj->_group_id;?>">
                <input type="text" name="order_name" value="<?php echo $obj->_order_name;?>" required="">

            </label>

            <label> إسم الصنف
                <input type="text" name="item" value="<?php echo $obj->_item_name;?>" required="">
            </label>

                <label>نوع الصنف
                    <input type="text" name="item_type" value="<?php echo $obj->_item_type;?>" required="">
                </label>


            </article>

        <article id="col-1">
            <label> سعر شراء الوحده
                <input type="text" name="perches_price_unite" placeholder="0.000" value="<?php echo $obj->_perches_price_unite;?>">
            </label>
            <label> الكميه
                <input type="number"  min="1" name="item_total" value="<?php echo $obj->_item_total?>">

            </label>
            <label>إسم المجموعه
                <input type="text" name="group_name" value="<?php echo $obj->_group_name ?>" required="">
            </label>

        </article>
        <article id="col-3">

            <label>
                المواصفات
                <input  type="text" name="group_description" id="textarea" value="<?php echo $obj->_group_description?>" required="">

            </label>

            <label>
                قيمه الخصم
                <input type="number" min="1" name="discount" value=""  >
            </label>
            <label > قيمه الضريبه

                <input  type="number"  min="1" name="tax" value="" >

            </label>

        </article>
        <article id="col-4">

            <label>
                مصاريف أخري
                <input type="number" min="1" name="other" value=""  >
            </label>

            <label>
                تاريخ تقديم الطلب

                <input type='text' name="date" value="<?php echo $obj->_t_date?>" required="">

            </label>

            <label>
                تاريخ إستلام الطلب
                <input type='text' name="t_date" value="<?php echo date("y,m,d");?>">
            </label>

            <label>
                <input type="submit" onclick="conf();" value="إستلام الطلب"  name="resive">
            </label>
            <label>

                <input type="submit" onclick="return conf();" value="حزف الطلب"     name="dell">

            </label>

        </article>

        <?php
                 }
            }


            $obj = new V_Orders();
            $obj->Select();


        ?>

    </form>

</section>

</body>
</html>