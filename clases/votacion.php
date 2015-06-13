<?php

class Votacion {
    private $id;
    private $sufragio;
    private $candidatura;
    private $depa;
    private $muni;
    private $voto;
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setSufragio($sufragio) {
        $this->sufragio = $sufragio;
    }

    public function setCandidatura($candidatura) {
        $this->candidatura = $candidatura;
    }

    public function setDepa($depa) {
        $this->depa = $depa;
    }

    public function setMuni($muni) {
        $this->muni = $muni;
    }
     public function setVoto($voto) {
        $this->voto = $voto;
     }

    public function getSufragio() {
        return $this->sufragio;
    }

     public function getCandidatura() {
        return $this->candidatura;
    }

    public function getDepa() {
        return $this->depa;
    }
    
    public function getMuni() {
        return $this->muni;
    }

    public function getVoto(){
        return $this->voto;
    }
}