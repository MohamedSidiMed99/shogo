<?php


class DB{


   private $con;
   private $host;
   private $user;
   private $pass;
   private $dbname;


    public function connectDB(){
       $this->host = "localhost";
       $this->user = "root";
       $this->pass = "";
       $this->dbname = "shogo";
       $this->con = mysqli_connect($this->host, $this->user,$this->pass,$this->dbname);

       if($this->con){
          return $this->con;
       }
    }
}