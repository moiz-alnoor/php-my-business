<?php    class M_General_G extends D_Chart_of_Accounts{        protected $D_A_name;        public function insertGeneral(){            if(isset($this->General_G) ){                $connect_db = new connect_db();                // Capital                $C = $connect_db->query("select * from capital where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_C = mysqli_fetch_array($C);                $C_A_name = $N_C['Account_name'];                $Old_D_A_balance = $N_C['Capital_balance'];                    $New_D_A_balance = $Old_D_A_balance + $this->amount;                    $connect_db->query("update capital set Capital_balance ='$New_D_A_balance' where Account_id = '$this->credit_account_id' and  company_key = '$_SESSION[company_key]'");              // Dept_account              // 1 - assets            $connect_db = new connect_db();  $D_assets  =  $connect_db->query("select * from assets where Account_id = '$this->dept_account_id' and  company_key = '$_SESSION[company_key]'");  $N_D_assets = mysqli_fetch_array($D_assets);                if($N_D_assets){                    $this->D_A_name = $N_D_assets['Account_name'];                    $Old_D_A_balance = $N_D_assets['Account_balance'];                    $New_D_A_balance = $Old_D_A_balance + $this->amount;$connect_db->query("update assets set Account_balance ='$New_D_A_balance' where Account_id = '$this->dept_account_id' and  company_key = '$_SESSION[company_key]'");                }                // 2- expenses  $D_expenses =  $connect_db->query("select * from expenses where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_D_expenses = mysqli_fetch_array($D_expenses);                if($N_D_expenses){                    $this->D_A_name = $N_D_expenses['Account_name'];                    $Old_D_A_balance = $N_D_expenses['Account_balance'];                    $New_D_A_balance = $Old_D_A_balance + $this->amount;                    $connect_db->query("update expenses set Account_balance ='$New_D_A_balance' where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                }                // 3 - liabilities  $D_liabilities =  $connect_db->query("select * from liabilities where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_D_liabilities = mysqli_fetch_array($D_liabilities);                if($N_D_liabilities){                    $this->D_A_name = $N_D_liabilities['Account_name'];                    $Old_D_A_balance = $N_D_liabilities['Account_balance'];                    $New_D_A_balance = $Old_D_A_balance - $this->amount;                    $connect_db->query("update liabilities set Account_balance ='$New_D_A_balance' where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                }                // 4 - Owner  $D_owner_equity  =   $connect_db->query("select * from ownerequity where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_D_owner_equity = mysqli_fetch_array($D_owner_equity);                if($N_D_owner_equity){                    $this->D_A_name = $N_D_owner_equity['Account_name'];                    $Old_D_A_balance = $N_D_owner_equity['Account_balance'];                    $New_D_A_balance = $Old_D_A_balance + $this->amount;                    $connect_db->query("update ownerequity set Account_balance ='$New_D_A_balance' where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                }                // 5 - Revenues ??  $D_revenues = $connect_db->query("select * from revenues where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_D_revenues = mysqli_fetch_array($D_revenues);                if($N_D_revenues){                    $this->D_A_name = $N_D_revenues['Account_name'];                    $Old_D_A_balance = $N_D_revenues['Account_balance'];                    $New_D_A_balance = $Old_D_A_balance + $this->amount;                    $connect_db->query("update revenues set Account_balance ='$New_D_A_balance' where Account_id = '$this->dept_account_id' and  Company_key = '$_SESSION[company_key]'");                }                // Credit_account                //  1 - assets                $C_assets  =  $connect_db->query("select * from assets where Account_id = '$this->credit_account_id' and  company_key = '$_SESSION[company_key]'");                $N_C_assets = mysqli_fetch_array($C_assets);                if($N_C_assets){                    $C_A_name = $N_C_assets['Account_name'];                    $Old_A_balance = $N_C_assets['Account_balance'];                    $New_A_balance = $Old_A_balance - $this->amount;                    $connect_db->query("update assets set Account_balance ='$New_A_balance' where Account_id = '$this->credit_account_id' and  company_key = '$_SESSION[company_key]'");                }                //  2 - expenses ??                $C_expenses =  $connect_db->query("select * from expenses where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_C_expenses = mysqli_fetch_array($C_expenses);                if($N_C_expenses){                    $C_A_name = $N_C_expenses['Account_name'];                    $Old_A_balance = $N_C_expenses['Account_balance'];                    $New_A_balance = $Old_A_balance - $this->amount;                    $connect_db->query("update expenses set Account_balance ='$New_A_balance' where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                }                //  3 - Liabilities                $C_liabilities =  $connect_db->query("select * from liabilities where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_C_liabilities = mysqli_fetch_array($C_liabilities);                if($N_C_liabilities){                    $C_A_name = $N_C_liabilities['Account_name'];                    $Old_A_balance = $N_C_liabilities['Account_balance'];                    $New_A_balance = $Old_A_balance + $this->amount;                    $connect_db->query("update liabilities set Account_balance ='$New_A_balance' where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                }                // 4 - owner_equity ??                $C_owner_equity  =   $connect_db->query("select * from ownerequity where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_C_owner_equity = mysqli_fetch_array($C_owner_equity);                if($N_C_owner_equity){                    $C_A_name = $N_C_owner_equity['Account_name'];                    $Old_A_balance = $N_C_owner_equity['Account_balance'];                    $New_A_balance = $Old_A_balance + $this->amount;                    $connect_db->query("update ownerequity set Account_balance ='$New_A_balance' where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                }                // 5 - Revenues                $C_revenues = $connect_db->query("select * from revenues where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                $N_C_revenues = mysqli_fetch_array($C_revenues);                if($N_C_revenues){                    $C_A_name = $N_C_revenues['Account_name'];                    $Old_A_balance = $N_C_revenues['Account_balance'];                    $New_A_balance = $Old_A_balance + $this->amount;                    $connect_db->query("update revenues set Account_balance ='$New_A_balance' where Account_id = '$this->credit_account_id' and  Company_key = '$_SESSION[company_key]'");                }                $general = $connect_db->query("insert into general_gournal(amount,dept_account_name,credit_account_name,note,t_date,company_key,credit_account_id,dept_account_id)                values('$this->amount','$this->D_A_name','$C_A_name','$this->note','$this->t_date','$_SESSION[company_key]','$this->credit_account_id','$this->dept_account_id')");  $obj = new know();                $obj->General();            }        }    }    $obj = new M_General_G();    $obj->insertGeneral();?>