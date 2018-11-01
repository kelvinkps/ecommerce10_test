<?php 
require_once("conecta.php");
require_once("ClienteEnt.php");
class DaoCliente{

	public function adicionaCliente($conexao, ClienteEnt $cliente){

		$query = "INSERT INTO cliente (ecli_nome, ecli_endereco, ecli_bairro, ecli_cep, ecli_num, ecli_municipio, ecli_uf, ecli_cpf, ecli_email, ecli_celular, ecli_telefone, ecli_eusu_id, ecli_data_nascimento) VALUES ('{$cliente->getEcliNome()}', '{$cliente->getEcliEndereco()}', '{$cliente->getEcliBairro()}', '{$cliente->getEcliCep()}', '{$cliente->getEcliNum()}', '{$cliente->getEcliMunicipio()}', '{$cliente->getEcliUf()}', '{$cliente->getEcliCpf()}', '{$cliente->getEcliEmail()}', '{$cliente->getEcliCelular()}', '{$cliente->getEcliTelefone()}', '{$cliente->getEcliEusuId()}', '{$cliente->getEcliDataNascimento()}')";
		return mysqli_query($conexao, $query);
		//return $query;
	}

	public function buscaClientePorUsuario($conexao, $ecli_eusu_id){
		$query = "SELECT * FROM cliente WHERE ecli_eusu_id = {$ecli_eusu_id}";
		$resultado = mysqli_query($conexao, $query);
		$cliente = mysqli_fetch_assoc($resultado);

		return $cliente;
	}
}