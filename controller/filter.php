<?php

// include("../connect.php");

class Filter extends DB{

    private $name;
    private $maxprice;
    private $minprice;
   


    public function filterdata($name,$maxprice ,$minprice){
        $this->name = $name;
        $this->maxprice = $maxprice;
        $this->minprice = $minprice;
       
      

        if(empty($this->maxprice) || empty($this->minprice && !empty($this->name))){
           
            $sql ="SELECT * FROM product WHERE `name` LIKE '%$this->name%' ";
            $result = $this->connectDB()->query($sql);

        }else {

           
            $sql ="SELECT * FROM product WHERE `name` LIKE '%$this->name%' AND  `price` <= $this->maxprice AND `price` >= $this->minprice ";
            $result = $this->connectDB()->query($sql);
        }

        $count = $result->num_rows;

        if($count > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
             }
             
             return $data;
        }

    }
}