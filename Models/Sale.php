<?php


    class M_Sale extends  Data_inventory{

/*

        public  function Insert_Sale(){

       if(isset ($this->Register)){


           $connect = new connect_db();
 $R  = $connect->query("select * from inventory where group_id = '$this->group_id_i' and  company_key = '$_SESSION[company_key]'");
           $Se = mysqli_fetch_array($R);

           $item  =  $Se['item'];
           $item_type =  $Se['item_type'];
           $description =  $Se['group_description'];



           $connect->query("insert into invoice_two(company_name,company_key,group_id,purchaser,item_total,perches_price_unite,t_date,Empolyee,
item,item_type,description )
 values
       ('$_SESSION[company_name]','$_SESSION[company_key]','$this->group_id_i','$this->purchaser','$this->item_total',
       '$this->perches_price_unite','$this->t_date','$_SESSION[visitor_name]','$item','$item_type','$description')");



$obj = new know();
           $obj->Sale_Invoice();

        }
        }


*/

        public  function  Sale(){

            if(!empty($this->Sale) and ($this->purchaser)){

                $dell = new connect_db();

                $Inv = $dell->query("select *  from inventory where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]'");
                $moiz = mysqli_fetch_array($Inv);

                   $group_id  =  $moiz['group_id'];
                 $item_total  =  $moiz['item_total'];
                 $perches_price_unite  =  $moiz['perches_price_unite'];


                $item  =  $moiz['item'];
                $item_type =  $moiz['item_type'];
                $description =  $moiz['group_description'];


                if($item_total  >= $this->item_total){


                    $g = $item_total -  $this->item_total;
                    $new_cost = $perches_price_unite * $g;


                    $uDAte = $dell->query("update inventory set total_cost = '$new_cost' , item_total = '$g'  where group_id = '$group_id' and  company_key = '$_SESSION[company_key]' ");

                  $_SESSION['Dept'] =  $total_cost = ($this->other + ($this->perches_price_unite * $this->item_total) +
                          $this->tax) - $this->discount;


                    $dell->query("insert into invoice_one(company_name,company_key,group_id,purchaser,item_total,perches_price_unite,t_date,Empolyee,




item,item_type,description,total_cost,discount,tax,other)
 values
       ('$_SESSION[company_name]','$_SESSION[company_key]','$this->group_id','$this->purchaser','$this->item_total',
       '$this->perches_price_unite','$this->t_date','$_SESSION[visitor_name]','$item','$item_type','$description',
       '$total_cost','$this->discount','$this->tax','$this->other')");



                    if($uDAte and $moiz){
header("location:general_gournal.php");

    //$obj = new know();
    //$obj->Sale();

}
                }

    elseif($item_total   <  $this->item_total){
        $bj = new know();
        $bj->No_sale();

    }



}

        }








        public  function Resive(){
            if(isset($this->resive) and isset($this->group_id)){

                $dell = new connect_db();

                $Inv = $dell->query("select *  from inventory where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]'");
                $moiz = mysqli_fetch_array($Inv);
if($moiz){

                $group_id  =  $moiz['group_id'];
           $item_total  =  $moiz['item_total'];
                $perches_price_unite  =  $moiz['perches_price_unite'];


                $item  =  $moiz['item'];
                $item_type =  $moiz['item_type'];
                $description =  $moiz['group_description'];


                if($item_total  >= $this->item_total){

                    $_SESSION['Dept'] = $total_cost2 = (($this->perches_price_unite * $this->item_total) +
                        $this->other + $this->tax - $this->discount);

                    $g = $item_total -  $this->item_total;
                    $new_cost = $perches_price_unite * $g;


                    $uDAte = $dell->query("update inventory set total_cost = '$new_cost' , item_total = '$g'  where group_id = '$group_id' and  company_key = '$_SESSION[company_key]' ");
                    $_SESSION['Dept'] =  $total_cost = ($this->other + ($this->perches_price_unite * $this->item_total) +
                    $this->tax) - $this->discount;


                    $dell->query("insert into invoice_one(company_name,company_key,group_id,purchaser,item_total,perches_price_unite,t_date,Empolyee,




item,item_type,description,total_cost,discount,tax,other)
 values
       ('$_SESSION[company_name]','$_SESSION[company_key]','$this->group_id','$this->purchaser','$this->item_total',
       '$this->perches_price_unite','$this->t_date','$_SESSION[visitor_name]','$item','$item_type','$description',
       '$total_cost','$this->discount','$this->tax','$this->other')");



                    // to -- order_id

                    $S = $dell->query("select item_total from prechese_order_to  where  order_id = '$this->order_id'");
                    $tot = mysqli_fetch_array($S);


                  if($tot['item_total'] <= $this->item_total){

                      $dell->query("delete  from prechese_order_to  where order_id = '$this->order_id'");

                  }

                    elseif($tot['item_total'] > $this->item_total){
                         $stl = $tot['item_total'] - $this->item_total;
                         $dell->query("update prechese_order_to set item_total='$stl'
                         where order_id = '$this->order_id'");

                    }



                  header("location:general_gournal.php");

                }

elseif($moiz['item_total']  <  $this->item_total){
                    $bj = new know();
                    $bj->No_sale();


    echo $moiz['item_total'];


}


        }
   }
        }

        public  function Dell_order(){

            if(!empty($this->dell) and ($this->order_id) ){
                $dell = new connect_db();

                $dell->query("delete  from  prechese_order_to where order_id = '$this->order_id' and  company_name_to = '$_SESSION[company_name]'");

                $k = new know();
                $k->dell();

            }

        }



}


    $obj = new M_Sale();
//    $obj->Insert_Sale();
    $obj->Sale();
    $obj->Dell_order();
    $obj->Resive();
    ?>












