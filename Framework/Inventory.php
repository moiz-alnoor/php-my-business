<?php

    class Data_inventory{

protected   $ajax_post;
protected $other;
        protected  $Register;
        protected  $Viewer;

        protected  $company_name;
        protected  $order_to;

        protected  $purchaser;
        protected  $t_date;

        protected  $item;
        protected  $item_type;

        protected  $item_total;
        protected  $inventory_old;
        protected  $inventory_new;

        protected  $perches_price_unite;
        protected  $group_name;
        protected  $group_description;

        protected  $group_id;
        protected  $order_name;

        protected $order_id;
        protected $delete_to;

        protected $delete_from;
        protected $order;

        protected $dell;
        protected $resive;

        protected $group_id_R;
    protected $tax;
        protected $discount;
        protected $group_id_i;

        protected $Sale;
        protected $Resale;
protected $RE_Inventory;

 function __construct(){

     if(isset ($_POST['RE_Inventory'])){
     $this->RE_Inventory = $_POST['RE_Inventory'];
     }

     if(isset ($_POST['purchaser'])){
         $this->purchaser = $_POST['purchaser'];
     }

     if(isset ($_POST['Sale'])){

         $this->Sale= $_POST['Sale'];
     }
     if(isset ($_POST['Resale'])){

         $this->Resale= $_POST['Resale'];
     }

     if(isset ($_POST['dell'])){

         $this->dell= $_POST['dell'];
     }
     if(isset ($_POST['resive'])){
       $this->resive= $_POST['resive'];
     }
     if(isset ($_POST['order'])){
         $this->order= $_POST['order'];
     }

     if(isset ($_POST['Viewer'])){
         $this->Viewer = $_POST['Viewer'];
     }
     if(isset ($_POST['Register'])){
         $this->Register = $_POST['Register'];
     }

     if(isset ($_POST['order_id'])){
         $this->order_id = $_POST['order_id'];
     }
     if(isset ($_POST['tax'])){
         $this->tax = $_POST['tax'];
     }

     if(isset ($_POST['discount'])){
         $this->discount = $_POST['discount'];
     }

     if(isset ($_POST['order_name'])){
         $this->order_name = $_POST['order_name'];
     }

     if(isset ($_POST['other'])){
         $this->other = $_POST['other'];
     }

     if(isset ($_POST['order_name'])){
         $this->order_name = htmlspecialchars($_POST['order_name']);
     }

     if(isset ($_POST['company_name'])){
         $this->company_name = htmlspecialchars($_POST['company_name']);
     }
     if(isset ($_POST['inventory_old'])){
         $this->inventory_old = $_POST['inventory_old'];
     }

     if(isset ($_POST['inventory_new'])){
         $this->inventory_new = $_POST['inventory_new'];
     }

     if(isset ($_POST['order_to'])){
         $this->order_to  = $_POST['order_to'];
     }

     if(isset ($_POST['purchaser'])){
         $this->purchaser = $_POST['purchaser'];
     }
     if(isset ($_POST['group_id'])){
      $this->group_id  = $_POST['group_id'];
     }

     if(isset ($_POST['group_id_R'])){
         $this->group_id_R  = htmlspecialchars($_POST['group_id_R']);
     }

     if(isset ($_POST['group_id_i'])){
         $this->group_id_i  = htmlspecialchars($_POST['group_id_i']);
     }

     if(isset ($_POST['item_type'])){
         $this->item_type  = htmlspecialchars($_POST['item_type']);
     }

     if(isset ($_POST['inventory'])){
         $this->inventory = $_POST['inventory'];
     }

     if(isset ($_POST['item'])){
         $this->item = $_POST['item'];
     }

     if(isset ($_POST['item_total'])){
         $this->item_total = htmlspecialchars($_POST['item_total']);
     }

     if(isset ($_POST['perches_price_unite'])){
         $this->perches_price_unite = $_POST['perches_price_unite'];
     }

     if(isset ($_POST['group_name'])){
         $this->group_name = htmlspecialchars($_POST['group_name']);
     }

     if(isset ($_POST['group_description'])){
         $this->group_description = htmlspecialchars($_POST['group_description']);
     }

     if(isset ($_POST['vendor'])){
         $this->vendor = $_POST['vendor'];
     }

     if(isset ($_POST['t_date'])){
         $this->t_date = htmlspecialchars($_POST['t_date']);
     }

 }


}

$obj = new Data_inventory();

?>