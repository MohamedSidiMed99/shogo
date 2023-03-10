<?php

// include("../connect.php");

class AddData extends DB{

    private $position;
    private $url;
    private $name;
    private $articul;
    private $price;
    private $price_old;
    private $notice;
    private $content;
    private $visible;


    public function Insert($position,$url,$name,$articul,$price,$price_old,$notice,$content,$visible){
        $this->position = $position;
        $this->url = $url;
        $this->name = $name;
        $this->articul = $articul;
        $this->price = $price;
        $this->price_old = $price_old;
        $this->notice = $notice;
        $this->content = $content;
        $this->visible = $visible;

        $sql ="INSERT INTO product(`position`,`url`,`name`,`articul`,`price`,`price_old`,`notice`,`content`,`visible`) 
        VALUES ($this->position,'$this->url','$this->name','$this->articul',$this->price, $this->price_old,'$this->notice','$this->content',$this->visible)";
        $result = $this->connectDB()->query($sql);
    }
}