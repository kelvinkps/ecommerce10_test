<?php

$port = getenv("MySql_Port");   
$user = getenv("MySql_User");   
$password = getenv("MySql_Password");   

if($port != null){
    $conexao = mysqli_connect("127.0.0.1",$user,$password,"ecommerce10", $port);
}
else
{
    $conexao = mysqli_connect("localhost","root","","ecommerce10");
}
 //$conexao = mysqli_connect("localhost","root","","ecommerce10");
//$conexao = mysqli_connect("localhost","root","","ecommerce10");

// $tipo_conexao = $_SERVER['HTTP_HOST'];
 
// if (($tipo_conexao == 'https://ecommerce10.scm.azurewebsites.net/')){
// 	$conexao = mysqli_connect("127.0.0.1","azure","6#vWHD_$","ecommerce10", 49823);
// }else{
// 	// para uso externo
    
//     $conexao = mysqli_connect("localhost","root","","ecommerce10");
// }

// $connstr = getenv("MYSQLCONNSTR_MySqlDB");    
    
//Parse the above environment variable to retrieve username, password and hostname.
// foreach ($_SERVER as $key => $value) 
// {
//     if (strpos($key, "MYSQLCONNSTR_") !== 0) 
//     {
//         continue;
//     }
//     $hostname = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
//     $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
//     $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
//     break;
// }
// //echo "Server Name: ".$hostname."</br>";
// //connection to the database
// $conexao = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
// //echo "<br>Connected to DB server successfully</br>";
// //select a database to work with
// $selectDb = mysql_select_db("ecommerce10",$conexao) or die("Could not select database");
?>