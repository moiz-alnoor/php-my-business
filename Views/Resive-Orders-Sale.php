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
<html>

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

            <?php
                     $obj = new Links();
                     $obj->Inventory_pc_links();
            ?>

    </nav>
</section>
<div class="know"></div>
<nav class="logo">

    <?php

        $obj = new Links();
        $obj->Inventory_tab_phone_links();
    ?>


</nav>
    <!------------------------------------------------->
<section class="container">
    <label>

   <div class="icon icon-embed">

   </div>حزف - بيع | طلب البيع

    </label>
     <br>
    <br>
    <form action="Resive-Orders-Sale.php" method="post">

        <article id="search">

            <label>

                <select  id="s" name="order_id" class="input-search" required="">
<option value=""></option>
                    <?php $obj = new inventory(); $obj->selEct_Order_to();?>

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

    <form action="Resive-Orders-Sale.php" method='post'>

            <article id='col-2'>
                <label > إختيار المجموعه
                    <div class="icon icon-embed"></div>
                </label>
                <br/>
                <br/>

                <label>

                    إسم المجموعه
                    <select name="group_id" class="select" required="">

                        <option value=""></option>
                        <?php
                            $obj = new inventory();
                            $obj->Description();
                        ?>
                    </select>

                </label>

                    <?php
                        class V_Orders extends  inventory {

                        public  function Select(){

                        $obj = new inventory();
                        $obj->Order_To();
                    ?>

        </article>
        <article id="col-3">


            <label> المشتري
                <input type="text"  name="purchaser" value="<?php echo $obj->_company_name_from;?>" required="">
            </label>

            <label> الكميه
                <input type="number" min="1" name="item_total" value="<?php echo $obj->_item_total?>" required="">

            </label>
            <label> سعر  بيع الوحده
                <input type="text" name="perches_price_unite" placeholder="0.000" value="<?php echo $obj->_perches_price_unite;?>" required="">

            </label>

        </article>

        <article id="col-1">

            <label > قيمه الضريبه

                <input  type="number"  min="1" name="tax" value="" >

            </label>



            <label>
                قيمه الخصم
                <input type="number" min="1" name="discount" value=""  >
            </label>

            <div id="moiz"></div>

			</article>
        <article id="col-4">
            <label>
                مصاريف أخري
                <input type="number" min="1" name="other" value=""  >
            </label>


            <label>
                تاريخ تقديم الطلب

                <input type='text' name="date" value="<?php echo $obj->_t_date?>">

            </label>

            <label>
                تاريخ إستلام الطلب
                <input type='text' name="t_date" value="<?php echo date("y,m,d");?>" required="">
            </label>

            <label>
                <input type="submit" onclick="conf();" value="بيع"  name="resive">
            </label>
            <br>

            <label>

                <input type="submit" onclick="return conf();" value="حزف "     name="dell">

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