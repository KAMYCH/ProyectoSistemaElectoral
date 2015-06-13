<?php
    class Cargo{
    private $id;
    private $tipo;
    private $year;
  
    //Generacion de metodos set y get para variable id_cargo
    public function setId($id){
        $this->id= $id;
    }

    public function getId(){
    return $this->id; 
    }

    //Generacion de metodos set y get para variable tipo_cargo
    public function setTipo($tipo){
        $this->tipo= $tipo;
    }

    public function getTipo(){
    return $this->tipo;
    }

    //Generacion de metodos set y get para variable year
    public function setYear($year){
        $this->year= $year;
    }

    public function getYear(){
    return $this->year;
    }
}
?>