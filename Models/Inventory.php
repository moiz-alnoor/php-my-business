<?php

   class M_inventory extends  Data_inventory{

private $From_group_id;

    public function Inventory(){

        $connect_db = new connect_db();

           if(isset($this->inventory_new) and ($this->item)){

      $New =  $connect_db->query("insert into inventory(company_key,item,item_type,item_total,perches_price_unite,
       group_name,group_description,t_date)values('$_SESSION[company_key]','$this->item','$this->item_type','$this->item_total',
       '$this->perches_price_unite','$this->group_name','$this->group_description','$this->t_date')");


               $_SESSION['Dept'] = $total_cost = (($this->perches_price_unite * $this->item_total) + $this->other + $this->tax - $this->discount);



               $Reports = $connect_db->query("insert into Reports(company_key,item,item_type,item_total,perches_price_unite,
group_name,group_description,t_date,total_cost,discount,tax,other)
 values
       ('$_SESSION[company_key]','$this->item','$this->item_type','$this->item_total','$this->perches_price_unite','$this->group_name',
       '$this->group_description','$this->t_date','$total_cost','$this->discount','$this->tax','$this->other')");


               if($New and $Reports){

    header("location:general_gournal.php");

}
            }







        if(isset($this->group_id)and($this->inventory_old)){


            $connect_db = new connect_db();
            $Inv  = $connect_db->query("select * from inventory where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]'");
            $moiz = mysqli_fetch_array($Inv);

            $item  =  $moiz['item'];
            $item_type =  $moiz['item_type'];
            $group_id =  $moiz['group_id'];
            $group_name =  $moiz['group_name'];
            $group_description =  $moiz['group_description'];
            $perches_price_unite =  $moiz['perches_price_unite'];

            $old_total =  $moiz['item_total'];
            $price =  $moiz['perches_price_unite'];
            $new_total_group  = $old_total + $this->item_total;
            $cost  = $new_total_group * $price;


           $_SESSION['Dept'] = $total_cost1 =  $q = ($perches_price_unite * $this->item_total)
          + $this->other + $this->tax - $this->discount;


            $Reports = $connect_db->query("insert into Reports(company_key,item,item_type,item_total,perches_price_unite,
group_name,group_description,t_date,total_cost,discount,tax,other)
 values
       ('$_SESSION[company_key]','$item','$item_type','$new_total_group',
       '$perches_price_unite','$group_name','$group_description','$this->t_date','$total_cost1','$this->discount','$this->tax','$this->other')");

            $uDAte =    $connect_db->query("update inventory set item_total = '$new_total_group', total_cost = '$cost' where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]' ");

            if($uDAte and $Reports){


             header("location:../views/general_gournal.php");

            }

        }

     }
public  function RE_Inventory(){

    if(isset($this->group_id)and($this->RE_Inventory)){


        $connect_db = new connect_db();
        $Inv  = $connect_db->query("select * from inventory where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]'");
        $moiz = mysqli_fetch_array($Inv);

/*
        $item  =  $moiz['item'];
        $item_type =  $moiz['item_type'];
        $group_id =  $moiz['group_id'];
        $group_name =  $moiz['group_name'];
        $group_description =  $moiz['group_description'];
        $perches_price_unite =  $moiz['perches_price_unite'];
*/
        $old_total =  $moiz['item_total'];
        $price =  $moiz['perches_price_unite'];
        if($old_total >= $this->item_total){
        $new_total_group  = $old_total - $this->item_total;
        $cost  = $new_total_group * $price;



        $uDAte =    $connect_db->query("update inventory set item_total = '$new_total_group', total_cost = '$cost' where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]' ");

        $k = new know();
        $k->RE_inv();
    }
        elseif($old_total < $this->item_total){

            $k = new know();
            $k->NO_inv();

        }
    }
}
    public function  purchase_order(){


        if(!empty ($this->group_id)and( isset($this->order_to))){

            $connect = new connect_db();
            $Result_Se  = $connect->query("select * from inventory where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]'");
            $Se = mysqli_fetch_array($Result_Se);

            $item  =  $Se['item'];
            $item_type =  $Se['item_type'];
            $group_id =  $Se['group_id'];
            $group_name =  $Se['group_name'];
            $group_description =  $Se['group_description'];
            $perches_price_unite =  $Se['perches_price_unite'];

            $Result_In_from = $connect->query("insert into prechese_order_from(company_key,company_name_to,order_name,group_id,group_name,group_description,item_name,item_type,
       item_total,t_date,perches_price_unite)values('$_SESSION[company_key]','$this->company_name','$this->order_name','$group_id','$group_name',
       '$group_description','$item','$item_type','$this->item_total','$this->t_date','$perches_price_unite')");

            $Result_In_to = $connect->query("insert into prechese_order_to(company_name_from,company_name_to,order_name,group_id,group_name,group_description,item_name,item_type,
       item_total,t_date,perches_price_unite)values('$_SESSION[company_name]','$this->company_name','$this->order_name','$group_id','$group_name',
       '$group_description','$item','$item_type','$this->item_total','$this->t_date','$perches_price_unite')");

            $tuns = $connect->query("select * from prechese_order_to where company_name_to");
            $w = mysqli_fetch_array($tuns);
            $w['company_name_to'];
            if($_SESSION['company_name'] == $w['company_name_to']){


                echo "<audio src='../Public/tuns/svist_pticy_freetone.mp3' autoplay='autoplay'></audio>";

            }


$obj = new know();
     $obj->p_order();

            }



        if(isset($this->item)and isset ($this->order_to)){

            $this->From_group_id = mt_rand();
            $connect = new connect_db();


            $Result_one = $connect->query("insert into prechese_order_to(company_name_from,company_name_to,order_name,group_id,group_name,group_description,item_name,item_type,
       item_total,t_date,perches_price_unite)values('$_SESSION[company_name]','$this->company_name','$this->order_name','','$this->group_name',
       '$this->group_description','$this->item','$this->item_type','$this->item_total','$this->t_date','$this->perches_price_unite')");

            $Result_two = $connect->query("insert into prechese_order_from(company_key,company_name_to,order_name,group_id,group_name,group_description,item_name,item_type,
       item_total,t_date,perches_price_unite)values
       ('$_SESSION[company_key]','$this->company_name','$this->order_name','$this->From_group_id','$this->group_name',
       '$this->group_description','$this->item','$this->item_type','$this->item_total','$this->t_date','$this->perches_price_unite')");



            $obj = new know();
            $obj->p_order();

            }
        }




       public  function Resive(){

           if(isset($this->resive)and($this->group_id)){


               $connect_db = new connect_db();
               $Inv  = $connect_db->query("select *  from inventory where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]'");
               $moiz = mysqli_fetch_array($Inv);

               $item_total  =  $moiz['item_total'];
               $perches_price_unite  =  $moiz['perches_price_unite'];

              $new = ($item_total +  $this->item_total);
               $new_cost = ($perches_price_unite  *  $new);

  $uDAte =    $connect_db->query("update inventory set item_total = '$new', total_cost = '$new_cost' where group_id = '$this->group_id' and  company_key = '$_SESSION[company_key]' ");


               $_SESSION['Dept'] = $total_cost2 = (($this->perches_price_unite*$this->item_total) +

                   $this->other + $this->tax - $this->discount);



               $Reports = $connect_db->query("insert into Reports(company_key,item,item_type,item_total,perches_price_unite,
group_name,group_description,t_date,total_cost,discount,tax,other)
 values
       ('$_SESSION[company_key]','$this->item','$this->item_type','$this->item_total',
       '$this->perches_price_unite','$this->group_name','$this->group_description','$this->t_date','$total_cost2','$this->discount','$this->tax','$this->other')");

               if($uDAte and $Reports){


                   $S = $connect_db->query("select item_total from prechese_order_from  where  order_id = '$this->order_id' and  company_key = '$_SESSION[company_key]'");
                   $tot = mysqli_fetch_array($S);

                   if($tot['item_total'] <= $this->item_total){

                   $connect_db->query("delete  from prechese_order_from  where order_id = '$this->order_id' and  company_key = '$_SESSION[company_key]'");

                   }

                      elseif($tot['item_total'] > $this->item_total){
                         $stl =  $tot['item_total'] - $this->item_total;

                           $connect_db->query("update prechese_order_from set item_total='$stl' where
                           order_id = '$this->order_id'");


                                                 }


                                                     header("location:general_gournal.php");

               }
           }


       }

    public function Delete_Order(){

        if(isset($this->dell)){

            $connect = new connect_db();

            $connect->query("delete  from prechese_order_from  where order_id = '$this->order_id' and  company_key = '$_SESSION[company_key]'");

        $k = new know();
            $k->dell();
        }
    }

    }

    $obj = new M_inventory();
    $obj->Inventory();
    $obj->Resive();
    $obj->Delete_Order();
    $obj->purchase_order();
    $obj->RE_Inventory();

?>
