<?php

    session_start();
    if(! isset ($_SESSION['Company'] )){
       header("location:../My.php");
    }
    include("../Controllers/Links.php");

?>

<!DOCtype html>

<head>
    <link rel="icon" type="image/icon" href="../Public/Mybusiness_img/moiz.png" >
    <title>business | Manager-Home</title>
    <meta charset="utf-8">
    <script src="../Public/Mybusiness_js/jquery-1.8.3.min.js"></script>
    <script src="../Public/Mybusiness_js/Mybusiness.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Icon_font/demo.css" type="text/css">
    <link rel="stylesheet" href="../Public/Mybusiness_css/Icon.css" type="text/css">
    <link rel="stylesheet" href="../Public/Mybusiness_css/All.css" type="text/css">
    <link rel="stylesheet" href="../Public/Mybusiness_css/Rwd.css" type="text/css">
</head>

<body>


<nav id="top">
    <div id="address">
        <var>My</var>Business</div>

    <div class="icon icon-office"></div>

    <div id="comp_name"><?php echo $_SESSION['company_name'];?> </div>

</nav>

<div id="ali"></div>

<section class="header">
    <div id="left-icon">

        <i class="icon icon-menu"></i>

        <a href="../My.php">  <i class="icon icon-switch"></i>  </a>

    </div>
    <div id="right-icon">
        <i class="icon icon-user"></i><?php echo $_SESSION['visitor_name'];?></div>


</section>
<nav class="logo">
    <table border="0">

        <?php
            $obj = new Links();
            $obj->Inventory_tab_phone_links();
        ?>

</table>

</nav>

<section class="container-big">

<label>
    <input type="hidden" id="session" value="<?php echo $_SESSION['company_name'];?>">
</label>
    <article class="col">

        <a href="Sale_Items.php"><div class="icon icon-move-up"></div></a>
        <samp>المبيعات</samp>
    </article>

    <article class="col">
        <div id="azz_jxs"><div class="azzo"></div> </div>

        <a href="Resive-Orders-Sale.php"> <div class="icon icon-spinner11"></div></a>
        <samp>طلبات البيع</samp>

    </article>

    <article class="col">

        <a href="Reports_Sale.php"> <div class="icon icon-file-text"></div></a>
        <samp>فواتير المبيعات</samp>

    </article>


    <article class="col">

        <a href="purchase_order.php"><div class="icon icon-redo"></div></a>
        <samp>تقديم طلبات شراء</samp>

    </article>

    <article class="col">

        <a href="Inventory.php"><div class="icon icon-stack"></div></a>
        <samp>المخزون</samp>

    </article>

    <article class="col">

        <a href="Reports-Inventory.php"> <div class="icon icon-file-text2"></div></a>
        <samp>تقارير المخزون</samp>

    </article>



    <article class="col">

        <a href="Resive-Orders.php"><div class="icon icon-undo"></div></a>
        <samp> عرض طلبات شراء</samp>

    </article>
    <article class="col">

        <a href="general_gournal.php"><div class="icon icon-books"></div></a>
        <samp>دفتر اليوميه</samp>
     </article>


    <article class="col">

        <a href="Chart_of_Accounts.php"> <div class="icon icon-book"></div></a>
        <samp>دليل الحسابات</samp>

    </article>

    <article class="col">

        <a href="Finance-Menu.php"> <div class="icon icon-stats-bars"></div></a>
        <samp>قوائم ماليه</samp>

    </article>








    <article class="col" id="H-H">

        <a href="Company.php"> <div class="icon icon-office"></div></a>

        <samp>الشركه</samp>
    </article>

    <article class="col" id="H-H">
        <a href="Employee.php"><div class="icon icon-users"></div></a>
        <samp>الموظفين</samp>
    </article>
</section>
</body>
</html>