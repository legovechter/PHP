<?php
class Auto{

    private $merk;
    private $type;
    private $prijs;
    private $url;

    function __construct($m, $t, $p, $u){
        $this -> merk = $m; 
        $this -> type = $t;
        $this -> prijs = $p;
        $this -> url = $u;
    }

    public function getMerk(){
        return $this->merk;
    }

    public function getType(){
        return $this->type;
    }

    public function getPrijs(){
        return $this->prijs;
    }

    public function getUrl(){
        return $this->url;
    }
}
?>