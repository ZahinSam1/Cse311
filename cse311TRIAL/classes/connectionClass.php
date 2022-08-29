<?php
    class connection{
        private $db_hostName = '127.0.0.1';
        private $db_userName = 'root';
        private $db_Password = '';
        private $db_database = 'life_source_foundation';

        function __construct()
        {

        }

        //getters
        function getDBHostName(){
            return $this->db_hostName;
        }
        function getDBUserName(){
            return $this->db_userName;
        }
        function getDBPassword(){
            return $this->db_Password;
        }
        function getDBDatabase(){
            return $this->db_database;
        }

        //setters
        function setDBDatabase($db_database){
            $this->db_database = $db_database;
        }


        public function connect(){
            $db_connect = mysqli_connect(
                $this->db_hostName, 
                $this->db_userName, 
                $this->db_Password, 
                $this->db_database);

            if(!$db_connect){
                die('Error Connecting to the database');
            }
            return $db_connect;
        }
        public function close(){
            mysqli_close($this->connect());
        }
    }

    // $connection = new connection();
    // $con = $connection->connect();
    // if($con){
    //     echo 'success';
    // }else{
    //     echo 'failed';
    // }



?>