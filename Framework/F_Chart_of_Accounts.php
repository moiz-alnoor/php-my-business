<?php

    class D_Chart_of_Accounts{


        protected  $dept_account_id;
        protected  $credit_account_id;
        protected  $General_G;
        protected  $S_account_name;
        protected  $amount;
        protected  $note , $t_date;
        protected    $Account_name;
        protected    $assets;
        protected    $liabilities;
        protected    $expenses;
        protected    $owner;
        protected    $revenues;
        protected  $Capital;
        protected  $Capital_balance;
        protected  $Account_id;
        protected  $dell_A,$Account_balance,$Re_Gn;


        public  function __construct(){



            $this->Account_id = mt_rand();




if(isset ($_POST['Re_Gn'])){
    $this->Re_Gn = $_POST['Re_Gn'];
}

            if(isset ($_POST['S_account_name'])){
                $this->S_account_name = $_POST['S_account_name'];
            }



            if(isset ($_POST['dept_account_id'])){
                $this->dept_account_id = $_POST['dept_account_id'];
            }

            if(isset ($_POST['credit_account_id'])){
                $this->credit_account_id = $_POST['credit_account_id'];
            }

            if(isset ($_POST['amount'])){

                $this->amount = $_POST['amount'];
            }

            if(isset ($_POST['G_No'])){

                $this->G_No = $_POST['G_No'];
            }
            if(isset ($_POST['note'])){

                $this->note = $_POST['note'];
            }
            if(isset ($_POST['General_G'])){
                $this->General_G = $_POST['General_G'];
            }


            $this->t_date = date("y,m,d");



            if(isset ($_POST['Capital_balance'])){
                $this->Capital_balance = $_POST['Capital_balance'];
            }

            if(isset ($_POST['Account_balance'])){
                $this->Account_balance = $_POST['Account_balance'];
            }

            if(isset ($_POST['Account_name'])){
                $this->Account_name = $_POST['Account_name'];
            }

            if(isset ($_POST['expenses'])){
                $this->expenses = $_POST['expenses'];
            }


            if(isset ($_POST['Capital_balance'])){
                $this->Capital_balance = $_POST['Capital_balance'];
            }


            if(isset($_POST['assets'])){

            $this->assets = $_POST['assets'];

            }

            if(isset($_POST['Capital'])){


                $this->Capital = $_POST['Capital'];


            }

            if(isset($_POST['owner'])){

                $this->owner= $_POST['owner'];

            }


            if(isset($_POST['liabilities'])){

                $this->liabilities = $_POST['liabilities'];

            }

            if(isset($_POST['revenues'])){

            $this->revenues = $_POST['revenues'];

            }
            if(isset($_POST['dell_A'])){

                $this->dell_A = $_POST['dell_A'];

            }


              }




    }

   $obj = new D_Chart_of_Accounts();


?>