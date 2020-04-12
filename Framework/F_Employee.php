<?php

class D_Employee{

    protected  $company_name;
    protected  $company_key;
    protected  $manager_key;
    protected  $emp_key,$__emp_key;
    protected  $emp_name;
    protected  $job_type;
    protected  $tel;
    protected  $tel_plus;
    protected  $city;
    protected  $block;
    protected  $salary;
    protected  $alawa;
    protected  $bdl;
    protected   $sql;
    protected  $hafez;
    protected  $email;
    protected  $password;
    protected  $date_register;
    protected  $new_emp,$emp_dell,$emp_edit;


    function __construct(){

        $this->emp_key = mt_rand();
if(isset($_POST['emp_dell'])){
    $this->emp_dell = $_POST['emp_dell'];
}


        if(isset($_POST['emp_edit'])){
            $this->emp_edit = $_POST['emp_edit'];
        }


        if(isset($_POST['__emp_key'])){
            $this->__emp_key =  $_POST['__emp_key'];
        }

        if(isset($_POST['emp_name'])){
            $this->emp_name = htmlspecialchars($_POST['emp_name']);
        }


        if(isset($_POST['job_type'])){
            $this->job_type = htmlspecialchars($_POST['job_type']);
        }

        if(isset($_POST['job_type_in'])){
            $this->job_type_in = htmlspecialchars($_POST['job_type_in']);
        }

        if(isset($_POST['tel'])){

            $this->tel = htmlspecialchars($_POST['tel']);
        }


        if(isset($_POST['tel_plus'])){

            $this->tel_plus = htmlspecialchars($_POST['tel_plus']);
        }

        if(isset($_POST['city'])){

            $this->city = htmlspecialchars($_POST['city']);
        }
        if(isset($_POST['block'])){

            $this->block = htmlspecialchars($_POST['block']);
        }

        if(isset($_POST['salary'])){

            $this->salary = htmlspecialchars($_POST['salary']);
        }
        if(isset($_POST['alawa'])){

            $this->alawa = htmlspecialchars($_POST['alawa']);
        }

        if(isset($_POST['bdl'])){

            $this->bdl = htmlspecialchars($_POST['bdl']);
        }
        if(isset($_POST['hafez'])){

            $this->hafez = htmlspecialchars($_POST['hafez']);
        }

        if(isset($_POST['hafez'])){

            $this->hafez = htmlspecialchars($_POST['hafez']);
        }
        if(isset($_POST['email'])){

            $this->email = htmlspecialchars($_POST['email']);
        }
        if(isset($_POST['password'])){

            $this->password = htmlspecialchars($_POST['password']);
        }
        if(isset($_POST['date_register'])){

            $this->date_register = htmlspecialchars($_POST['date_register']);
        }

        if(isset($_POST['new_emp'])){

            $this->new_emp = $_POST['new_emp'];
   }





    }


        }



    $obj = new D_Employee();

?>