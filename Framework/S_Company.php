<?php

class F_Company extends  D_Company{

public  function Session(){


if(!empty($this->open_company)){

    $_SESSION['company_name'] =  $this->company_name;//$_POST['company_name'];
    $_SESSION['visitor_name'] = $this->manager_name;//$_POST['manager_name'];
    $_SESSION['company_key'] = mt_rand();
    $_SESSION['manager_key'] = mt_rand();

}
}

}

$obj = new F_Company();
$obj->Session();