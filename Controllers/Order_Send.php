<?php
    /**
include("../Models/Connect_DB.php");
class Order_Send {
    public $order_name;
    public $group_id;
    public $item_name;
    public $item_type;
    public $item_total;
    public $description;
    public $date;
    public $order;

    private  $result;
    private   $moiz;
    public   function My_ajax(){
        $this->moiz = $_POST["order"];
        $obj = new connect_db();

        $this->result = $obj->query("select * from prechese_order_from where order_id = '$this->moiz'");
        $new = mysqli_fetch_array($this->result);

              $this->group_id = $new['group_id'];
              $this->order_name = $new['order_name'];
              $this->item_name = $new['item_name'];
              $this->item_type = $new['item_type'];
              $this->item_total = $new['item_total'];
              $this->description = $new['group_description'];
              $this->date = $new['t_date'];
              $this->order = $new['order_name'];
    }
}
     * */