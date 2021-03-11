<?php
class Usuario{
 	private $id;
    private $nif;
	private $usuario;
	private $email;
	private $clave;
    
	public function __construct($id, $nif, $usuario, $email, $clave){
		$this->id=$id;
        $this->nif=$nif;
		$this->usuario=$usuario;
		$this->email=$email;
		$this->clave=$clave;
	}
    
	/* getters */
	public function getId(){
		return $this->id;
	}
    public function getNif(){
		return $this->nif;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getClave(){
		return $this->clave;
	}
	
    /* setters */
	public function setId($id){
	    $this->$id=$id;
	}
    public function setNif($nif){
	    $this->$nif=$nif;
	}
	public function setUsuario($usuario){
		$this->$usuario=$usuario;
	}
	public function setEmail($email){
		$this->$email=$email;
	}
	public function setClave($clave){
		$this->$clave=$clave;
	}
}


?>