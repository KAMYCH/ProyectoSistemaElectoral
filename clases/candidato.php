<?php
	class candidato{
	private $id;
	private $dui;
	private $apellido;
	private $nombre;
	private $iddepa;
	private $idmuni;
	private $tipocandi;
	private $partido;
    private $idcargo;
	private $depa;
	private $muni;

	
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
	return $this->id;
	}

	public function setDui($dui){
		$this->dui = $dui;
	}

	public function getDui(){
	return $this->dui;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getApellido(){
	return $this->apellido;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
	return $this->nombre;
	}

	public function setIddepa($iddepa){
		$this->iddepa = $iddepa;
	}

	public function getIddepa(){
	return $this->iddepa;
	}

public function setIdmuni($idmuni){
		$this->idmuni = $idmuni;
	}
	public function getIdmuni(){
	return $this->idmuni;
	}


public function setTipoCandi($tipocandi){
		$this->tipocandi = $tipocandi;
	}

	public function getTipoCandi(){
	return $this->tipocandi;
	}

	public function setPartido($partido){
		$this->partido = $partido;
	}
	public function getPartido(){
	return $this->partido;
	}

	public function setDepa($depa){
		$this->depa = $depa;
	}

	public function getDepa(){
	return $this->depa;
	}

public function setMuni($muni){
		$this->muni = $muni;
	}

	public function getMuni(){
	return $this->muni;
	}

	public function setIdcargo($idcargo){
		$this->idcargo = $idcargo;
	}

    public function getIdcargo(){
		return $this->idcargo;
	}
}
?>