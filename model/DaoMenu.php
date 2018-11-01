<?php

class DaoMenu{

	public function buscaMenusEtiuId($conexao, $etiu_id){
		$menus = array();

		$query = "SELECT * FROM menu WHERE eme_etiu_id = {$etiu_id}";
		$resultado = mysqli_query($conexao, $query);

		while($menu = mysqli_fetch_assoc($resultado)){
			array_push($menus, $menu);
		}

		return $menus;
	}
}