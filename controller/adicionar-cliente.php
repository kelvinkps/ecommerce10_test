<?php 

	require_once("../model/conecta.php");
	require_once("../model/ClienteEnt.php");
	require_once("../model/DaoCliente.php");
	require_once("../model/UsuarioEnt.php");
	require_once("../model/DaoUsuario.php");

	$clienteEnt = new ClienteEnt();
	$clienteDao = new DaoCliente();
	$usuarioEnt = new UsuarioEnt();
	$usuarioDao = new DaoUsuario();
	
	$clienteEnt->setEcliNome(utf8_decode($_POST['nome_cliente']));
	$clienteEnt->setEcliCpf($_POST['cpf_cliente']);
	$clienteEnt->setEcliDataNascimento($_POST['data_nascimento_cliente']);
	$clienteEnt->setEcliTelefone($_POST['telefone_cliente']);
	$clienteEnt->setEcliCelular($_POST['celular_cliente']);
	$clienteEnt->setEcliCep($_POST['cep_cliente']);
	$clienteEnt->setEcliEndereco(utf8_decode($_POST['endereco_cliente']));
	$clienteEnt->SetEcliNum($_POST['num_cliente']);
	$clienteEnt->setEcliUf($_POST['uf_cliente']);
	$clienteEnt->setEcliMunicipio(utf8_decode($_POST['municipio_cliente']));
	$clienteEnt->setEcliBairro(utf8_decode($_POST['bairro_cliente']));
	$clienteEnt->setEcliComplemento(utf8_decode($_POST['complemento_cliente']));
	$clienteEnt->setEcliEmail($_POST['email_cliente']);

	$usuarioEnt->setEusuLogin($_POST['email_cliente']);
	$senhaMd5 = md5($_POST['senha_cliente']);
	$usuarioEnt->setEusuSenha($senhaMd5);
	$resultado = $usuarioDao->adicionaUsuario($conexao, $usuarioEnt, 1);
	
	if($resultado){
		$usuarioNovo = $usuarioDao->buscaUsuaroPorEmail($conexao, $_POST
			['email_cliente']);
		$clienteEnt->setEcliEusuId($usuarioNovo['eusu_id']);
		if($clienteDao->adicionaCliente($conexao, $clienteEnt)){
			echo "Sucesso";
		}else{
			echo "Erro";

		}
	}else{
		echo "Erro";
	}

	die();

