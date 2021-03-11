<?php
class Incidencia{
	private $id;
    private $idUsuario;
    private $prioridad;
    private $timestampCreacion;
    private $descripcion;
    private $server;
	
    public function __construct($id, $idUsuario, $prioridad, $timestampCreacion, $descripcion, $server){
		$this->id=$id;
        $this->idUsuario=$idUsuario;
		$this->prioridad=$prioridad;
		$this->timestampCreacion=$timestampCreacion;
		$this->descripcion=$descripcion;
        $this->server=$server;
	}
    
    public function getId(){
		return $this->id;
	}
    public function getIdUsuario(){
		return $this->idUsuario;
	}
    public function getPrioridad(){
		return $this->idPrioridad;
	}
    public function getTimestampCreacion(){
		return $this->timestampCreacion;
	}
    public function getDescripcion(){
		return $this->descripcion;
	}
    public function getServer(){
		return $this->server;
	}
    
    
    public function setId($id){
        $this->id=$id;
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario=$idUsuario;
    }
    public function setPrioridad($prioridad){
        $this->prioridad=$prioridad;
    }
    public function setTimestampCreacion($timestampCreacion){
        $this->timestampCreacion=$timestampCreacion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function setServer($server){
        $this->server=$server;
    }
}
