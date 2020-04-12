<?php
    session_start();
   include("../models/connect_db.php");

    class ajaxOrder{
        public $result;
        public  $moiz;
        public   function My_ajax(){
           $this->moiz = $_POST["value"];
            $obj = new connect_db();

            $this->result = $obj->query("select * from prechese_order_to where order_id = '$this->moiz' ");
            $new = mysqli_fetch_array($this->result);

            echo"
  <form action='Resive-Order.php' method='post'>
   <article id='col-2'>
<label>


<input type='hidden' name='group_id'>
<input type='text' name='company_name_to' value='$new[company_name_to]'>

<input type='hidden' name='order_id' value='$new[order_id]'>
</label>
        <label> إسم الطلب
            <input type='text' name='item_total' value='$new[order_name]'>
        </label>

        <label> إسم الصنف
            <input type='text' name='item' value='$new[item_name]'>
        </label>

        <label>نوع الصنف
            <input type='text' name='item_type' value='$new[item_type]'>
        </label>

        <label> سعر شراء الوحده
            <input type='text' name='perches_price_unite' value=''>
        </label>
    </article>
    <article id='col-3'>

        <label> الكميه
            <input type='text' name='item_total' value='$new[item_total]'>
        </label>

        <label>إسم المجموعه
            <input type='text' name='group_name' value='$new[item_type]'>
        </label>

        <label> المواصفات
            <input type='text' id='area' name='group_description' value='$new[group_description]'>
        </label>
    </article>
    <article id='col-4'>
        <label> تاريخ تقديم الطلب
            <input type='text' name='item_total' value='$new[t_date]'>
        </label>

        <label> تاريخ إستلام الطلب
            <input type='text' name='item_totalk' value=''>
        </label>
<label>

    <input type='submit' name='delete_to' value='حزف الطلب'>
</label>

    </article>
    </form>
    ";
        }
    }

    $order = new ajaxOrder();
    $order->My_ajax();
?>
