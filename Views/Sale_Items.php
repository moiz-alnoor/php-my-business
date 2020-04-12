<?php
session_start();



    if(!isset($_SESSION['Sale']) && !isset($_SESSION['Company'])){

    header("location:../My.php");

}

    include("../Models/Connect_DB.php");

    include("../Controllers/Links.php");

    include("../Framework/knowledge.php");

    include("../Framework/Inventory.php");

    include("../Controllers/Inventory.php");

    include("../Models/Sale.php");

?>

<!doctype html>

<html>

<head>

    <title>business | Sale</title>
    <link rel="icon" type="image/icon" href="../Public/Mybusiness_img/moiz.png" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
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

         <a href="../My.php"><i class="icon icon-switch"></i></a>


         <i  class="icon icon-menu"></i>

    </div>

    <div id="right-icon">
        <?php echo $_SESSION['visitor_name'];?><i class="icon icon-user"></i></div>
    <nav>

        <?php

            $obj = new Links();
            $obj->Inventory_pc_links();
        ?>

    </nav>
</section>


<nav class="logo">

    <?php

        $obj = new Links();
        $obj->Inventory_tab_phone_links();
    ?>


</nav>


<section class="container">

    <div class="t">
        <div class="icon icon-embed"></div>
    <div class="azzo"></div>| طلبات البيع

    </div>

</section>



<section class="container">
    <label>
        <input type="hidden" id="session" value="<?php echo $_SESSION['company_name'];?>">
    </label>

    <form action="Sale_Items.php" method="post">

        <article id="col-1" class="one">

       
<label>
    <br>
    <label > إختيار المجموعه
        <div class="icon icon-embed"></div>
    </label>
<br><br>
    <label>
    إسم المجموعه         <select name="group_id" class="select" >
                   <option value=""></option>
                <?php

                    $obj = new inventory();
                    $obj->Description();
                ?>
                </select>

            </label>


        </article>
    <article id="col-3">


           <label> المشتري
               <input type="text"  name="purchaser" value="" required="">
           </label>

               <label> الكميه
                   <input type="number" min="1" name="item_total" value="" required="">
               </label>


       </article>



    <article id="col-4">

        <label >سعر بيع الوحده

            <input  type="number"  min="1" name="perches_price_unite" value=""  required="">

        </label>

        <label > قيمه الضريبه

            <input  type="number"  min="1" name="tax" value="" >

        </label>  		<label>
            <div id="moiz"></div>
        </label>

       </article>

    <article id="col-1">

        <label>
             قيمه الخصم
            <input type="number" min="1" name="discount" value=""  >
        </label>
        <label>
            مصاريف أخري
            <input type="number" min="1" name="other" value=""  >
        </label>

        <label>
    التاريخ
    <input type="date" name="t_date" value="<?php echo date("y,m,d")?>" required="">
</label>
<br>
<br>
<label>

    <input  type="submit" onclick="return conf();" name="Sale"   value="بيــــع">

    </label>


    </article>



</section>
<script src="../Public/Mybusiness_js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../Public/Mybusiness_js/Mybusiness.js" type="text/javascript"></script>

</body>
</html>
