<?php 
	// teste
	require_once("controller/Login.php");
	$obj_login = new Login();
	$obj_login->logout();
	header("Location: login.php");