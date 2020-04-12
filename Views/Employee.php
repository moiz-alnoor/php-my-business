<?php

    session_start();


        if(!isset ($_SESSION['Company'])){

          header("location:../My.php");

        }

        include("../Models/Connect_DB.php");

        include("../Framework/knowledge.php");

        include("../Framework/F_Employee.php");

        include("../Controllers/C_Employee.php");

        include("../Models/M_Employee.php");

        include("../Controllers/Links.php");


?>

<html>
<head>
    <meta charset="utf-8">

    <title>business | Employee</title>
    <link rel="icon" type="image/icon" href="../Public/Mybusiness_img/moiz.png" >
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
   حزف - تعديل بيانات | الموظفين
        <div class="icon icon-embed"></div>  <br><br>
    </label>

    <form action="Employee.php" method="post">
        <article id="search">
        <label>
            <select  name="__emp_key"  class="input-search" required="">
                <option value=""></option>

                <?php  $obj = new C_Employee(); $obj->selEct_Employee_name()?>

            </select>
</label>
            </article>
        <article id="search">
            <label>
            <input type="image"  id="img-search" src="../Public/Mybusiness_img/wew.png" >
        </label>
</article>
        </form>
    </section>

<section class="container">
    
    
    <form method="post" action="Employee.php">
<br>
        <article id="col-1">
<?php class Data extends C_Employee{

    public  function sElect(){
    $obj = new C_Employee();
    $obj->Select_data();
?>

            <label> إسم الموظف

                <input type="text" name="emp_name" value="<?php echo $obj->_emp_name;?>" required="">
                <input type="hidden" name="__emp_key" value="<?php echo $obj->_emp_key;?>">
            </label>

            <label> هاتف
                <input type="text" name="tel" value="<?php echo $obj->_tel;?>">
            </label>
            <label> هاتف +
                <input type="text" name="tel_plus" value="<?php  echo $obj->_tel_plus;?>">
            </label>




        </article>

        <article id="col-2">

            <label> المدينه
                <input type="text" name="city" value="<?php echo $obj->_city;?>">
            </label>

            <label> الحي
                <input type="text" name="block" value="<?php echo $obj->_block;?>">
            </label>

            <label> المرتب الشهري
                <input type="number" min="1" name="salary" placeholder="000" value="<?php echo $obj->_salary;?>">
            </label>


        </article>
        <article id="col-3">

            <label id="alawa">
                علاوه
                <input  type="text" min="1" name="alawa" placeholder="000" value="<?php echo $obj->_alawa;?>">
            </label>
            <label id="bdl">
                بدل
                <input  type="text" min="1" name="bdl" placeholder="000" value="<?php echo $obj->_bdl;?>">
            </label>

            <label id="hafez">
                حافز
                <input  type="text"   name="hafez" placeholder="000" value="<?php echo $obj->_hafez;?>">
            </label>

        </article>
        <article id="col-3">

            <label>
 نوع الوظيفه :

               <?php

			if($obj->_job_type_in == 1){

			echo "موظف مخازن" ;

            }

			elseif($obj->_job_type_in == 2){

			echo "موظف مبيعات";
			}

			?>
                <br>

            </label>
إختار وظيفه
            <label>
            <select name="job_type_in" id="select" required="">
                <option value=""></option>
                <option value="2">موظف مبيعات</option>
                <option value="1">موظف مخزن</option>
            </select>
            </label>
            <label> التاريخ
                <input type="text" name="date_register" value="<?php echo $obj->_date_register?>">
            </label>

            <label>
                <input type="submit" name="emp_edit" onclick="return conf();" value=" تعديل البيانات">

            </label>

            <label>
                <input type="submit" name="emp_dell"  onclick="return conf()" value="حزف الموظف">
            </label>

<?php
    }
    }

    $o = new Data();
    $o->sElect();
?>
        </article>
    </form>
</section>








<section class="container">
    <br>
    <label>
      إضافه | الموظفين
        <div class="icon icon-embed"></div>  <br><br>
    </label>
	
	<form method="post" action="Employee.php">

    <article id="col-1">

        <label> إسم الموظف
            <input type="text" name="emp_name" value="" required="">
        </label>

        <label> هاتف
            <input type="text" name="tel" required="">
        </label>
		  <label> هاتف +
            <input type="text" name="tel_plus">
        </label>




</article>

    <article id="col-2">

	<label> المدينه
            <input type="text" name="city" required="">
        </label>

	<label> الحي
            <input type="text" name="block">
        </label>

	<label> المرتب الشهري
            <input type="number" min="1" name="salary" placeholder="000" required="">
        </label>


    </article>
    <article id="col-3">

        <label id="alawa">
		علاوه
        <input  type="number"  min="1" name="alawa" placeholder="000">
        </label>
        <label id="bdl">
		بدل
        <input  type="number" min="1" name="bdl" placeholder="000">
        </label>

        <label id="hafez">
		حافز
        <input  type="number" min="1" name="hafez" placeholder="000">
        </label>

    </article>
        <article id="col-3">
  <label id="job_type1">
      إختار وظيفه
      <label>
          <select name="job_type_in" id="select" required="">
              <option value=""></option>
              <option value="2">موظف مبيعات</option>
              <option value="1">موظف مخزن</option>
          </select>
      </label>

            <label id="use-email">
                البريد الإلكتروني
                <input  type="text" name="email" value="" required="">
            </label>

            <label id="use-pass">
                كلمه المرور
                <input  type="password" name="password" value="" required="">
            </label>

            <label> التاريخ
                <input type="text" name="date_register" value="<?php echo date('y,m,d'); ?>">
            </label>

            <label>

                <input type="submit" name="new_emp" value="موظف جديد">
            </label>

        </article>
</form>

</section>

</body>
</html>