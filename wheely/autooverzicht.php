<?php
class AutoKeuze{

    private $groepnaam = "";
    private $autos = array();

    public function addAuto($auto){
        array_push($this -> autos, $auto);
    }

    public function getAutos(){
        return $this->autos;
    }

    public function getAutoKeuze(){
        return array("groepsnaam" => $this->groepnaam);
    }

    public function getNaam(){
        return $this->groepsnaam;
    }

    public function setNaam($n){
        $this->naam = $n;
    }
}

?>