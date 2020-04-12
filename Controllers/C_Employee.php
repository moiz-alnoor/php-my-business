<?php

    class C_Employee  extends D_Employee{

protected $_job_type_in,$_date_register,$_emp_key,$_hafez,$_bdl,$_alawa,$_tel,$_tel_plus,$_block,$_salary,$_city,$_emp_name;

    public function selEct_Employee_name(){
        $connect = new connect_db();
        $sElect =  $connect->query("select * from emp where company_key = '$_SESSION[company_key]'");
        while($new = mysqli_fetch_array($sElect)){
            echo "<option value='$new[emp_key]'>"." $new[emp_name] </option>";
        }
    }

    public function Select_data(){

        $connect = new connect_db();
        $sElect =  $connect->query("select * from emp  where emp_key = '$this->__emp_key' and company_key = '$_SESSION[company_key]'");
        $new = mysqli_fetch_array($sElect);
            $this->_emp_name = $new['emp_name'];
            $this->_emp_key = $new['emp_key'];
            $this->_tel = $new['tel'];
            $this->_tel_plus = $new['tel_plus'];
            $this->_city = $new['city'];
            $this->_block = $new['block'];
            $this->_salary = $new['salary'];
            $this->_alawa = $new['alawa'];
            $this->_bdl = $new['bdl'];
            $this->_hafez = $new['hafez'];
        $this->_job_type_in = $new['job_type_in'];
            $this->_date_register = $new['date_register'];



    }
}