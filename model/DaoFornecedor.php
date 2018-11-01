<?php 

require_once("conecta.php");
require_once("FornecedorEnt.php");

class DaoFornecedor{

    public function adicionarFornecedor($conexao, FornecedorEnt $fornecedor){
        $query = "INSERT INTO fornecedor (efo_razao_social, efo_cnpj, efo_endereco, efo_bairro, efo_cep, efo_num,efo_email, efo_telefone, efo_eusu_id, efo_municipio,  efo_uf, efo_complemento) VALUES ('{$fornecedor->getEfoRazaoSocial()}', '{$fornecedor->getEfoCnpj()}', '{$fornecedor->getEfoEndereco()}', '{$fornecedor->getEfoBairro()}', '{$fornecedor->getEfoCep()}', {$fornecedor->getEfoNum()}, '{$fornecedor->getEfoEmail()}', '{$fornecedor->getEfoTelefone()}', {$fornecedor->getEfoEusuId()}, '{$fornecedor->getEfoMunicipio()}', '{$fornecedor->getEfoUf()}',  '{$fornecedor->getEfoComplemento()}')";
        return mysqli_query($conexao, $query);
        //return $query;
    }

    public function buscaFornecedorUsuario($conexao, $efo_eusu_id){
    	$query = "SELECT * FROM fornecedor WHERE efo_eusu_id = {$efo_eusu_id}";
    	$resultado = mysqli_query($conexao, $query);
		$fornecedor = mysqli_fetch_assoc($resultado);

		return $fornecedor;
    }
       
}