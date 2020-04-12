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
<html>
<head>

    <title>business | Inventory</title>

    <meta charset="utf-8">
    <link rel="icon" type="image/icon" href="../Public/Mybusiness_img/moiz.png" >
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
    <div id="left-icon">
        <a href="../My.php"> <i class="icon icon-switch"></i></a>

         <i class="icon icon-menu"></i>

    </div>
<div id="right-icon"><?php echo $_SESSION['visitor_name'];?><i class="icon icon-user"></i></div>

    <nav>

        <?php
            $obj = new Links();
            $obj->Inventory_pc_links();
        ?>

    </nav>

</section>

<nav class="logo">
    <table>
        <?php
            $obj = new Links();
            $obj->Inventory_tab_phone_links();
        ?>
    </table>

</nav>




<section class="container">

    <label>

		<div class="icon icon-embed"></div>

        إضافه | المخزون   </label>


<form action="Inventory.php" method="post">

<br>
    <article id="col-1" class="one">

        <label>
		          <div class="icon icon-embed"></div>
            إختيار مجموعه
            </label>

<br><br>

        <label > إختيار المجموعه

            <select name="group_id" class="select" required="">
                <option></option>
                <?php $obj = new inventory(); $obj->Description();?>
            </select>
        </label>

        <label> الكميه
            <input type="number"  min="1" name="item_total" required="">
        </label>


        <label > قيمه الضريبه

            <input  type="number"  min="1" name="tax" value="" >

        </label>


 </article>


    <article id="col-4">

        <label>
            قيمه الخصم
            <input type="number" min="1" name="discount" value=""  >
        </label>
        <label>
            مصاريف أخري
            <input type="number" min="1" name="other" value=""  >
        </label>
        <label>
            <div id="moiz"></div>


        </label>
        <label> التاريخ
            <input type="text" name="t_date" value="<?php echo date("y,m,d");?>" required="">
        </label>

        <label>
            <input type="submit" name="inventory_old"  onclick="return conf(); "  value="إضافه مخزون">
        </label>
        <br>
        <label>
            <input type="checkbox" name="RE_Inventory" id="v_sale">
            مردودات المشتريات

        </label>
        <label>
            <input type="submit"  id="s_sale" onclick="return conf();" value="م | المشتريات">
        </label>
</article>
    </form>


    <form action="Inventory.php" method="post">

<article id="col-2">
    <label>مجموعــه جديده
        <div class="icon icon-embed"></div>

    </label>
    <br><br>

    <label >إسم الصنف

        <input  type="text" name="item" required="">

    </label>

    <label > نوع الصنف
        <input  type="text" name="item_type" required="">

    </label>


    <label > إسم المجموعه
        <input  type="text" name="group_name" required="">

    </label>

    <label> مواصفات المجموعه
        <input type="text" name="group_description" required="">
    </label>
    <label> سعر شراء الوحده
        <input type="number"  min="1" name="perches_price_unite">
    </label>

</article>
<article id="col-3">

    <label> الكميه
        <input type="number" min="1" name="item_total" required="">
    </label>

    <label > قيمه الضريبه

        <input  type="number"  min="1" name="tax" value="" >

    </label>

    <label>
        قيمه الخصم
        <input type="number" min="1" name="discount" value=""  >
    </label>
    <label>
        مصاريف أخري
        <input type="number" min="1" name="other" value=""  >
    </label>
    <label>
        <div id="moiz"></div>


    </label>


    <label> التاريخ
    <input type="text" name="t_date" value="<?php echo date("y,m,d");?>" required="">
    </label>
    <label>
        <input type="submit" name="inventory_new"  onclick="return conf();" value="مخزون جديــد ">
    </label>

       </article>

</form>

<!------------------------------------------------->

</section>
</body>
</html>