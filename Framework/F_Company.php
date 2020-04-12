<?php

    class D_Company{

        protected  $company_key;
        protected  $manager_key;
        protected  $manager_name;
        protected  $company_name;
        protected  $com_place_name;
        protected  $country;
        protected  $city;
        protected  $tel;
        protected  $tel_plus;
        protected  $open_company;
        protected  $sql;
        protected  $dell_company;
        protected  $comp_edit;
        protected  $D_company_key;

        protected  $password,$two_password;
        protected $Edit_password;
        protected $New_password;


        protected $Edit_email;
        protected $New_email;
        protected  $email,$load;


        public function __construct(){

            if(isset($_POST['open_company'])){
                $this->open_company = htmlspecialchars($_POST['open_company']);

            }

            if(isset($_POST['manager_name'])){
                $this->manager_name =  htmlspecialchars($_POST['manager_name']);

            }

            if(isset($_POST['company_name'])){
                $this->company_name = htmlspecialchars($_POST['company_name']);

            }


            if(isset($_POST['password'])){
                $this->password = htmlspecialchars($_POST['password']);

            }

if(isset($_POST['two_password'])){
    $this->two_password = htmlspecialchars($_POST['two_password']);

}

            if(isset($_POST['email'])){
                $this->email = htmlspecialchars($_POST['email']);

            }

            if(isset($_POST['country'])){
                $this->country = htmlspecialchars($_POST['country']);

            }

            if(isset($_POST['tel'])){
                $this->tel = htmlspecialchars($_POST['tel']);

            }

            if(isset($_POST['tel_plus'])){
                $this->tel_plus = htmlspecialchars($_POST['tel_plus']);

            }

            if(isset($_POST['New_password'])){
                $this->New_password = htmlspecialchars($_POST['New_password']);

            }


            if(isset($_POST['comp_edit'])){
                $this->comp_edit = htmlspecialchars($_POST['comp_edit']);

            }

            if(isset($_POST['D_company_key'])){
                $this->D_company_key = htmlspecialchars($_POST['D_company_key']);

            }

            if(isset($_POST['dell_company'])){
                $this->dell_company = htmlspecialchars($_POST['dell_company']);

            }

            if(isset($_POST['Edit_password'])){
                $this->Edit_password = htmlspecialchars($_POST['Edit_password']);

            }

            if(isset($_POST['New_email'])){
                $this->New_email = htmlspecialchars($_POST['New_email']);

            }

            if(isset($_POST['Edit_email'])){
                $this->Edit_email = htmlspecialchars($_POST['Edit_email']);

            }

            if(isset($_POST['company_key'])){
                $this->company_key = htmlspecialchars($_POST['company_key']);

            }
            if(isset($_POST['load'])){
                $this->load = $_POST['load'];

            }

        }




    }

    $obj = new D_Company();
