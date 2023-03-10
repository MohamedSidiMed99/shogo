<?php

// include("../connect.php");

class ReadData extends DB{

    public function readData(){

        $sql ="SELECT * FROM product";
        $result = $this->connectDB()->query($sql);

        $count = $result->num_rows;

        if($count > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
             }
             
             return $data;
        }
       
    }


}

