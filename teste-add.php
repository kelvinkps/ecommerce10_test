<?php 
        require_once("model/dao/conecta.php");
        $query = "INSERT INTO usuario (eusu_login, eusu_senha, eusu_etiu_id) VALUES ('teste', '1234', 1)";
        $resultado = mysqli_query($conexao, $query);
        echo $resultado;
    