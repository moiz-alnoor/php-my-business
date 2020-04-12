<?php


class M_Company  extends  D_Company{

    public function Open_Company(){

        if(isset($this->open_company)){


if(isset ($_SESSION['load']) == $this->load){


    if($this->two_password == $this->password){

             $connect_db = new connect_db();

            $conn = $connect_db->query("insert into company(manager_key,company_key,manager_name,password,email,company_name,
            country,tel,tel_plus)values ('$_SESSION[manager_key]','$_SESSION[company_key]','$this->manager_name',
           '$this->password','$this->email','$this->company_name','$this->country','$this->tel','$this->tel_plus')");


            $k = new know();
            $k->Company();
}
}
        }
    }

    public  function equal(){

        //echo $_SESSION['load'];
        //echo "<br>".$_POST['load'];

        if(isset ($_SESSION['load']) == $this->load){

        if($this->two_password != $this->password){

    $k = new know();
    $k->no_p_qual();
        }
}
}





    public function Delete_Company(){

          if(isset($this->dell_company) and isset($this->password)){

           $connect_db = new connect_db();
           $Dell_Company = $connect_db->query("select password from company where password = '$this->password' ");
           $D_Company = mysqli_fetch_array($Dell_Company);

        if(!empty($D_Company)){

         $sql = $connect_db->query("delete from company where company_key = '$this->D_company_key'");
            $sql = $connect_db->query("delete from emp where company_key = '$this->D_company_key'");

               $k = new know();
               $k->D_accounts();

       }


        else
            $k = new know();
        $k->no_pass();


           }





}
    public function Update_Company(){

        $connect_db = new connect_db();

        if(isset($this->comp_edit)and isset($this->password)){

            $select = $connect_db->query("select password from company where  password = '$this->password' and  company_key = '$_SESSION[company_key]'");
            $New = mysqli_fetch_array($select);
            if($New){

              $connect_db->query("update company set manager_name = '$this->manager_name',
                                                   company_name = '$this->company_name',
                                                   tel = '$this->tel',
                                                   tel_plus = '$this->tel_plus',
                                                   email = '$this->New_email',
                                                   password = '$this->New_password',
                                                   country = '$this->country'
                                           where   password = '$this->password' and company_key = '$_SESSION[company_key]'");

                $k = new know();
                $k->Employee_Edit();

            }
            else{

                $k = new know();
                $k->No_P();
            }





        }

        }


    public function Manager_data(){

             $connect_db = new connect_db();


             if(isset($this->Edit_password)){


             $select = $connect_db->query("select password from company where  password = '$this->password' and  manager_key = '111'");
             $New = mysqli_fetch_array($select);

                if(!empty($New)){


                             $connect_db->query("update company set password = '$this->New_password'
                             where  password = '$this->password' and  manager_key = '111'");


                     $k = new know();
                     $k->Edit_account();

                }

                 elseif(empty($New)){

                     $k = new know();
                     $k->no_pass();


                 }



            }

                if(!empty($this->Edit_email)){


                    $Select_E = $connect_db->query("select email from company where  password  = '$this->password' and  manager_key = '111'");
                    $New_E = mysqli_fetch_array($Select_E);

                    if(!empty($New_E)){

                             $connect_db->query("update company set email = '$this->New_email'
                             where  password = '$this->password' and  manager_key = '111'");


                       $k = new know();
                       $k->Edit_account();

                    }

                    elseif(empty($New_E)){

                        $k = new know();
                        $k->no_pass();

                    }


}
    }

}


    $new_comp = new M_Company();
    $new_comp->Open_Company();
    $new_comp->Delete_Company();
    $new_comp->Update_Company();
    $new_comp->Manager_data();
$new_comp->equal()


?>