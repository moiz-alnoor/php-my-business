<?php

//    include("../Framework/knowledge.php");


    class login{

    private $email;
    private $password;
    private $result_one;

    private $result_two;
    private $job_type_in;

    protected  $login;

    public  function setData(){

if(isset($_POST['login'])){

     $this->login = $_POST['login'];
     $this->email = $_POST['v_email'];
     $this->password = $_POST['v_password'];
}

    }


   public  function Enter_one(){


    if(isset($this->login)){

       $obj = new connect_db();

       $this->result_one = $obj->query("select * from company where email ='$this->email' and  password='$this->password'");
       $company = mysqli_fetch_array($this->result_one);

          if($company['manager_key'] == 111){

              $_SESSION['company_key'] = $company['company_key'];
              $_SESSION['company_name'] = $company['company_name'];
              $_SESSION['manager_key'] = $company['manager_key'];
              $_SESSION['Site'] =  $_SESSION['visitor_name'] = $company['manager_name'];

           header("location:views/moiz.php");

          }

            elseif($company['manager_key'] > 111){

             $_SESSION['company_key'] = $company['company_key'];
             $_SESSION['company_name'] = $company['company_name'];
             $_SESSION['manager_key'] = $company['manager_key'];
             $_SESSION['Company'] =  $_SESSION['visitor_name'] = $company['manager_name'];

            header("location:views/Manager-Home.php");

        }

    }
   }

        public  function Enter_two(){


            if(isset($this->login)){

                $obj = new connect_db();

                $this->result_two = $obj->query("select * from emp where email ='$this->email' and  password='$this->password'");
                $emp = mysqli_fetch_array($this->result_two);

                if($emp['job_type_in']==1){


                    $_SESSION['company_key'] = $emp['company_key'];
                    $_SESSION['company_name'] = $emp['company_name'];
                    $_SESSION['manager_key'] = $emp['manager_key'];
                    $_SESSION['Inventory'] = $_SESSION['visitor_name'] = $emp['emp_name'];
                    $_SESSION['job_type_in'] = $emp['job_type_in'];
                        header("location:views/Inventory.php");

                    }

                if($emp['job_type_in']==2){


                    $_SESSION['company_key'] = $emp['company_key'];
                    $_SESSION['company_name'] = $emp['company_name'];
                    $_SESSION['manager_key'] = $emp['manager_key'];
                    $_SESSION['Sale'] = $_SESSION['visitor_name'] = $emp['emp_name'];
                    $_SESSION['job_type_in'] = $emp['job_type_in'];
                    header("location:views/Sale_Items.php");

                }


else{
    $obj = new know();
    $obj->No_Company();
}            }
        }
    }

    $login = new login();
    $login->setData();
    $login->Enter_one();
    $login->Enter_two();

?>