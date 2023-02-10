<?php
include "conexao.php";

$codigo = $_POST["id"];
$placa = $_POST["PLACA"];
$ChaveRodas = $_POST["ChaveRodas"];
$Cordas = $_POST["Cordas"];
$Cinta = $_POST["Cinta"];
$Catracas = $_POST["Catracas"];
$caboAco = $_POST["caboAco"];
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$ConePreto = $_POST["ConePreto"];
$cantoneiraFerro = $_POST["cantoneiraFerro"];
$Estepe = $_POST["Estepe"];
$catracaSolta = $_POST["catracaSolta"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$KitEmergenciaP = $_POST["KitEmergenciaP"];


$sql = "INSERT INTO fichaCarreta_Sider VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issssssssssssss', $codigo, $placa, $ChaveRodas,$Cordas,$Cinta,$Catracas, $caboAco, $Documentos,$qtsChaves,$ConePreto,$cantoneiraFerro, $Estepe, $catracaSolta,$KitEmergenciaG,$KitEmergenciaP);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
