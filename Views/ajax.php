
<?php


include("../Models/Connect_DB.php");

class ajax{

    public $counter;
   // public  $a =  session_start();

    function ajax_(){

if(isset($this->order_to)){

        $ajax = new connect_db();

        $tuns = $ajax->query("select * from prechese_order_to where company_name_to");
        $w = mysqli_fetch_array($tuns);
        $w['company_name_to'];
        if($_SESSION['company_name'] == $w['company_name_to']){


            echo "<audio src='../Public/tuns/svist_pticy_freetone.mp3' autoplay='autoplay'></audio>";

        }
}

if(isset($_GET['session'])){


    $ajax = new connect_db();

        $ajax_ = $ajax->query("select counter from prechese_order_to where company_name_to = '$_GET[session]'");

        $this->counter = 0;

        while($tot = mysqli_fetch_array($ajax_)){

     $this->counter+= $tot['counter'];

    }
        echo  $this->counter;

    }
    }
}

    $Obj = new ajax();
    $Obj->ajax_();





?>