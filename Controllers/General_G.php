<?php



        class C_General_G extends  D_Chart_of_Accounts{

public  function Capital(){

    $connect = new connect_db();

    $R_capital = $connect->query("select * from capital where Company_key =  '$_SESSION[company_key]'");
    while($N_capital = mysqli_fetch_array($R_capital)){

        echo "<option value='$N_capital[Account_id]'>"." $N_capital[Account_name] </option>";

    }
}


    public function assets(){
        $connect = new connect_db();

        $R_assets = $connect->query("select * from assets where Company_key =  '$_SESSION[company_key]'");
    while($N_assets = mysqli_fetch_array($R_assets)){

        echo "<option value='$N_assets[Account_id]'>"." $N_assets[Account_name] </option>";

    }

    }
            public function liabilities(){
                $connect = new connect_db();
        $R_liabilities = $connect->query("select * from liabilities where Company_key =  '$_SESSION[company_key]'");
        while($N_liabilities = mysqli_fetch_array($R_liabilities)){

            echo "<option value='$N_liabilities[Account_id]'>"." $N_liabilities[Account_name] </option>";

        }
            }
            public function expenses(){
                $connect = new connect_db();{

                $R_expenses = $connect->query("select * from expenses where Company_key =  '$_SESSION[company_key]'");
        while($N_expenses = mysqli_fetch_array($R_expenses)){

            echo "<option value='$N_expenses[Account_id]'>"." $N_expenses[Account_name] </option>";

        }
                }
            }
                public function revenues(){
                    $connect = new connect_db();{


        $R_revenues = $connect->query("select * from revenues where Company_key =  '$_SESSION[company_key]'");
        while($N_revenues = mysqli_fetch_array($R_revenues)){

            echo "<option value='$N_revenues[Account_id]'>"." $N_revenues[Account_name] </option>";

        }
                    }
                        }


            public function ownerequity(){
                                                     $connect = new connect_db();{

                            $R_owner_equity = $connect->query("select * from ownerequity where Company_key =  '$_SESSION[company_key]'");
        while($N_owner_equity = mysqli_fetch_array($R_owner_equity)){

            echo "<option value='$N_owner_equity[Account_id]'>"." $N_owner_equity[Account_name] </option>";

        }
    }
                    }

       public  function general(){
$connect = new connect_db();
            $R_assets = $connect->query("select * from general_gournal where company_key =  '$_SESSION[company_key]'");
            while($N_assets = mysqli_fetch_array($R_assets)){

                echo "<option value='$N_assets[credit_account_id]'>"." $N_assets[credit_account_name] </option>";

            }
    }


}


?>