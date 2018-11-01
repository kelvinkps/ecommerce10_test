<?php 

class UsuarioEnt{

	private $eusu_id;
	private $eusu_login;
	private $eusu_senha;
	private $eusu_etiu_id;

	public function setEusuId($eusu_id){
		$this->eusu_id = $eusu_id;
	}

	public function getEusuId(){
		return $this->eusu_id;
	}

	public function setEusuLogin($eusu_login){
		$this->eusu_login = $eusu_login;
	}

	public function getEusuLogin(){
		return $this->eusu_login;
	}

	public function setEusuSenha($eusu_senha){
		$this->eusu_senha = $eusu_senha;
	}

	public function getEusuSenha(){
		return $this->eusu_senha;
	}
}