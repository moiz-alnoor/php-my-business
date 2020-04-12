<?php


    class M_Employee extends  D_Employee {

        public function insert(){
if(isset($this->new_emp) and ($this->emp_name)){
            $connect_db = new connect_db();
            $this->sql = $connect_db->query("insert into emp
         (company_name,company_key,manager_key,emp_key,emp_name,job_type_in,tel,
         tel_plus,city,block,salary,alawa,bdl,hafez,email,password,date_register)
          values
          ('$_SESSION[company_name]','$_SESSION[company_key]','$_SESSION[manager_key]',
          '$this->emp_key','$this->emp_name',
          '$this->job_type_in','$this->tel','$this->tel_plus',
          '$this->city','$this->block','$this->salary','$this->alawa','$this->bdl','$this->hafez',
          '$this->email','$this->password','$this->date_register')");

            if($this->sql){
                $k = new know();
                $k->Emp_new();
            }}

        }
        public function dell(){
            if(isset($this->emp_dell) and ($this->emp_name)){

                $connect_db = new connect_db();
                $this->sql = $connect_db->query("delete  from emp  where company_key = '$_SESSION[company_key]'

                 and emp_key = '$this->__emp_key'");


                    $k = new know();
                    $k->Employee_Dell();

                }




            }

        public function update(){
            if(isset($this->emp_edit)){
            $connect_db = new connect_db();
 $uDAte =    $connect_db->query("update emp set emp_name = '$this->emp_name',
                                                tel = '$this->tel',
                                                 tel_plus = '$this->tel_plus',
                                                  city = '$this->city',
                                                  job_type_in = '$this->job_type_in',
                                                   block = '$this->block',
                                                    salary = '$this->salary',
                                                     alawa = '$this->alawa',
                                                      bdl = '$this->bdl',
                                                      hafez = '$this->hafez',
                                                        date_register = '$this->date_register'
                                                where emp_key = '$this->__emp_key' and  company_key = '$_SESSION[company_key]'");

                if($uDAte){
                    $k = new know();
                    $k->Employee_Edit();


                }
            }
        }


    }
    $obj = new M_Employee();
    $obj->insert();
    $obj->dell();
$obj->update();
