<?php

    session_start();

        if(!isset ($_SESSION['Company'])){
        header("location:../My.php");

    }




    include("../Models/Connect_DB.php");

    include("../Framework/knowledge.php");

    include("../Framework/F_Company.php");

    include("../Controllers/C_Company.php");

    include("../Models/M_Company.php");

    include("../Controllers/Links.php");


?>
<html>

<head>
<title>business | Company</title>
    <link rel="icon" type="image/icon" href="../Public/Mybusiness_img/moiz.png" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="../Public/Mybusiness_js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="../Public/Mybusiness_js/Mybusiness.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../Public/Icon_font/demo.css" type="text/css">
    <link rel="stylesheet" href="../Public/Mybusiness_css/All.css" type="text/css">
    <link rel="stylesheet" href="../Public/Mybusiness_css/Rwd.css" type="text/css">

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
    تعديل بيانات | الشركه 
		<div class="icon icon-embed"></div>  <br><br>
    </label>


    <form action="Company.php" method="post">
        <article id="col-1">
            <label>
                حزف حساب الشركه
                <div class="icon icon-embed"></div>  <br><br>
            </label>

            <label> كلمه المرور
                <input type="hidden" name="D_company_key" value=" " required="">
                <input type="password" name="password" value="" required="">
            </label>

            <label>
                <input type="submit" name="dell_company" onclick="return conf();" value="حزف الحساب">
            </label>


        </article>
        </form>

    <form method="post" action="Company.php">

        <article id="col-1">

         <?php class V_Company extends C_Company{

                public  function sElect(){

                  $obj = new C_Company();
                  $obj->Data_Company();

           ?>

            <label> إسم المدير

                <input type="text" name="manager_name" value="<?php echo $obj->_manager_name;?>" required="">
                <input type="hidden" name="manager_key" value="<?php echo $obj->_manager_key;?>">
            </label>

            <label> إسم الشركه
                <input type="text" name="company_name" value="<?php echo $obj->_company_name;?>" required="" >
            </label>

            <label> هاتف
                <input type="text" name="tel" value="<?php echo $obj->_tel;?>">
            </label>


        </article>

        <article id="col-2">


            <label> هاتف +
                <input type="text" name="tel_plus" value="<?php echo $obj->_tel_plus;?>">
            </label>
            <label> البريد الإلكتروني
                <input type="email" name="New_email" value="<?php echo $obj->_email;?>">
            </label>

            <label> كلمه المرور الجديده
                <input type="password" name="New_password"  value="<?php echo $obj->_password;?>" required="">
            </label>

        </article>
        <article id="col-1">

            <label id="alawa">
                الدوله
                <input  type="text" name="country"  value="<?php echo $obj->_country;?>">
            </label>

            <label id="alawa">
                كلمه المرور الحاليه
                <input  type="password" name="password"  value="<?php echo $obj->_country;?>" required="">
            </label>

            <label>
                <input type="submit" name="comp_edit" onclick="return conf();" value=" تعديل البيانات الشركه" >
</label>
</article>
  



        <?php
            }
            }

            $o = new V_Company();
            $o->sElect();
        ?>
    </form>

</section>

</body>
</html>