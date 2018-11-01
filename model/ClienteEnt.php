<?php 

class ClienteEnt{

	private $ecli_id;
	private $ecli_nome;
	private $ecli_endereco;
	private $ecli_bairro;
	private $ecli_cep;
	private $ecli_num;
	private $ecli_cpf;
	private $ecli_email;
	private $ecli_celular;
	private $ecli_telefone;
	private $ecli_eusu_id;
	private $ecli_municipio;
	private $ecli_complemento;
	private $ecli_uf;
	private $ecli_data_nascimento;

	public function setEcliId($ecli_id){
		$this->ecli_id = $ecli_id;
	}

	public function getEcliId(){
		return $this->ecli_id;
	}

	public function setEcliNome($ecli_nome){
		$this->ecli_nome = $ecli_nome;
	}

	public function getEcliNome(){
		return $this->ecli_nome;
	}

	public function setEcliEndereco($ecli_endereco){
		$this->ecli_endereco = $ecli_endereco;
	}

	public function getEcliEndereco(){
		return $this->ecli_endereco;
	}

	public function setEcliBairro($ecli_bairro){
		$this->ecli_bairro = $ecli_bairro;
	}

	public function getEcliBairro(){
		return $this->ecli_bairro;
	}

	public function setEcliCep($ecli_cep){
		$this->ecli_cep = $ecli_cep;
	}

	public function getEcliCep(){
		return $this->ecli_cep;
	}

	public function setEcliNum($ecli_num){
		$this->ecli_num = $ecli_num;
	}

	public function getEcliNum(){
		return $this->ecli_num;
	}

	public function setEcliMunicipio($ecli_municipio){
		$this->ecli_municipio = $ecli_municipio;
	}

	public function getEcliMunicipio(){
		return $this->ecli_municipio;
	}

	public function setEcliComplemento($ecli_complemento){
		$this->ecli_complemento;
	}

	public function getEcliComplemento(){
		return $this->ecli_complemento;
	}

	public function setEcliUf($ecli_uf){
		$this->ecli_uf = $ecli_uf;
	}

	public function getEcliUf(){
		return $this->ecli_uf;
	}

	public function setEcliCpf($ecli_cpf){
		$this->ecli_cpf = $ecli_cpf;
	}

	public function getEcliCpf(){
		return $this->ecli_cpf;
	}

	public function setEcliEmail($ecli_email){
		$this->ecli_email = $ecli_email;
	}

	public function getEcliEmail(){
		return $this->ecli_email;
	}

	public function setEcliCelular($ecli_celular){
		$this->ecli_celular = $ecli_celular;
	}

	public function getEcliCelular(){
		return $this->ecli_celular;
	}

	public function setEcliTelefone($ecli_telefone){
		$this->ecli_telefone = $ecli_telefone;
	}

	public function getEcliTelefone(){
		return $this->ecli_telefone;
	}

	public function setEcliEusuId($ecli_eusu_id){
		$this->ecli_eusu_id = $ecli_eusu_id;
	}

	public function getEcliEusuId(){
		return $this->ecli_eusu_id;
	}

	public function setEcliDataNascimento($ecli_data_nascimento){
		$this->ecli_data_nascimento = $ecli_data_nascimento;
	}

	public function getEcliDataNascimento(){
		return $this->ecli_data_nascimento;
	}
}