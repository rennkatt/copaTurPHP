<?php
class Usuario{
	private $id;
	private $nome;
	private $sobrenome;
	private $email;
	private $senha;
	private $nivel;


	public function Usuario($nome, $sobrenome, $email, $senha){
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->email = $email;
		$this->senha = $senha;
		$this->estado = $estado;
		$this->cidade = $cidade;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
	}

	public function getId(){
		return $this->id;
	} 

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	} 

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSobrenome(){
		return $this->sobrenome;
	} 

	public function setSobrenome($sobrenome){
		$this->sobrenome = $sobrenome;
	}

	public function getEmail(){
		return $this->email;
	} 

	public function set($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	} 

	public function setSenha($senha){
		$this->senha = $senha;
	}

	
	public function getNivel(){
		return $this->nivel;
	} 

	public function setNivel($nivel){
		$this->nivel = $nivel;
	}

}

?>