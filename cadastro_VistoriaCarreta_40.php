<?php
include "conexao.php";

$codigo =  null;
$placa = $_POST["PLACA"];
$nome = $_POST["nome"];
$data = $_POST["data"];
$qtsFerramentas = $_POST["Ferramentas"];
$Lona = $_POST["Lona"];
$Cordas = $_POST["cordas"];
$Cinta = $_POST["cinta"];
$Catracas = $_POST["catracas"];
$CatracasSoltas = $_POST["CatracasSoltas"];
$BoloCordas = $_POST["BoloCordas"];
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$cantoneira = $_POST["CantoneiraF"];
$Estepe = $_POST["Estepe"];
$KitEmergenciaG = $_POST["kit_g_emergencia"];
$KitEmergenciaP = $_POST["kit_p_emergencia"];

$LampadasLaterais = $_POST["LampadasLaterais"];
$LampadasTraseiras = $_POST["LampadasTraseiras"];
$eixoDireitoUm = $_POST["eixoDireitoUm"];
$eixoDireitoDois = $_POST["eixoDireitoDois"];
$eixoDireitoTres = $_POST["eixoDireitoTres"];
$eixoEsquerdoUm = $_POST["eixoEsquerdoUm"];
$eixoEsquerdoDois = $_POST["eixoEsquerdoDois"];
$eixoEsquerdoTres = $_POST["eixoEsquerdoTres"];

$sql = "INSERT INTO cadastrar_VistoriaCarreta_40 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issssssssssssssssssssssss', $codigo, $placa,$nome,$data, $qtsFerramentas, $Lona, $Cordas,$Cinta,$Catracas, $CatracasSoltas, $BoloCordas, $Documentos,$qtsChaves, $Estepe,$cantoneira,$KitEmergenciaP,$KitEmergenciaG,$LampadasLaterais,$LampadasTraseiras,$eixoDireitoUm,$eixoDireitoDois,$eixoDireitoTres,$eixoEsquerdoUm,$eixoEsquerdoDois,$eixoEsquerdoTres);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
