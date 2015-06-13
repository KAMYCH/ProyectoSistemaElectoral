<?php
    class Cargo{
    private $id;
    private $user;
    private $clave;
  
    //Generacion de metodos set y get para variable id_cargo
    public function setId($id){
        $this->id= $id;
    }

    public function getId(){
    return $this->id; 
    }

    //Generacion de metodos set y get para variable tipo_cargo
    public function setUser($user){
        $this->user= $user;
    }

    public function getUser(){
    return $this->user;
    }

    //Generacion de metodos set y get para variable year
    public function setClave($Clave){
        $this->clave= $clave;
    }

    public function getClave(){
    return $this->clave;
    }
}
?>