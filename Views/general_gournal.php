<?php

    session_start();

    if(!isset($_SESSION['Company']) && !isset ($_SESSION['Inventory']) && !isset ($_SESSION['Sale'])){

        header("location:../My.php");

    }



    include("../Models/Connect_DB.php");

    include("../Framework/knowledge.php");

    include("../Controllers/Links.php");

    include("../Framework/F_Chart_of_Accounts.php");



    include("../Controllers/General_G.php");

    include("../Models/General_G.php");

    include("../Models/Re_Gn.php");

?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>business | General_Gournal</title>
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
<nav class="logo">
    <table>

        <?php
            $obj = new Links();
            $obj->Inventory_tab_phone_links();
        ?>

    </table>

</nav>

<section class="container">

    <label >

        <div class="icon icon-embed"></div>
    التدوين | دفتر اليومبه 
		  <br><br>
    </label>
    <hr>
<br>
    <label> 
	
		 التــاريخ  <?php echo date("y,m,d");?>
<div class="icon icon-embed"></div>  
   
    </label>


    <br><br>	

    <form action="general_gournal.php" method="post">

        <article id="col-1" >
            <div class="icon icon-embed"></div>

            <label>الحساب المديـــن :

            </label>
            <br><br>

            <label> حدد الحساب

                <select name="dept_account_id" class="select" required="">
                    <option value=""></option>
                    <?php $obj = new C_General_G(); $obj->expenses(); $obj->liabilities(); $obj->assets();?>
                </select>
            </label>




        </article>

        <article id="col-2" >
            <div class="icon icon-embed"></div>

            <label>الحساب الدائــن :

            </label>
            <br><br>

            <label > حدد الحساب

                <select name="credit_account_id" class="select"  required="">
                    <option value=""></option>

                    <?php $obj = new C_General_G(); $obj->assets(); $obj->Capital(); $obj->revenues(); $obj->liabilities();?>
                </select>
            </label>





        </article>

        <article id="col-3">

            <label>المبـــالغ
                <div class="icon icon-embed"></div>

            </label>
            <br><br>

            <label  > القيمه الماليه
<input type="number" min="1" name="amount" value="<?php
echo  $_SESSION['Dept'];?>" required="">
</label>




        </article>

    <article id="col-4">

        <label>
            البيـــــــــان
            <textarea id="textarea" name="note" required="" ></textarea>
        </label>



            <label >
                <input type="submit"  name="General_G" onclick="return conf();" value="تسجــيل القيــد">

            </label>


    </article>
    </form>

</section>




<section class="container">
<br>    <hr>  <br>

    <label>
      تقارير اليوميه | إسم الحساب
        <div class="icon icon-embed"></div>  <br><br>
    </label>

    <form action="general_gournal.php" method="post">

        <article id="search">

            <label>
<input type="date" name="S_account_name" id="date" value="<?php echo date("y,m,d");?> " >
<!--                <select   name="S_account_name" class="input-search" required="">

                    <option value=""></option>
                    <option value="<?php echo date("y,m,d");?>"><?php echo date("y,m,d");?> </option>

                    <?php //$obj = new C_General_G(); $obj->general(); //$obj->Capital();?>

                </select>
-->

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


    <article id="col-1-big">
        <table >



            <tr class="tab_chart1">

                <td class="tab_chart1">الحساب الدائن</td>
                <td class="tab_chart1">الحساب المدين</td>

                <td class="tab_chart1">المبلغ</td>


            </tr>

            <?php


                class V_G extends  D_Chart_of_Accounts{
protected $Q;

                public  function Reports_Functions(){


                    $obj = new connect_db();

                    $Reports = $obj->query("select * from   general_gournal  where credit_account_id  = '$this->S_account_name' or
                    t_date  = '$this->S_account_name'
                    and  company_key = '$_SESSION[company_key]'");

                    while($this->Q = mysqli_fetch_array($Reports)){?>

                        <tr>

                            <td class="tab_chart"><?php echo $this->Q['credit_account_name']?></td>
                            <td class="tab_chart"><?php echo $this->Q['dept_account_name']?></td>
                            <td class="tab_chart"><?php echo $this->Q['amount']?></td>
                        </tr>

                    <?php
                    }
                }
            }
                $obj = new V_G();
                $obj->Reports_Functions();
            ?>
        </table>

    </article>
    <article id="col-1-big">
        <table >



            <tr class="tab_chart1">

                <td class="tab_chart1">البيــــــــــان</td>
                <td class="tab_chart1">التاريخ</td>

                <td class="tab_chart1">رقم القيد</td>


                <td class="tab_chart1">تراجع</td>

            </tr>

            <?php


                class V_Gornal extends  D_Chart_of_Accounts{
                    protected $E;

                    public  function Reports_Functions(){


                        $obj = new connect_db();

                        $Reports = $obj->query("select * from   general_gournal  where credit_account_id = '$this->S_account_name'  or
                    t_date  = '$this->S_account_name' and  company_key = '$_SESSION[company_key]'");
                        while($this->E = mysqli_fetch_array($Reports)){?>

                            <tr>

                                <td class="tab_chart"><?php echo $this->E['note']?></td>
                                <td class="tab_chart"><?php echo $this->E['t_date']?></td>
                                <td class="tab_chart"><?php echo $this->E['No']?></td>
                           <td>
                               <form action="general_gournal.php" method="post">

                               <input type="hidden" name="credit_account_id" value="<?php echo $this->E['credit_account_id']?>">

                                   <input type="hidden" name="dept_account_id" value="<?php echo $this->E['dept_account_id']?>">

                                   <input type="hidden" name="amount" value="<?php echo $this->E['amount']?>">

                                   <input type="submit" id="Re" name="Re_Gn" onclick="return conf();" value="تراجع">

                               </form>
                           </td>
						   </tr>

                        <?php
                        }
                    }
                }
                $obj = new V_Gornal();
                $obj->Reports_Functions();
            ?>
        </table>

        <?php

        if(isset($_SESSION['Dept'])){
            $_SESSION['Dept'] = 0;
        }
        ?>
    </article>
</section>
<label>

</label>
</body>

</html>