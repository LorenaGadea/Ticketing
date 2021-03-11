<?php 
class EstadoIncidencia{
    private $idIncidencia;
    private $estado;
    private $timestampEstado;
    
    public function __construct($idIncidencia, $estado, $timestampEstado){
		$this->idIncidencia=$idIncidencia;
        $this->estado=$estado;
		$this->timestampEstado=$timestampEstado;
	}
    
    public function getIdIncidencia(){
		return $this->idIncidencia;
	}
    public function getEstado(){
		return $this->estado;
	}
    public function getTimestampEstado(){
		return $this->timestampEstado;
	}
    
    public function setIdIncidencia($idIncidencia){
        $this->idIncidencia=$idIncidencia;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function setTimestampEstado($timestampEstado){
        $this->timestampEstado=$timestampEstado;
    }
}

?>
