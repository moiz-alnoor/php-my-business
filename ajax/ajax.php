<?php

include("../models/connect_db.php");

 // @$value = $_POST["value"];
   // echo $value;
class ajax{
    public  $new_company;
    private $value;
    public  function My_ajax(){
        $this->value = $_POST["value"];
if(!empty ($this->value)){
        $obj = new connect_db();
        $result = $obj->query("select * from company where company_name = '$this->value'");
        $new = mysqli_fetch_array($result);
        $this->new_company = $new['manager_name'];
    echo "_______________________<br>";
}
        }
}
$obj = new ajax();
    $obj->My_ajax();
     $obj->new_company;

?>