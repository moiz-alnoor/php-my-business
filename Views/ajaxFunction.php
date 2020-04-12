<?php
session_start();

include("../models/connect_db.php");

class ajax{
    public $result;
    public  $moiz;
    public   function My_ajax(){
            $this->moiz = $_POST["value"];
            $obj = new connect_db();

        $this->result = $obj->query("select * from inventory where group_id = '$this->moiz' and company_key = '$_SESSION[company_key]'");
        $new = mysqli_fetch_array($this->result);
        $new['item'];
             echo
        "<br>
        <div class='icon icon-embed'></div>

        <label>بيانات المجموعه
<br><br>
             "."<table id='ajax' border='0' >

              <tr> <td> إسم الصنف</td><td>   $new[item]</td></tr>
              <tr> <td>نوع الصنف</td><td> $new[item_type]</td></tr>
              <tr> <td>الكمــيه</td><td> $new[item_total]</td></tr>
              <tr> <td>المواصفات</td><td> $new[group_description]</td></tr>

              <tr> <td>سعر شراء الوحده</td><td> $new[perches_price_unite]</td></tr>

              <!--<tr> <td>إحمالي تكلفه المجموعـه</td><td> $new[total_cost]</td>-->

              </tr></table>";

    }
}

    $obj = new ajax();
    $obj->My_ajax();
?>
