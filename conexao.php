<?php

function conectar(){
	$host="testing";
	$bd = "database";
	$user = "username";
	$senha = "pass";

	$con = new mysqli($host, $user, $senha, $bd);
	return $con;

}

$conexao = conectar();


?>
