<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "azrael";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Conexão falhou " . mysqli_connect_error());
}
//echo "Conectado com sucesso";