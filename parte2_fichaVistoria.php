<?php

include "conexao.php";

$codigo = null;
$nome = $_POST["nome"];
$PlacaVeiculo = $_POST["placaVeiculo"];
$data = $_POST["Data"];
$OculosP = $_POST["Oculos"];
$Controle = $_POST["ControlePortao"];
$Agua = $_POST["AguaRadiador"];
$PneusC = $_POST["PneusCalibrados"];
$QtsPneusCalibrados = $_POST["qtsPneusCalibrados"];
$PneusB = $_POST["PneusBatidos"];
$QtsPneusB = $_POST["qtsPneusBatidos"];
$PneusR = $_POST["PneusRasgados"];
$QtsPneusR = $_POST["qtsPneusRasgados"];
$PneusF = $_POST["PneusFurados"];
$QtsPneusF = $_POST["qtsPneusFurados"];
$Estepe = $_POST["Estepe"];
$imagem = $_POST["imagem"];

$path = "imagens/$nome.jpg";
$url = "https://transcr10.com/webservice/$path";

file_put_contents($path, base64_decode($imagem));

$bytesArquivo = file_get_contents($path);

$sql = "INSERT INTO checklist_part_2 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssssssssssss', $codigo, $nome, $PlacaVeiculo, $data, $OculosP, $Controle, $Agua, $PneusC, $QtsPneusCalibrados, $PneusB, $QtsPneusB, $PneusR, $QtsPneusR, $PneusF, $QtsPneusF, $Estepe, $bytesArquivo, $url);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
