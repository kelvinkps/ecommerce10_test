<?php

require_once("conecta.php");
require_once("UsuarioEnt.php");
class DaoUsuario{

	public function buscaUsuario($conexao, $email, $senha){
		$senhaMd5 = md5($senha);
		$email = mysqli_real_escape_string($conexao, $email);
		$query = "select * from usuario where eusu_login = '{$email}' and eusu_senha = '{$senhaMd5}'";
		$resultado = mysqli_Query($conexao, $query);
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	}

	public function buscaUsuarioPorId($conexao, $id){
		$query = "select * from usuario where eusu_id = '{$id}'";
		$resultado = mysqli_Query($conexao, $query);
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	}

	public function buscaUsuaroPorEmail($conexao, $email){
		$query = "SELECT * FROM usuario WHERE eusu_login = '{$email}'";
		$resultado = mysqli_Query($conexao, $query);
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	}

	public function adicionaUsuario($conexao, UsuarioEnt $usuarioEnt, $etiu_id){
		$query = "INSERT INTO usuario (eusu_login, eusu_senha, eusu_etiu_id) VALUES ('{$usuarioEnt->getEusuLogin()}', '{$usuarioEnt->getEusuSenha()}', {$etiu_id})";
		return mysqli_query($conexao, $query);
		//return $query;
	}

	public function teste($conexao){
		//$conexao = mysqli_connect("localhost","root","","ecommerce10");
		$usuarios = array();
		$query = "SELECT * FROM usuario";
		$resultado = mysqli_query($conexao,$query);
		while($usuario = mysqli_fetch_assoc($resultado)){
			array_push($usuarios,$usuario);
		}
		return $usuarios;
	}
}