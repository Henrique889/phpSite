<?php
include "conexao.php";

$codigo = $_POST["id"];
$placa = $_POST["PLACA"];
$qtsFerramentas = $_POST["qtsFerramentas"];
$Lona = $_POST["Lona"];
$Cordas = $_POST["Cordas"];
$Cinta = $_POST["Cinta"];
$Catracas = $_POST["Catracas"];
$CatracasSoltas = $_POST["CatracasSoltas"];
$BoloCordas = $_POST["BoloCordas"];
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$Estepe = $_POST["Estepe"];
$cantoneira = $_POST["cantoneiraF"];
$KitEmergenciaP = $_POST["kit_p_emergencia"];
$KitEmergenciaG = $_POST["kit_g_emergencia"];


$sql = "INSERT INTO fichaCarreta_40 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issssssssssssss', $codigo, $placa, $qtsFerramentas, $Lona, $Cordas,$Cinta,$Catracas, $CatracasSoltas, $BoloCordas, $Documentos,$qtsChaves,$Estepe, $cantoneira,$KitEmergenciaP,$KitEmergenciaG);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
