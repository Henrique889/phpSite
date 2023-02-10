<?php

function conectar(){
	$host="linkHost";
	$bd = "testeBd";
	$user = "user10";
	$senha = "password";

	$con = new mysqli($host, $user, $senha, $bd);
	return $con;

}

$conexao = conectar();


?>
