<?php
    session_start();

    if(!isset($_SESSION['Company']) && !isset ($_SESSION['Inventory']) && !isset ($_SESSION['Sale'])){

        header("location:../My.php");

    }


    include("../Models/Connect_DB.php");

    include("../Framework/knowledge.php");


    include("../Controllers/Links.php");


    include("../Framework/F_Chart_of_Accounts.php");



    include("../Models/Chart_of_Accounts.php");


?>


<html>

<head>

    <title>business | Chart_of_Accounts</title>
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
    <?php $obj->Inventory_tab_phone_links()?>
</nav>


<section class="container-min">

    <label>
        إضافه حساب | دليل الحسابات
        <div class="icon icon-embed"></div>  <br><br>
    </label>

    <article id="col-2">

        <form method="post" action="Chart_of_Accounts.php">

            <div class="icon icon-embed"></div>

            <label>الإرادات
                <input type="text" name="Account_name" value="" placeholder="الحساب" required="">
            </label>

            <label>
    <input type="number" min="1" name="Account_balance" value="" placeholder="الرصيد">
</label>
            <label>

                <input type="submit" name="revenues" value="إضافه">

            </label>
        </form>

        <form method="post" action="Chart_of_Accounts.php">
            <div class="icon icon-embed"></div>
            <label>المصروفات

                <input type="text" name="Account_name" placeholder="الحساب" required="">

                <input type="number" min="1" name="Account_balance" value="" placeholder="الرصيد">
            </label>
            <label>
                <input type="submit" name="expenses" value="إضافه">
            </label>
        </form>
    </article>

    <article id="col-3">
        <form method="post" action="Chart_of_Accounts.php">
            <div class="icon icon-embed"></div>

            <label>الأصــول
                 <input type="text" name="Account_name" placeholder="الحساب" required="">
            </label>

            <label>
            <input type="number" min="1" name="Account_balance" value="" placeholder="الرصيد">

            <label>

                <input type="hidden" name="load" value="<?php echo $_SESSION['load_assets'] = mt_rand(); ?>">


                <input type="submit" name="assets" value="إضافه">

            </label>

        </form>

        <form method="post" action="Chart_of_Accounts.php">
            <div class="icon icon-embed"></div>

            <label>الخصــوم
                 <input type="text" name="Account_name" placeholder="الحساب" required="">
            </label>

            <label>
                <input type="number" min="1" name="Account_balance" value="" placeholder="الرصيد">

                <label>
            <label>



                <input type="submit" name="liabilities" value="إضافه">
            </label>

        </form>
    </article>

    <article id="col-1">
        <form method="post" action="Chart_of_Accounts.php">
            <div class="icon icon-embed"></div>

            <label>حقوق الملكيه
                 <input type="text" name="Account_name" placeholder="الحساب" required="">
            </label>

            <label>
                <input type="number" min="1" name="Account_balance" value="" placeholder="الرصيد">

                <label>
            <label>

                <input type="hidden" name="load" value="<? echo $_SESSION['load_owner'] = mt_rand(); ?>">

                <input type="submit" name="owner" value="إضافه">
            </label>
        </form>

        <form action="Chart_of_Accounts.php" method="post">
            <label>
                <br>               <input type="checkbox"   name="Capital_balance" value="" required="">

                <label>رأس المال
                </label>

                <label>
                    <input type="number" min="1" name="Account_balance" value="" placeholder="الرصيد">

                    <label><br/>
                <label>
                    <input type="submit" name="Capital" value="إضافه">
                </label>

        </form>

    </article>
</section>
<br>
<section class="container">
    <article id="col-1-big">
        <table>

            <tr><td class="tab_chart1">الأصــول</td></tr>
            <tr>
                <td class="tab_chart1">إسم الحساب</td>
                <td class="tab_chart1">رصيد الحساب</td>
                <td class="tab_chart1">رقم الحساب</td>
                <td class="tab_chart1">حزف الحساب</td>

            </tr>
            <?php
                class Chart_1{

                public  function assets(){

                $obj = new connect_db();

                $result_assets = $obj->query("select * from  assets where company_key = '$_SESSION[company_key]'");
                while($assets = mysqli_fetch_array($result_assets)){?>

                    <tr>

                        <td class="tab_chart"><?php echo $assets['Account_name']?></td>
                        <td class="tab_chart"><?php echo $assets['Account_balance']?></td>
                        <td class="tab_chart"><?php echo $assets['Account_id']?></td>
                        <td>
                            <form action="Chart_of_Accounts.php" method="post">
                                 <input type="hidden" name="dell_A" value="<?php echo $assets['Account_id']?>">

                                <input type="submit"  onclick="return conf();" value="حـــزف">
                            </form>
                        </td

                    </tr>

                <?php
                }
                }
                }
                    $obj = new Chart_1();
                $obj->assets();

?>
        
		</table>






        <table>

            <tr><td class="tab_chart1">المصروفات</td></tr>
            <tr>
                <td class="tab_chart1">إسم الحساب</td>
                <td class="tab_chart1">رصيد الحساب</td>
                <td class="tab_chart1">رقم الحساب</td>
                <td class="tab_chart1">حزف الحساب</td>

            </tr>
            <?php
                class Chart_3{

                    public  function expenses(){

                        $obj = new connect_db();

                        $result_assets = $obj->query("select * from  expenses where company_key = '$_SESSION[company_key]'");
                        while($assets = mysqli_fetch_array($result_assets)){?>

                            <tr>

                                <td class="tab_chart"><?php echo $assets['Account_name']?></td>
                                <td class="tab_chart"><?php echo $assets['Account_balance']?></td>
                                <td class="tab_chart"><?php echo $assets['Account_id']?></td>
<td>
                                <form action="Chart_of_Accounts.php" method="post">
                                    <input type="hidden" name="dell_A" value="<?php echo $assets['Account_id']?>">

                                    <input type="submit"  onclick="return conf();" value="حـــزف">
                                </form>
</td>
                            </tr>

                        <?php
                        }
                    }
                }
                $obj = new Chart_3();
                $obj->expenses();

            ?>

        </table>

    </article>



    <article id="col-1-big">
        <table>

            <tr><td class="tab_chart1">الخصوم</td></tr>
            <tr>
                <td class="tab_chart1">إسم الحساب</td>
                <td class="tab_chart1">رصيد الحساب</td>
                <td class="tab_chart1">رقم الحساب</td>
                <td class="tab_chart1">حزف الحساب</td>

            </tr>
            <?php
                class Chart_2{

                    public  function liabilities(){

                        $obj = new connect_db();

                        $result_assets = $obj->query("select * from  liabilities where company_key = '$_SESSION[company_key]'");
                        while($assets = mysqli_fetch_array($result_assets)){?>

                            <tr>

                                <td class="tab_chart"><?php echo $assets['Account_name']?></td>
                                <td class="tab_chart"><?php echo $assets['Account_balance']?></td>
                                <td class="tab_chart"><?php echo $assets['Account_id']?></td>
<td>
    <form action="Chart_of_Accounts.php" method="post">
        <input type="hidden" name="dell_A" value="<?php echo $assets['Account_id']?>">

        <input type="submit"  onclick="return conf();" value="حـــزف">
    </form>

</td>
                            </tr>

                        <?php
                        }
                    }
                }
                $obj = new Chart_2();
                $obj->liabilities();

            ?>
        </table>




        <table>

            <tr><td class="tab_chart1">الإيرادات</td></tr>
            <tr>
                <td class="tab_chart1">إسم الحساب</td>
                <td class="tab_chart1">رصيد الحساب</td>
                <td class="tab_chart1">رقم الحساب</td>
                <td class="tab_chart1">حزف الحساب</td>

            </tr>
            <?php
                class Chart_4{

                    public  function revenues(){

                        $obj = new connect_db();

                        $result_assets = $obj->query("select * from  revenues where company_key = '$_SESSION[company_key]'");
                        while($assets = mysqli_fetch_array($result_assets)){?>

                            <tr>

                                <td class="tab_chart"><?php echo $assets['Account_name']?></td>
                                <td class="tab_chart"><?php echo $assets['Account_balance']?></td>
                                <td class="tab_chart"><?php echo $assets['Account_id']?></td>
<td>                                <form action="Chart_of_Accounts.php" method="post">
        <input type="hidden" name="dell_A" value="<?php echo $assets['Account_id']?>">

        <input type="submit"  onclick="return conf();" value="حـــزف">
    </form>
</td>
                            </tr>

                        <?php
                        }
                    }
                }
                $obj = new Chart_4();
                $obj->revenues();

            ?>

        </table>


        <table>

            <tr><td class="tab_chart1">رأس الـمال</td></tr>
            <tr>
                <td class="tab_chart1">إسم الحساب</td>
                <td class="tab_chart1">رصيد الحساب</td>
                <td class="tab_chart1">رقم الحساب</td>
                <td class="tab_chart1">حزف الحساب</td>

            </tr>
            <?php
                class Chart_33{

                    public  function expenses(){

                        $obj = new connect_db();

                        $result_assets = $obj->query("select * from  Capital where company_key = '$_SESSION[company_key]'");
                        while($assets = mysqli_fetch_array($result_assets)){?>

                            <tr>

                                <td class="tab_chart"><?php echo $assets['Account_name']?></td>
                                <td class="tab_chart"><?php echo $assets['Capital_balance']?></td>
                                <td class="tab_chart"><?php echo $assets['Account_id']?></td>
                                <td>
                                    <form action="Chart_of_Accounts.php" method="post">
                                        <input type="hidden" name="dell_A" value="<?php echo $assets['Account_id']?>">

                                        <input type="submit"  onclick="return conf();" value="حـــزف">
                                    </form>
                                </td>
                            </tr>

                        <?php
                        }
                    }
                }
                $obj = new Chart_33();
                $obj->expenses();

            ?>

        </table>




        <table>

            <tr><td class="tab_chart1"> حقوق الملكيه</td></tr>
            <tr>
                <td class="tab_chart1">إسم الحساب</td>
                <td class="tab_chart1">رصيد الحساب</td>
                <td class="tab_chart1">رقم الحساب</td>
                <td class="tab_chart1">حزف الحساب</td>

            </tr>
            <?php
                class Chart_13{

                    public  function ownerequity(){

                        $obj = new connect_db();

                        $result_assets = $obj->query("select * from  ownerequity where company_key = '$_SESSION[company_key]'");
                        while($ownerequity = mysqli_fetch_array($result_assets)){?>

                            <tr>

                                <td class="tab_chart"><?php echo $ownerequity['Account_name']?></td>
                                <td class="tab_chart"><?php echo $ownerequity['Account_balance']?></td>
                                <td class="tab_chart"><?php echo $ownerequity['Account_id']?></td>
                                <td>
                                    <form action="Chart_of_Accounts.php" method="post">
                                        <input type="hidden" name="dell_A" value="<?php echo $ownerequity['Account_id']?>">

                                        <input type="submit"  onclick="return conf();" value="حـــزف">
                                    </form>
                                </td>
                            </tr>

                        <?php
                        }
                    }
                }
                $obj = new Chart_13();
                $obj->ownerequity();

            ?>

        </table>
    </article>


</section>
</body>
</html>