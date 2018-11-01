<?php 


require_once("../model/conecta.php");
require_once("../model/DaoUsuario.php");
require_once("Login.php");

// require_once("http://ecommerce10.azurewebsites.net/model/dao/conecta.php");
// require_once("http://ecommerce10.azurewebsites.net/model/dao/DaoUsuario.php");
// require_once("http://ecommerce10.azurewebsites.net/Login.php");

$obj_usuario = new DaoUsuario();
$obj_login = new Login();

$usuario = $obj_usuario->buscaUsuario($conexao, $_POST['email'], $_POST['senha']);

// if(($tipo_conexao == 'localhost')){
// 	if($usuario == null){
// 		$_SESSION["danger"] = "Email ou senha incorretos";
// 		header("Location: ../login.php");
// 	}else{
// 		$obj_login->logaUsuario($_POST['email'], $usuario['eusu_id']);
// 		$_SESSION["success"] = "Usuário logado com sucesso.";
// 		if($usuario['eusu_etiu_id'] == 1){
// 			header("Location: ../cliente.php");
// 		}else{
// 			header("Location: ../fornecedor.php");
// 		}
// 	}
// }else{
	
// 	if($usuario == null){
// 		$_SESSION["danger"] = "Email ou senha incorretos";
// 		header("Location: http://ecommerce10.azurewebsites.net/login.php");
// 	}else{
// 		$obj_login->logaUsuario($_POST['email'], $usuario['eusu_id']);
// 		$_SESSION["success"] = "Usuário logado com sucesso.";
// 		if($usuario['eusu_etiu_id'] == 1){
// 			header("Location: http://ecommerce10.azurewebsites.net/cliente.php");
// 		}else{
// 			header("Location: http://ecommerce10.azurewebsites.net/fornecedor.php");
// 		}
// 	}
// }
// if($usuario == null){
// 		$_SESSION["danger"] = "Email ou senha incorretos";
// 		header("Location: http://ecommerce10.azurewebsites.net/login.php");
// }else{
// 	$obj_login->logaUsuario($_POST['email'], $usuario['eusu_id']);
// 	$_SESSION["success"] = "Usuário logado com sucesso.";
// 	if($usuario['eusu_etiu_id'] == 1){
// 		header("Location: http://ecommerce10.azurewebsites.net/cliente.php");
// 	}else{
// 		header("Location: http://ecommerce10.azurewebsites.net/fornecedor.php");
// 	}
// }

if($usuario == null){
 		$_SESSION["danger"] = "Email ou senha incorretos";
 		header("Location: ../login.php");
}else{
 	$obj_login->logaUsuario($_POST['email'], $usuario['eusu_id']);
	$_SESSION["success"] = "Usuário logado com sucesso.";
 	if($usuario['eusu_etiu_id'] == 1){
 		header("Location: ../cliente.php");
 	}else{
		header("Location: ../fornecedor.php");
 	}
}






