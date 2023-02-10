<?php

include "conexao.php";


$codigo = null;
$placa = $_POST["name"];
$posicao = $_POST["posicaoImage"];
$imagem = $_POST["imagem"];

$today = date("m.d.y");
$path = "imagensAvarias/$placa".'_'."$today.jpg";
$url = "https://transcr10.com/webservice/$path";

//file_put_contents($path, base64_decode($imagem));

//$bytesArquivo = file_get_contents($path);

$sql = "INSERT INTO image_AvariasMarcadas VALUES (?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isss', $codigo, $placa, $url, $posicao);

if($stm->execute()){
	echo "registrado";
} else{
	echo "nao deu certo!!!";
}

mysqli_close($conexao);

?>
