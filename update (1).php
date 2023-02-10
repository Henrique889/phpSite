<?php
require_once "conexao.php";

$codigo = $_POST["id"];
$placa = $_POST["placaVeiculo"];
$modelo = $_POST["modelo"];
$imagem = $_POST["imagem"];

$path = "imagens/$placa.jpg";
$url = "imagens/".$placa.".jpg";

file_put_contents($path, base64_decode($imagem));

$bytesArquivo = file_get_contents($path);

$sql = "UPDATE frota1 SET placaVeiculo = ?, modelo = ?, imagem = ?, url_imagem = ? WHERE id = ?";
$stm = $conexao->prepare($sql);
$stm->bind_param('ssssi', $placa, $modelo, $bytesArquivo, $url, $codigo);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
