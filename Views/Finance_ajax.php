<?php
    session_start();


    if(!isset($_SESSION['Company']) && !isset ($_SESSION['Inventory']) && !isset ($_SESSION['Sale'])){

        header("location:../My.php");

    }

    include("../Models/Connect_DB.php");

    include("../Controllers/Links.php");

?>

<html>

<head>

    <title>business | Finance-Menu</title>
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

<nav id="top">
    <div id="address"><var>My</var>Business</div>
    <div class="icon icon-office"></div>
    <div id="comp_name"><?php echo $_SESSION['company_name'];?></div>
</nav>

<section class="header">
    <div id="left-icon"><a href="../My.php"> <i class="icon icon-switch"></i> </a> <i class="icon icon-menu"></i> </div>
    <div id="right-icon">  <?php echo $_SESSION['visitor_name'];?><i class="icon icon-user"></i>  </div>


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
<article id="col-1-big">
    <table>

        <tr>

            <td class="tab_chart" colspan="3"> إسم الشركه : <?php echo $_SESSION['company_name'];?> </td>

        </tr>

        <tr>

            <td class="tab_chart" colspan="3">قائمه الدخل عن التاريخ | <?php echo date('y,m,d');?></td>

        </tr>

        <tr>
            <td class="tab_chart1"></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">الإيـــرادات</td>

        </tr>

        <?php
            class f_m{
            public  function m(){
            $obj = new connect_db();
            // echo $_SESSION['company_key'];
            $result_revenues = $obj->query("select * from revenues where Company_key = '$_SESSION[company_key]'");
            $R = 0;
            while($revenues = mysqli_fetch_array($result_revenues)){?>

                <tr>

                    <td class="tab_chart"> <?php $R+=$revenues['Account_balance']; echo $revenues['Account_balance']?>  </td>
                    <td class="tab_chart"></td>
                    <td class="tab_chart"><?php echo $revenues['Account_name']?></td>
                </tr>
            <?php }?>

        <tr>
            <td class="tab_chart1"><?php echo $_SESSION['R'] = $R;?></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">إجمالي الإيرادات</td>

        </tr>
        <tr>
            <td class="tab_chart1"></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">المصروفات</td>

        </tr>

        <?php $obj = new connect_db();



            $result_expenses = $obj->query("select * from  expenses where company_key = '$_SESSION[company_key]'");
            $E = 0;
            while($expenses = mysqli_fetch_array($result_expenses)){?>

                <tr>
                    <td class="tab_chart"></td>
                    <td class="tab_chart"><?php $E+=$expenses['Account_balance']; echo $expenses['Account_balance']?></td>

                    <td class="tab_chart"><?php echo $expenses['Account_name']?></td>
                </tr>
            <?php }?>

        <tr>
            <td class="tab_chart1"><?php echo $_SESSION['E'] = $E;?></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">إجمالي المصروفات</td>


        </tr>
        <tr>
            <td class="tab_chart1"> <?php echo $R-$E;?> </td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">صافي الربح</td>


        </tr>
        <tr>
            <td class="tab_chart1"></td>
            <td class="tab_chart1"><?php echo $E-$R;?></td>
            <td class="tab_chart1"> صافي الخساره </td>


        </tr>

    </table>

</article>


<article id="col-1-big">
    <table>


        <tr>

            <td class="tab_chart" colspan="3"> إسم الشركه : <?php echo $_SESSION['company_name'];?> </td>

        </tr>

        <tr>

            <td class="tab_chart" colspan="3">قائمه المركز المالي عن التاريخ  |  <?php echo date('y,m,d');?></td>

        </tr>

        <tr>
            <td class="tab_chart1"></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">الأصــــــول</td>

        </tr>

        <?php $obj = new connect_db();

            $result_assets = $obj->query("select * from  assets where company_key = '$_SESSION[company_key]'");
            $A = 0;
            while($assets = mysqli_fetch_array($result_assets)){?>

                <tr>

                    <td class="tab_chart"><?php $A+=  $assets['Account_balance']; echo $assets['Account_balance']?></td>
                    <td class="tab_chart"></td>
                    <td class="tab_chart"><?php echo $assets['Account_name']?></td>
                </tr>
            <?php }?>



        <tr>
            <td class="tab_chart1">  </td>
            <td class="tab_chart1"><?php echo $A;?></td>
            <td class="tab_chart1">إجمالي الأصول</td>

        </tr>
        <tr>
            <td class="tab_chart1"></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">الخصوم</td>

        </tr>

        <?php $obj = new connect_db();

            $result_liabilities = $obj->query("select * from  liabilities where company_key = '$_SESSION[company_key]'");
            $L = 0;
            while($liabilities = mysqli_fetch_array($result_liabilities)){?>

                <tr>
                    <td class="tab_chart"></td>
                    <td class="tab_chart"><?php $L+=$liabilities['Account_balance']; echo $liabilities['Account_balance']?></td>

                    <td class="tab_chart"><?php echo $liabilities['Account_name']?></td>
                </tr>
            <?php }?>


        <tr>

            <td class="tab_chart1"></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">حقوق الملكيه</td>

        </tr>

        <tr>

            <td class="tab_chart"></td>
            <td class="tab_chart"><?php echo $_SESSION['R'];?></td>
            <td class="tab_chart"> صافي - ربح</td>

        </tr>

        <tr>

            <td class="tab_chart"></td>
            <td class="tab_chart"><?php echo $_SESSION['E'];?></td>
            <td class="tab_chart">صافي - خساره</td>

        </tr>
        <?php


            $C = $obj->query("select * from  capital  where company_key = '$_SESSION[company_key]'");
            $B_Capital = mysqli_fetch_array($C);
            $Capital = $B_Capital['Capital_balance'];
            $A_name = $B_Capital['Account_name'];

        ?>
        <tr>

            <td class="tab_chart"></td>
            <td class="tab_chart"><?php echo $B_Capital['Capital_balance'];?></td>
            <td class="tab_chart"><?php echo $B_Capital['Account_name'];?></td>

        </tr>

        <?php
            $result_owner = $obj->query("select * from  ownerequity  where company_key = '$_SESSION[company_key]'");
            $O = 0;
            while($owner = mysqli_fetch_array($result_owner)){?>

                <tr>

                    <td class="tab_chart"></td>
                    <td class="tab_chart"><?php $O+=$owner['Account_balance']; echo $owner['Account_balance']?></td>
                    <td class="tab_chart"><?php echo $owner['Account_name']?></td>

                </tr>

            <?php }?>





        <tr>
            <td class="tab_chart1"><?php echo $tot =  $_SESSION['R'] + $Capital + $O + $L - $_SESSION['E'];?></td>
            <td class="tab_chart1"></td>
            <td class="tab_chart1">إجمالي الخصوم وحقوق الملكيه</td>


        </tr>

    </table>
    <?php
        }
        }
        $obj= new f_m();
        $obj->m();
    ?>
</article>

</section>

</body>

</html>