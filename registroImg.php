<?php

include "conexao.php";


$codigo = $_POST["id"];
$placa = $_POST["placaVeiculo"];
$Modelo = $_POST["modelo"];
$imagem = $_POST["imagem"];

$path = "imagens/$placa.jpg";
$url = "http://transcr10.com/webservice/$path";

file_put_contents($path, base64_decode($imagem));

$bytesArquivo = file_get_contents($path);

$sql = "INSERT INTO frota1 VALUES (?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issss', $codigo, $placa, $Modelo, $bytesArquivo, $url);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
