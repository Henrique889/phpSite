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
$lookCompleto = $_POST["lookCompleto"];
$BoloCordas = $_POST["BoloCordas"];
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$Plataforma = $_POST["Plataforma"];
$cantoneira = $_POST["Cantoneira"];
$Estepe = $_POST["Estepe"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$KitEmergenciaP = $_POST["KitEmergenciaP"];

$LampadasLaterais = $_POST["LampadasLaterais"];
$LampadasTraseiras = $_POST["LampadasTraseiras"];
$eixoDireitoUm = $_POST["eixoDireitoUm"];
$eixoDireitoDois = $_POST["eixoDireitoDois"];
$eixoDireitoTres = $_POST["eixoDireitoTres"];
$eixoEsquerdoUm = $_POST["eixoEsquerdoUm"];
$eixoEsquerdoDois = $_POST["eixoEsquerdoDois"];
$eixoEsquerdoTres = $_POST["eixoEsquerdoTres"];

$sql = "INSERT INTO cadastrar_VistoriaCarreta VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssssssssssssssssssss', $codigo, $placa,$nome,$data, $qtsFerramentas, $Lona, $Cordas,$Cinta,$Catracas, $lookCompleto, $BoloCordas, $Documentos,$qtsChaves,$Estepe, $Plataforma, $cantoneira,$KitEmergenciaG,$KitEmergenciaP,$LampadasLaterais,$LampadasTraseiras,$eixoDireitoUm,$eixoDireitoDois,$eixoDireitoTres,$eixoEsquerdoUm,$eixoEsquerdoDois,$eixoEsquerdoTres);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
