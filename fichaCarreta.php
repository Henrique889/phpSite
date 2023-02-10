<?php
include "conexao.php";

$codigo = $_POST["id"];
$placa = $_POST["PLACA"];
$qtsFerramentas = $_POST["qtsFerramentas"];
$Lona = $_POST["Lona"];
$Cordas = $_POST["Cordas"];
$Cinta = $_POST["Cinta"];
$Catracas = $_POST["Catracas"];
$lookCompleto = $_POST["lookCompleto"];
$BoloCordas = $_POST["BoloCordas"];
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$Estepe = $_POST["Estepe"];
$Plataforma = $_POST["Plataforma"];
$cantoneira = $_POST["cantoneira"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$KitEmergenciaP = $_POST["KitEmergenciaP"];


$sql = "INSERT INTO fichaCarreta VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssssssssss', $codigo, $placa, $qtsFerramentas, $Lona, $Cordas,$Cinta,$Catracas, $lookCompleto, $BoloCordas, $Documentos,$qtsChaves,$Estepe, $Plataforma, $cantoneira,$KitEmergenciaG,$KitEmergenciaP);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
