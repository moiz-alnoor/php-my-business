<?php

 class M_Chart_of_Accounts extends  D_Chart_of_Accounts{



public  function Capital(){


 if(isset($this->Capital_balance)){

 $connect = new connect_db();

 $S = $connect->query("select Account_id from capital where Company_key = '$_SESSION[company_key]'");

 $new = mysqli_fetch_array($S);

 if ($new['Account_id'] ){

     $k	 = new know();

     $k->Exist();
 }

    else{

    $A = $connect->query("insert into capital(Company_key,Capital_balance,Account_name,Account_id)
    values  ('$_SESSION[company_key]','$this->Account_balance','رأس المال','$this->Account_id')");


        $k = new know();
        $k->Accounts();

 }

}
}


     function insertAccounts(){



         if(!empty($this->assets)and($this->Account_name)){



    $connect = new connect_db();
    $A = $connect->query("insert into assets(Company_key,Account_id,Account_name,Account_balance)
    values
     ('$_SESSION[company_key]','$this->Account_id','$this->Account_name','$this->Account_balance')");

    if($A){

    $k = new know();

     $k->Accounts();
}

}


if(isset($this->liabilities) and !empty($this->Account_name)){
$connect = new connect_db();
$L = $connect->query("insert into liabilities(Company_key,Account_id,Account_name,Account_balance) values
('$_SESSION[company_key]','$this->Account_id','$this->Account_name','$this->Account_balance')");
if($L){
    $k = new know();

    $k->Accounts();
}
}

if(isset($this->expenses) and !empty ($this->Account_name)){
$connect = new connect_db();
$E = $connect->query("insert into expenses(Company_key,Account_id,Account_name,Account_balance) values
('$_SESSION[company_key]','$this->Account_id','$this->Account_name','$this->Account_balance')");
if($E){
    $k = new know();

    $k->Accounts();
}
}

if(isset($this->owner) and !empty($this->Account_name)){
$connect = new connect_db();
$O = $connect->query("insert into ownerequity(Company_key,Account_id,Account_name,Account_balance) values
 ('$_SESSION[company_key]','$this->Account_id','$this->Account_name','$this->Account_balance')");
if($O){
    $k = new know();

    $k->Accounts();
}
}

if(isset($this->revenues) and !empty ($this->Account_name)){
$connect = new connect_db();
$R = $connect->query("insert into revenues(Company_key,Account_id,Account_name,Account_balance) values
 ('$_SESSION[company_key]','$this->Account_id','$this->Account_name','$this->Account_balance')");
if($R){
    $k = new know();

    $k->Accounts();

}

}
         $connect = new connect_db();
         if(isset ($this->dell_A)){
             $connect->query("delete from assets where Account_id = '$this->dell_A' and company_key = $_SESSION[company_key]");


             $connect->query("delete from expenses where Account_id = '$this->dell_A' and company_key = $_SESSION[company_key]");

             $connect->query("delete from  liabilities where Account_id = '$this->dell_A' and company_key = $_SESSION[company_key]");

             $connect->query("delete from ownerequity where Account_id = '$this->dell_A' and company_key = $_SESSION[company_key]");

             $connect->query("delete from  revenues where Account_id = '$this->dell_A' and company_key = $_SESSION[company_key]");

             $connect->query("delete from  Capital where Account_id = '$this->dell_A' and company_key = $_SESSION[company_key]");
         }
  }
}



   $obj = new M_Chart_of_Accounts();
    $obj->Capital();
   $obj->insertAccounts();

?>