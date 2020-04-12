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
    <div id="right-icon"><a href=""> </a> </div>

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
<section class="container">
    <!------------>
<labe>
    <div class="icon icon-embed">
</div>  تقديم | طلب الشراء
</labe>
 <br> <br>
    <form action="purchase_order.php" method="post">

    <article id="col-1" class="one">


            <label>مجموعه موجوده
                <div class="icon icon-embed"></div>

            </label>
            <br><br>

        <label> إسم الطلب
            <input type="text" name="order_name" required="">
        </label>
            <label > إختيار المجموعه

                <select name="group_id" class="select" required="">
                    <option></option>
                    <?php $obj = new inventory(); $obj->Description();?>
                </select>
            </label>




    </article>


    <!------------>


    <article id="col-2">


        <label> الكميه
            <input type="number"  min="1" name="item_total" required="">
        </label>

        <label> المورد/شركه
            <select name="company_name" id="select" required="">
                <option></option>
                <?php $obj = new inventory(); $obj->selEct_Company()?>
            </select>
        </label>
        <label> التاريخ
            <input type="text" name="t_date" value="<?php echo date("y,m,d");?>" required="">

        </label>

        <div id="moiz"></div>

            <label>
                <input type="submit" name="order_to" onclick="return conf();" value="طلب شـراء">
            </label>

    </article>

    </form>



    <form action="purchase_order.php" method="post">

        <article id="col-3">
            <label>مجموعــه جديده
                <div class="icon icon-embed"></div>

            </label>
            <br>
<br>

        <label> إسم الطلب
            <input type="text" name="order_name" required="">
        </label>
            <label >إسم الصنف

                <input  type="text" name="item" required="">

            </label>

            <label > نوع الصنف
                <input  type="text" name="item_type"  required="">

            </label>

<!--<label>
    إسم المجموعه


<input type="text" name="group_name" value="" required="">
</label>-->
            <label> مواصفات المجموعه
                <textarea id="textarea" name="group_description" required=""></textarea>
            </label>
        </article>

        <article id="col-4">


            <label> سعر شراء الوحده
                <input type="number" min="1" name="perches_price_unite" value="">
            </label>

            <label> الكميه
                <input type="number" min="1"  name="item_total" required="">
            </label>


            <label> المورد/شركه
                <select name="company_name" id="select" required="">
                    <option></option>
                    <?php $obj = new inventory(); $obj->selEct_Company()?>
                </select>
            </label>


            <label> التاريخ
                <input type="text" name="t_date" value="<?php echo date("y,m,d");?>" required="">
            </label>
            <label>
                <input type="submit" onclick="return conf();" name="order_to" value="طلب شراء ">
            </label>

        </article>

    </form>

    <!------------------------------------------------->

</body>
</html>