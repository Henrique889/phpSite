<?php

function conectar(){
	$host="mysql669.umbler.com";
	$bd = "transcr";
	$user = "tcr";
	$senha = "transcr45";

	$con = new mysqli($host, $user, $senha, $bd);
	return $con;

}

$conexao = conectar();


?>