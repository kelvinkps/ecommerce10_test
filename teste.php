<?php
require_once("model/dao/conecta.php");
require_once("model/dao/DaoUsuario.php");

$obj_usuario = new DaoUsuario();
$usuarios = $obj_usuario->teste($conexao);

print_r($usuarios);