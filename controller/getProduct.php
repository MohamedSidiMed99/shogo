<?php



class GetProduct extends DB{

    private $id;

    public function Product($id){

        $this->id = $id;

        $sql ="SELECT * FROM product WHERE id = $this->id";
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

