<?php

class Links {

function Inventory_pc_links( ){

    if(isset($_SESSION['Inventory'])){



  echo  "<span class='icon icon-stack'> <a href='Inventory.php' > المخزون</a> </span>
         <span class='icon icon-redo'> <a href='purchase_order.php' > طلبات الشراء</a> </span>
         <span class='icon icon-undo'> <a href='Resive-Orders.php' >عرض طلبات الشراء</a> </span>
         <span class='icon icon-file-text2'> <a href='Reports-Inventory.php'> التقارير</a> </span>
         <span class='icon icon-book'> <a href='Chart_of_Accounts.php'>دليل الحسابات</a> </span>
		 <span class='icon icon-books'> <a href='general_gournal.php' > دفتر اليوميه</a> </span>
         <span class='icon icon-stats-bars'> <a href='Finance-Menu.php'> القوائم الماليه</a> </span>";

    }

       if(isset($_SESSION['Sale'])){

           echo  "
           <span class='icon icon-move-up'> <a href='Sale_Items.php' > المبيعات</a> </span>
           <span class='icon icon-file-text'> <a href='Reports_Sale.php' > فواتير المبيعات</a> </span>
           <span class='icon icon-spinner11'> <a href='Resive-Orders-Sale.php' > عرض طلبات البيع</a> </span>
           <span class='icon icon-book'> <a href='Chart_of_Accounts.php'> دليل الحسابات</a> </span>
           <span class='icon icon-books'> <a href='general_gournal.php'> دفتر اليوميه</a> </span>
           <span class='icon icon-stats-bars'> <a href='Finance-Menu.php'> القوائم الماليه</a> </span>

        ";
       }

   if(isset($_SESSION['Company'])){

        echo
          " <span class='icon icon-menu'><a href='Manager-Home.php' > القائمه</a> </span>
            <span class='icon icon-office'><a href='Company.php' > الشركه</a> </span>
            <span class='icon icon-users'><a href='Employee.php' > الموظفين</a> </span>
          ";

    }

    }

    function Inventory_tab_phone_links( ){

        if(isset($_SESSION['Inventory'])){

        echo "
		<table border='0' id='table-phone'>

        <tr>

            <td><a href='Inventory.php'> <div class='icon icon-stack'></div> </a></td>
			<td><a href='general_gournal.php'> <div class='icon icon-books'></div></a></td>
            <td><a href='purchase_order.php'> <div class='icon icon-redo'></div></a></td>

        </tr>
        <tr>

            <td><a href='Chart_of_Accounts.php'> <div class='icon icon-book'></div></a></td>
            <td> <a href='Finance-Menu.php'> <div class='icon icon-stats-bars'></div></a></td>
            <td><a href='Reports-Inventory.php'> <div class='icon icon-file-text2'></div></a></td>

        </tr>
         <tr>

          <td><a href='Resive-Orders.php'> <div class='icon icon-undo'></div></a></td>
		  <td><a href='../My.php'> <div class='icon icon-switch'></div></a></td>
 
     
<td> </td>

        </tr>

         </table>
";
        }


        if(isset($_SESSION['Sale'])){
            echo "
		<table border='0' id='table-phone'>
        <tr>
            <td><a href='Sale_Items.php'><div class='icon icon-move-up'></div></a></td>
            <td><a href='Reports_Sale.php'> <div class='icon icon-file-text'></div></a></td>
            <td><a href='Resive-Orders-Sale.php'> <div class='icon icon-undo'></div></a></td>
        </tr>
        <tr>
            <td><a href='Chart_of_Accounts.php'> <div class='icon icon-book'></div></a></td>
            <td><a href='Finance-Menu.php'> <div class='icon icon-stats-bars'></div></a></td>
            <td><a href='general_gournal.php'> <div class='icon icon-books'></div></a></td>
        </tr>
         <tr>

           <td id='phone-td'> <a href='../My.php'> <div class='icon icon-switch'></div></a> </td>
           <td id='phone-td'> </td>
           <td id='phone-td'> </td>
        </tr>

         </table>
";
        }

        if(isset($_SESSION['Company'])){

            echo "    <table border='0'>
        <tr>
            <td><a href='Manager-Home.php'> <div class='icon icon-menu'></div></a></td>
             <td><a href='Company.php'> <div class='icon icon-office'></div></a> </td>
            <td><a href='Employee.php'> <div class='icon icon-user'></div> </a></td>
        </tr>
        <tr><td><a href='../My.php'> <div class='icon icon-switch'></div></a></td>
            <td> </td> <td> </td>
      </tr>
 </table>
";


        }
    }
}

?>