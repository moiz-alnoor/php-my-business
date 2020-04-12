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

<section class="container">

    <label>
    فواتير | المبيعات		
		<div class="icon icon-embed"></div>  <br><br>
    </label>

    <br>    
    <form action="Reports_Sale.php" method="post">

        <article id="search">

            <label>

                <select  id="s" name="purchaser" class="input-search">
                            <option value=""></option>
                    <?php $obj = new inventory(); $obj->selEct_Invoice();?>

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


<article id="col-1-big">
    <table >

         <tr class="tab_chart1">
           <td class="tab_chart1">نوع الصنف</td>
           <td class="tab_chart1">الكميه</td>
		    <td class="tab_chart1">التاريخ</td>
             <td class="tab_chart1">م|إخري</td>
         </tr>

        <?php

            class V1_reports extends  Data_inventory{
            public  function Reports_Functions(){


                $obj = new connect_db();

                $Reports = $obj->query("select * from invoice_one where company_key = '$_SESSION[company_key]' and purchaser = '$this->purchaser'");
                while($R = mysqli_fetch_array($Reports)){?>

        <tr>

            <td class="tab_chart"><?php echo $R['item_type']?></td>
            <td class="tab_chart"><?php echo $R['item_total']?></td>
            <td class="tab_chart"><?php echo $R['t_date']?></td>
            <td class="tab_chart"><?php echo $R['other']?></td>

        </tr>

        <?php
                }
            }
        }
            $obj = new V1_reports();
            $obj->Reports_Functions();
        ?>
    </table>

</article>

    <article id="col-1-big">






        <table>
            <tr>
                <td class="tab_chart1">الخصم</td>
                <td class="tab_chart1">الضريبه</td>
                <td class="tab_chart1"> سعر الشراء</td>
				 <td class="tab_chart1">إجمالي التكلفه</td>
            </tr>


            <?php


                class V_reports extends  Data_inventory{
                public  function Reports_Functions(){


                    $obj = new connect_db();

                    $Reports = $obj->query("select * from  invoice_one where company_key = '$_SESSION[company_key]' and purchaser = '$this->purchaser'");
                    while($R = mysqli_fetch_array($Reports)){?>



                        <tr>
            <td class="tab_chart"><?php echo $R['discount']?></td>
            <td class="tab_chart"><?php echo $R['tax']?></td>
            <td class="tab_chart"><?php echo $R['perches_price_unite']?></td>
            <td class="tab_chart"><?php echo $R['total_cost']?></td>


                    </tr>
                <?php
                    }
                }
            }
                $obj = new V_reports();
                $obj->Reports_Functions();
            ?>

        </table>

</article>

</section>

</body>
</html>