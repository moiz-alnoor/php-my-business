<?php
    session_start();
   include("../models/connect_db.php");

    class ajaxOrder{
        public $result;
        public  $moiz;
        public   function My_ajax(){
           $this->moiz = $_POST["value"];
            $obj = new connect_db();

            $this->result = $obj->query("select * from prechese_order_from where order_id = '$this->moiz'");
            $new = mysqli_fetch_array($this->result);
            <input type='text' name='item_total' value='$new[order_name]'>
        </label>

        <label> إسم الصنف
            <input type='text' name='item_total' value='$new[item_name]'>
        </label>

        <label>نوع الصنف
            <input type='text' name='item_total' value='$new[item_type]'>
        </label>

        <label> سعر شراء الوحده
            <input type='text' name='item_total' value=''>
        </label>
    </article>
    <article id='col-3'>

        <label> الكميه
            <input type='text' name='item_total' value='$new[item_total]'>
        </label>

        <label>إسم المجموعه
            <input type='text' name='item_total' value='$new[item_type]'>
        </label>

        <label> المواصفات
            <textarea  name='item_total'  value='$new[group_description]'></textarea>
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

    <input type='submit' name='' value='حزف الطلب'>
</label>

<label>

    <input type='submit' name='' value='إستلام الطلب'>
</label>
    </article>";
     //    echo    $ss = $new['order_name'];
        }
    }

    $order = new ajaxOrder();
    $order->My_ajax();
?>
