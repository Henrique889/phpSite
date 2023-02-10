<?php
include "conexao.php";

$codigo =  null;
$placa = $_POST["placa"];
$nome = $_POST["nome"];
$data = $_POST["data"];
$ChaveRodas = $_POST["ChaveRodas"];
$Cordas = $_POST["cordas"];
$Cinta = $_POST["cinta"];
$Catracas = $_POST["catracas"];
$caboAco = $_POST["caboAco"];
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$cantoneira = $_POST["Cantoneira"];
$Estepe = $_POST["Estepe"];
$catracaSolta = $_POST["catracaSolta"];

$KitEmergenciaP = $_POST["KitEmergenciaP"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$LampadasLaterais = $_POST["LampadasLaterais"];
$LampadasTraseiras = $_POST["LampadasTraseiras"];
$eixoDireitoUm = $_POST["eixoDireitoUm"];
$eixoDireitoDois = $_POST["eixoDireitoDois"];
$eixoDireitoTres = $_POST["eixoDireitoTres"];
$eixoEsquerdoUm = $_POST["eixoEsquerdoUm"];
$eixoEsquerdoDois = $_POST["eixoEsquerdoDois"];
$eixoEsquerdoTres = $_POST["eixoEsquerdoTres"];

$sql = "INSERT INTO cadastrar_VistoriaCarreta_Sider VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssssssssssssssssss', $codigo, $placa,$nome,$data, $ChaveRodas, $Cordas,$Cinta,$Catracas, $caboAco, $Documentos,$qtsChaves,$Estepe, $cantoneira, $catracaSolta,$KitEmergenciaP,$KitEmergenciaG,$LampadasLaterais,$LampadasTraseiras,$eixoDireitoUm,$eixoDireitoDois,$eixoDireitoTres,$eixoEsquerdoUm,$eixoEsquerdoDois,$eixoEsquerdoTres);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
