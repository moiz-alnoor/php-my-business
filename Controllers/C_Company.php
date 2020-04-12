<?php

class C_Company  extends D_Company{

    protected $_manager_key,$_company_key,$_manager_name,$_password,$_email,$_company_name,$_com_place_name,$_country,$_city,$_tel,$_tel_plus;

    public function Data_Company(){

        $connect = new connect_db();

        $sElect =  $connect->query("select * from company  where company_key = '$_SESSION[company_key]' ");
        $new = mysqli_fetch_array($sElect);

        $this->_manager_key = $new['manager_key'];
        $this->_company_key = $new['company_key'];
        $this->_tel = $new['tel'];
        $this->_tel_plus = $new['tel_plus'];
       // $this->_city = $new['city'];
        $this->_country = $new['country'];
        //$this->_com_place_name = $new['com_place_name'];
        $this->_company_name = $new['company_name'];
        $this->_email = $new['email'];
        $this->_password = $new['password'];
        $this->_manager_name = $new['manager_name'];



    }

    public function All_Company(){

        $connect = new connect_db();

        $sElect =  $connect->query("select * from company  where company_key = '$this->company_key' ");
        $new = mysqli_fetch_array($sElect);

        $this->_manager_key = $new['manager_key'];
        $this->_company_key = $new['company_key'];
        $this->_tel = $new['tel'];
        $this->_tel_plus = $new['tel_plus'];
        //$this->_city = $new['city'];
        $this->_country = $new['country'];
        //$this->_com_place_name = $new['com_place_name'];
        $this->_company_name = $new['company_name'];
        $this->_email = $new['email'];
        $this->_password = $new['password'];
        $this->_manager_name = $new['manager_name'];



    }

    public function Select_Company(){

        $connect = new connect_db();
        $sElect =  $connect->query("select * from  company  where company_key not like '$_SESSION[company_key]'");
        while($new = mysqli_fetch_array($sElect)){
            echo "<option value='$new[company_key]'>"." $new[company_name] </option>";
        }

    }

}

