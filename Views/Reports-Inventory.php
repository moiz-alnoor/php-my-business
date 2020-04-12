<?php
    session_start();
    if(!isset($_SESSION['Company']) && !isset($_SESSION['Inventory'])){

        header("location:../My.php");

    }

    include("../Models/Connect_DB.php");

    include("../Framework/knowledge.php");

    include("../Framework/Inventory.php");

    include("../Controllers/Inventory.php");

    include("../Models/Inventory.php");

    include("../Controllers/Links.php");

?>
<!doctype html>
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

    <nav>

        <?php   $obj = new Links();
            $obj->Inventory_pc_links();?>

    </nav>
</section>
<div class="know"></div>
<nav class="logo">

    <?php   $obj = new Links();
        $obj->Inventory_tab_phone_links();
    ?>


</nav>
<section class="container">

    <label>
    تقارير المخزون | إسم المجموعه 
		<div class="icon icon-embed"></div>  <br><br>
    </label>

    <br>    <br>

    <form action="Reports-Inventory.php" method="post">

        <article id="search">

            <label>

                <select  id="s" name="group_name" class="input-search">
<option value=""></option>
                    <?php  $obj = new inventory(); $obj->selEct_Reports();?>

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
           <td class="tab_chart1">إسم الصنف</td>
           <td class="tab_chart1">نوع الصنف</td>

           <td class="tab_chart1">عدد الأصناف</td>

             <td class="tab_chart1">سعر الشراء</td>
             <td class="tab_chart1">إسم المجموعه</td>

         </tr>

        <?php


            class  report extends  Data_inventory{
                protected  $s;
                public  function Functions(){


        $obj = new connect_db();

        $port = $obj->query("select * from  Reports where company_key = '$_SESSION[company_key]' and group_name = '$this->group_name'");
        while($this->s = mysqli_fetch_array($port)){?>

        <tr>

            <td class="tab_chart"><?php echo $this->s['item']?></td>
            <td class="tab_chart"><?php echo $this->s['item_type']?></td>
            <td class="tab_chart"><?php echo $this->s['item_total']?></td>
            <td class="tab_chart"><?php echo$this->s['perches_price_unite']?></td>
            <td class="tab_chart"><?php echo $this->s['group_name']?></td>
        </tr>

        <?php
        }
            }
        }
            $obj = new report();
            $obj->Functions();
        ?>
    </table>

</article>


    <article id="col-1-big">
        <table >



            <tr class="tab_chart1">
                <td class="tab_chart1">م|أخري</td>
                <td class="tab_chart1">الضريبه</td>

                <td class="tab_chart1">الخصم</td>

                <td class="tab_chart1">الإجمالي</td>
                <td class="tab_chart1">التاريخ</td>

            </tr>

            <?php


                class  report_2 extends  Data_inventory{
                    protected  $t;
                    public  function Functions(){


                        $obj = new connect_db();

                        $port = $obj->query("select * from  Reports where company_key = '$_SESSION[company_key]' and group_name = '$this->group_name'");
                        while($this->t = mysqli_fetch_array($port)){?>

                            <tr>

                                <td class="tab_chart"><?php echo $this->t['other']?></td>
                                <td class="tab_chart"><?php echo $this->t['tax']?></td>
                                <td class="tab_chart"><?php echo $this->t['discount']?></td>
                                <td class="tab_chart"><?php echo$this->t['total_cost']?></td>
                                <td class="tab_chart"><?php echo $this->t['t_date']?></td>
                            </tr>

                        <?php
                        }
                    }
                }
                $obj = new report_2();
                $obj->Functions();
            ?>

</section>

</body>
</html>