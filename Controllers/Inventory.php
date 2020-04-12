<?php

 class inventory extends  Data_inventory{

     protected  $_order_id,
       $_company_name_from,  $id,$_group_id,$_company_name,$_order_name,$_item_total,$_t_date,$_group_name,$_group_description,$_item_name,$_item_type,$_perches_price_unite;


        public function Description(){
             $connect = new connect_db();
             $sElect =  $connect->query("select * from inventory where company_key = '$_SESSION[company_key]'");
             while($new = mysqli_fetch_array($sElect)){
             echo "<option value='$new[group_id]'>"." $new[group_name] </option>";


        }
        }
        public function selEct_Company(){
            $connect = new connect_db();
            $sElect =  $connect->query("select * from company where company_key not like '$_SESSION[company_key]' and manager_key not  like '111'");
            while($new = mysqli_fetch_array($sElect)){
                echo "<option value='$new[company_name]'>"." $new[company_name] </option>";


            }
        }
            public function selEct_Invoice(){
                $connect = new connect_db();
                $sElect =  $connect->query("select * from invoice_one where company_key = '$_SESSION[company_key]'");
                while($new = mysqli_fetch_array($sElect)){
                    echo "<option value='$new[purchaser]'>"." $new[purchaser] </option>";



                }

            }

     public function selEct_Order_to(){
         $connect = new connect_db();
         $sElect =  $connect->query("select * from prechese_order_to where company_name_to = '$_SESSION[company_name]'");
         while($new = mysqli_fetch_array($sElect)){
             echo "<option value='$new[order_id]'>"." $new[order_name] </option>";
         }
     }
        public function selEct_Order_from(){
            $connect = new connect_db();
            $sElect =  $connect->query("select * from prechese_order_from  where  company_key = '$_SESSION[company_key]'");
            while($new = mysqli_fetch_array($sElect)){
                echo "<option value='$new[order_id]'>"." $new[order_name] </option>";
            }
        }


                public function Order_from(){

                 $connect = new connect_db();
if(isset($this->order_id)){
                 $sElect =  $connect->query("select * from prechese_order_from  where  company_key = '$_SESSION[company_key]' and order_id = '$this->order_id' ");
                 while($new = mysqli_fetch_array($sElect)){
                  $this->id =  $new['order_id'];
                     $this->_company_name =  $new['company_name_to'];
                     $this->_order_name =  $new['order_name'];
                     $this->_group_name =  $new['group_name'];
                     $this->_group_description =  $new['group_description'];
                     $this->_item_name =  $new['item_name'];
                     $this->_item_type =  $new['item_type'];
                     $this->_item_total =  $new['item_total'];
                     $this->_t_date =  $new['t_date'];
                     $this->_perches_price_unite = $new['perches_price_unite'];
                     $this->_group_id = $new['group_id'];
                     $this->_order_id = $new['order_id'];
                 }
}
                   }



     public function Order_To(){

         $connect = new connect_db();
         if(isset($this->order_id)){
             $sElect =  $connect->query("select * from prechese_order_to  where  company_name_to = '$_SESSION[company_name]' and order_id = '$this->order_id' ");
             while($new = mysqli_fetch_array($sElect)){
                 $this->_company_name_from =  $new['company_name_from'];
                 $this->_order_id =  $new['order_id'];
                 $this->_company_name =  $new['company_name_to'];
                 $this->_order_name =  $new['order_name'];
                 $this->_group_name =  $new['group_name'];
                 $this->_group_description =  $new['group_description'];
                 $this->_item_name =  $new['item_name'];
                 $this->_item_type =  $new['item_type'];
                 $this->_item_total =  $new['item_total'];
                 $this->_t_date =  $new['t_date'];
                 $this->_perches_price_unite = $new['perches_price_unite'];
                 $this->_group_id = $new['group_id'];
                 $this->_order_id = $new['order_id'];
             }
         }
     }



     public function selEct_Reports(){
         $connect = new connect_db();
         $sElect =  $connect->query("select group_name from Reports where company_key = '$_SESSION[company_key]'");
         while($new = mysqli_fetch_array($sElect)){
             echo "<option value='$new[group_name]'>"." $new[group_name] </option>";
         }
     }



            public  function  aJax(){
    $this->ajax_post = $_POST['value'];
    if(!empty ($this->ajax_post)){

    $connect = new connect_db();
    $result = $connect->query("select * from inventory where group_id = '$this->ajax_post'");
    $new = mysqli_fetch_array($result);
     $this->item_ajax  = $new['item'];
}
}

 }


?>