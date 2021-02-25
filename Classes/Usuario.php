<?php
class Usuario{
 	private $id;
	private $usuario;
	private $email;
	private $cargo;
	public function construct($usuario,$email,$cargo,$id=null){
		$this->id=$id;
		$this->usuario=$usuario;
		$this->email=$email;
		$this->cargo=$cargo;
	}
	/* getters */
	public function getId(){
		return $this->$id;
	}
	public function getUsuario(){
		return $this->$usuario;
	}
	public function getEmail(){
		return $this->$email;
	}
	public function getCargo(){
		return $this->$cargo;
	}
	/* setters */
	/** ¿ es necesario o adecuado este setter ? **/
	public function setId($id){
	    $this->$id=$id;
	}
	public function setUsuario($usuario){
		$this->$usuario=$usuario;
	}
	public function setEmail($email){
		$this->$email=$email;
	}
	public function setCargo($cargo){
		$this->$cargo=$cargo;
	}
}


?>