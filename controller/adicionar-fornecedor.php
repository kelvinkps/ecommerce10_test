<?php 

	require_once("../model/conecta.php");
	require_once("../model/FornecedorEnt.php");
	require_once("../model/DaoFornecedor.php");
	require_once("../model/UsuarioEnt.php");
    require_once("../model/DaoUsuario.php");
    
    $fornecedorEnt = new fornecedorEnt();
	$fornecedorDao = new DaoFornecedor();
	$usuarioEnt = new UsuarioEnt();
    $usuarioDao = new DaoUsuario();
    
    $fornecedorEnt->setEfoRazaoSocial(utf8_decode($_POST['nome_fantasia']));
	$fornecedorEnt->setEfoCnpj($_POST['cnpj']);
	$fornecedorEnt->setEfoSite($_POST['site']);
	$fornecedorEnt->setEfoTelefone($_POST['telefone_fornecedor']);
	$fornecedorEnt->setEfoCep($_POST['cep_fornecedor']);
	$fornecedorEnt->setEfoEndereco(utf8_decode($_POST['endereco_fornecedor']));
	$fornecedorEnt->SetEfoNum($_POST['num_fornecedor']);
	$fornecedorEnt->setEfoUf($_POST['uf_fornecedor']);
	$fornecedorEnt->setEfoMunicipio(utf8_decode($_POST['municipio_fornecedor']));
	$fornecedorEnt->setEfoBairro(utf8_decode($_POST['bairro_fornecedor']));
	$fornecedorEnt->setEfoComplemento(utf8_decode($_POST['complemento_fornecedor']));
	$fornecedorEnt->setEfoEmail($_POST['email_fornecedor']);

	$usuarioEnt->setEusuLogin($_POST['email_fornecedor']);
	$senhaMd5 = md5($_POST['senha_fornecedor']);
	$usuarioEnt->setEusuSenha($senhaMd5);
	$resultado = $usuarioDao->adicionaUsuario($conexao, $usuarioEnt, 2);
	
	if($resultado){
		$usuarioNovo = $usuarioDao->buscaUsuaroPorEmail($conexao, $_POST
			['email_fornecedor']);
		$fornecedorEnt->setEfoEusuId($usuarioNovo['eusu_id']);
        $teste = $fornecedorDao->adicionarFornecedor($conexao, $fornecedorEnt);
        //print_r($teste);die();
		if($teste){
			echo "Sucesso";
		}else{
			echo "Erro";

		}
	}else{
		echo "Erro";
	}

	die();

