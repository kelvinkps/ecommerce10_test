<?php 

	require_once("model/dao/conecta.php");
	require_once("model/ent/ClienteEnt.php");
	require_once("model/dao/DaoCliente.php");
	require_once("model/ent/UsuarioEnt.php");
	require_once("model/dao/DaoUsuario.php");

	$clienteEnt = new ClienteEnt();
	$clienteDao = new DaoCliente();
	$usuarioEnt = new UsuarioEnt();
	$usuarioDao = new usuarioDao();

	$clienteEnt->setEcliNome($_POST['cliente_nome']);
	$clienteEnt->setEcliCpf($_POST['cliente_cpf']);
	$clienteEnt->setEcliDataNascimento($_POST['data_nascimento_cliente']);
	$clienteEnt->setEcliTelefone($_POST['telefone_cliente']);
	$clienteEnt->setEcliCelular($_POST['celular_cliente']);
	$clienteEnt->setEcliCep($_POST['cep_cliente']);
	$clienteEnt->setEcliEndereco($_POST['endereco_cliente']);
	$clienteEnt->SetEcliNum($_POST['cliente_num']);
	$clienteEnt->setEcliUf($_POST['uf_cliente']);
	$clienteEnt->setEcliMunicipio($_POST['municipio_cliente']);
	$clienteEnt->setEcliBairro($_POST['bairro_cliente']);
	$clienteEnt->setEcliComplemento($_POST['complemento_cliente']);

	$usuarioEnt->setEusuLogin($_POST['email_cliente']);
	$senhaMd5($_POST['senha_cliente']);
	$usuarioEnt->setEusuSenha($senhaMd5);

	if($usuarioDao->adicionaUsuario($conexao, $usuarioEnt, 1)){
		if($clienteDao->adicionaCliente($conexao, $clienteEnt)){
			echo "Sucesso";
		}else{
			echo "Erro";
		}
	}else{
		echo "Erro";
	}

	die();

