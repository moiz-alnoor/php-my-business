<?php

    session_start();

    if(!isset($_SESSION['Site'])){

       header("location:../My.php");

    }

    include("../Models/Connect_DB.php");

    include("../Framework/knowledge.php");

    include("../Framework/F_Company.php");

    include("../Controllers/C_Company.php");

    include("../Models/M_Company.php");



?>

<html>

<head>
<title>business | Moiz _ Siddig </title>
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
    <div id="left-icon"> <i class="icon icon-arrow-left2"></i> </div>
    <div id="right-icon">  <?php echo $_SESSION['visitor_name'];?><i class="icon icon-user"></i>  </div>



</section>


<section class="container">

    <label>
        حسابات الشركات
        <div class="icon icon-embed"></div>  <br><br>
    </label>

    <form action="moiz.php" method="post">

        <article id="search">

            <label>

                <select  name="company_key"  class="input-search">

                    <option value=""></option>

                    <?php $obj = new C_Company(); $obj->Select_Company();?>

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

    <form method="post" action="moiz.php">

        <article id="col-1">


            <?php class V_Company extends C_Company{



                public  function sElect(){

                $obj = new C_Company();
                $obj->All_Company();


            ?>

            <label> إسم المدير

                <input type="text" name="manager_name" value="<?php echo $obj->_manager_name?>"   required="">
                <input type="hidden" name="manager_key" value="<?php echo $obj->_manager_key;?>">

            </label>

            <label> إسم الشركه
                <input type="text" name="company_name" value="<?php echo $obj->_company_name;?>" required="">
            </label>




        </article>

        <article id="col-2">
            <label> هاتف
                <input type="text" name="tel" value="<?php echo $obj->_tel;?>">
            </label>

            <label> هاتف +
                <input type="text" name="tel_plus" value="<?php echo $obj->_tel_plus;?>">
            </label>

        </article>
        <article id="col-3">

            <label> البريد الإلكتروني
                <input type="email" name="email" value="<?php echo $obj->_email;?>">
            </label>

            <label id="alawa">
                الدوله
                <input  type="text" name="country"  value="<?php echo $obj->_country;?>">
            </label>
        </article>
        <article id="col-3">


            <label>أكتب  كلمه المرور
                <input type="password" name="password"  value="" required="">
            </label>

            <br><br>
            <label>
                <input type="hidden" name="D_company_key" value="<?php echo $obj->_company_key;?>">
                <input type="submit" name="dell_company" onclick="return conf();" value="حزف حساب الشركه">
            </label>
            <?php
                }
                }

                $o = new V_Company();
                $o->sElect();
            ?>
        </article>
    </form>
</section>






<section class="container">
<br><br>
    <label>
        تعديل بيانات الحساب
        <div class="icon icon-embed"></div>  <br><br>
    </label>
<div class="icon icon-user"></div>
</section>

<section class="container">

    <form action="moiz.php" method="post">

        <article id="col-1">

        <label> كلمه المرور الحاليه
            <input type="password" name="password" value="" required="">
        </label>


    </article>


    <article id="col-1">

        <label> كلمه المرور الجديده
            <input type="password" name="New_password" value="" required="">
        </label>

        <label>
            <input type="submit" name="Edit_password"  onclick="return conf();" value="تعديل بينات الحساب">
        </label>
        </article>
    </form>

    <form action="moiz.php" method="post">

    <article id="col-1">

        <label> البريد الإلكتروني الجديد
            <input type="email"  name="New_email" value="" required="">
        </label>


    </article>


    <article id="col-1">
كلمه المرور الحاليه
        <label> 
            <input type="password"  name="password" value="" required="">
        </label>

        <label> 
            <input type="submit" name="Edit_email"  onclick="return conf();" value="تعديل بينات الحساب">
        </label>
        </article>
</form>
</section>
</body>
</html>