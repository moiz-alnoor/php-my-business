<?php

session_start();

if(isset($_SESSION['job_type_in'])){
    session_unset($_SESSION['job_type_in']);
}
    if(isset($_SESSION['company_key'])){
        session_unset($_SESSION['company_key']);
    }

    if(isset($_SESSION['Company'])){
        session_unset($_SESSION['Company']);
    }

    if(isset($_SESSION['Inventory'])){
        session_unset($_SESSION['Inventory']);
    }
    if(isset($_SESSION['Sale'])){
        session_unset($_SESSION['Sale']);
    }

      include("Models/Connect_DB.php");

      include("Framework/F_Company.php");

      include("Framework/S_Company.php");

      include("Framework/knowledge.php");

      include("Controllers/C_Company.php");


      include("Controllers/Login.php");


?>

<html>

<head>


    <title>business | Hello</title>

    <link rel="icon" type="image/icon" href="Public/Mybusiness_img/moiz.png" >
    <meta http-equiv="Content-Type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <script src="Public/Mybusiness_js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="Public/Mybusiness_js/Mybusiness.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="Public/Mybusiness_css/Index.css">

    <link rel="stylesheet" type="text/css" href="Public/Icon_font/demo.css">

</head>
<body>

<div id="top"><var>My</var> Business</div>

<section class="header">

    <strong> <var>My</var> Business</strong>

    <nav id="log">

        <form action="My.php" method="post">
        <table>

            <tr>
                <td>
    <input type="email" name="v_email" placeholder=" البريد الإلكتروني " required="">
    <input type="password" name="v_password" placeholder=" كلمه المرور " required="">
    <input type="submit"  name="login" value=" دخــول ">
        </td>
            </tr>

        </table>
		</form>
    </nav>
</section>

<section class="banner">
    <section id="banner-cont">
<table id="line">
    <tr><td><div class="icon icon-stats-bars"></div>
        </td></tr>
</table>

    <table id="hello">
        <tr><td>
       <dfn>مرحبـا ...</dfn>
	 <br><br>
                <sub>
	   ماي بزنس هي  حزمه أعمال محاسبيه  في مجال المحاسبه الماليه لقطاع شركات الأفراد التجاريه منها و الخدميه الأن يمكنك فتح حساب شركتك عبر الموقع ومباشره أعمالك والتواصل مع الموردين والعملاء داخل ماي بزنس
أين ومتي ما كنت .

  </sub>
			</td>
        </tr>
    </table>

    <table id="word"><tr><td>

        <div class="icon icon-office"></div>

                <form action="My.php" method="post">

            <label>

            </label>

            <label>

                <input  class="put" type="text" name="manager_name" placeholder =" الإســـــم / المدير "required="">
            </label>
            <label>
                <input  class="put" type="email" name="email" placeholder=" البريد الإلكتروني "required="">
            </label>

            <label>
                <input  type="password" class="put" name="password" placeholder=" كلمه المــــرور " required="">
            </label>

            <label>
                <input  type="password" class="put" name="two_password" placeholder=" أعد كلمه المرور " required="">
            </label>
			
            <label>
                <input  type="text" class="put" name="company_name" placeholder=" إسم الشركه التجاريه" required="">
            </label>

            <label>

                <select class="select" name="country"   required="">
                    <option value="">الدوله</option>
                    <option value="السودان">السودان</option>
                    <option value="مصر">مصر</option>
					<option value="السعوديه">السعوديه</option>
                    <option value="عمان">عمان</option>
					 <option value="تشاد">تشاد</option>
					 <option value="تونس">تونس</option>


                    </select>


            </label>

           <!--         <label>
                <input  class="put" type="text" name="country" placeholder=" الدوله " required="">
            </label>
            -->
            <label>
                <input  type="text" class="put" name="tel" placeholder=" هاتف " required="">
            </label>
            <label>

                <input  class="put" type="text" name="tel_plus" placeholder=" هاتف + ">
            </label>

            <label>
                <input type="hidden" name="load" value="<?php echo  $_SESSION['load'] = mt_rand();?>">
                <input type="submit" name="open_company" value=" فتح حساب الشركه ">
            </label>

        </form>
            </td></tr></table>

</section>
</section>

<section class="main">
<br><br>

   <nav id="min-main-1">
            <img id="img-1" src="Public/Mybusiness_img/RWD.png">
           <sub>عبر كل الأجهزه</sub>
            <p>الأن يمكنك الوصول لشركتك ومباشره أعمالك<br> عبر  كل الأجهزه والهواتف الذكيه</p>


        </nav>

        <nav id="min-main-1">
            <img  id="img-1" src="Public/Mybusiness_img/aa.jpg">
            <sub>تطبيق ماي بزنس</sub>
            <p>إذا كان هاتفك الذكي يعمل بنظام تشغيل أندرويد  يمكنك <br>تحميل التطبيق الأن </p><a href="Public/Mybusiness.zip"><sub>تحميل التطبيق</sub></a>

        </nav>
    <!--
        <nav id="min-main-3">
    <sub>الإســــتخدام</sub>
        <img id="img-3" src="Public/Mybusiness_img/images.jpg">
            <p>إذا كان هتفك الذكي يعمل بنظام تشغيل أندرويديمكنك تحميل هذا التطبيق ليساعدك للوصول السريع لحزمتك المحاسبيه</p>
    <a href=""><sub>المزيـــد</sub></a>
        </nav>

        <nav id="min-main-4">
           <sub>إتصــل بــنا</sub>
            <img  id="img-4" src="Public/Mybusiness_img/kk.png">
            <p>إذا كان هاتفك الذكي يعمل بنظام تشغيل أندرويديمكنك تحميل هذا التطبيق ليساعدك للوصول السريع لحزمتك المحاسبيه </p>
    <a href=""><sub>المزيـــد</sub></a>
        </nav>
        <nav id="min-main-3">
    <sub>حولنــــا</sub>
            <img id="img-3" src="Public/Mybusiness_img/xf.png">
            <p>إذا كان هتفك الذكي يعمل بنظام تشغيل أندرويديمكنك تحميل هذا التطبيق ليساعدك للوصول السريع لحزمتك المحاسبيه</p>
    <a href=""><sub>المزيـــد</sub></a>
        </nav>

        <nav id="min-main-4">
    <sub>المساعـــده</sub>
        <img  id="img-4" src="Public/Mybusiness_img/lml.png">
            <p>إذا كان هاتفك الذكي يعمل بنظام تشغيل أندرويديمكنك تحميل هذا التطبيق ليساعدك للوصول السريع لحزمتك المحاسبيه </p>
    <a href=""><sub>المزيـــد</sub></a>
        </nav>
    -->
    </section>

    <section class="end">
    <nav>
        <span class="icon icon-notification"><a href="" >  الإستخدام</a> </span>
        <span class="icon icon-users"><a href="" > حولنا </a> </span>
        <span class="icon icon-phone"><a href="" > إتصل بنا</a> </span>
        <span class="icon icon-lifebuoy"><a href="" > المساعده</a> </span>
    </nav>
    </section>
    <section class="footer">
        <a class="icon icon-facebook3" href=""></a>
        <a class="icon icon-twitter3" href=""></a>
        <a class="icon icon-google-plus3" href=""></a>
    </section>


<label>
    <?php
        include("Models/M_Company.php");
    ?>
</label>
</body>
    </html>