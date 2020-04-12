<?php


    class connect_db {


        private   $hostname = "localhost";
        private   $username  = "root";
        private   $password  = "";
        private   $db_name  = "my_business_DB";
        private   $mysqli;



        public  function  __construct (){

            $this->mysqli = new mysqli("$this->hostname","$this->username","$this->password","$this->db_name");
            if (mysqli_connect_errno($this->mysqli)){
            echo "Failed to connect to MySQL: " . mysqli_connect_error($this->mysqli);


            }

        }


        public  function query($sql){

            $this->mysqli->query('SET character_set_client=UTF8');
           $this->mysqli->query('SET character_set_connection=UTF8');
          $this->mysqli->query('SET collation_set_connection=UTF8_general_ci');

            $this->mysqli->query('SET name=UTF8');
            $this->mysqli->query('SET character_set_results=UTF8');

            return   $this->mysqli->query($sql);

        }
    }


?>