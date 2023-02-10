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
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$Estepe = $_POST["Estepe"];

$LampadasLaterais = $_POST["LampadasLaterais"];
$LampadasTraseiras = $_POST["LampadasTraseiras"];
$eixoDireitoUm = $_POST["eixoDireitoUm"];
$eixoDireitoDois = $_POST["eixoDireitoDois"];
$eixoDireitoTres = $_POST["eixoDireitoTres"];
$eixoEsquerdoUm = $_POST["eixoEsquerdoUm"];
$eixoEsquerdoDois = $_POST["eixoEsquerdoDois"];
$eixoEsquerdoTres = $_POST["eixoEsquerdoTres"];

$sql = "INSERT INTO cadastro_VistoriaCarreta_Bug20 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssssssssssssss', $codigo, $placa,$nome,$data, $qtsFerramentas, $Lona, $Cordas,$Cinta,$Catracas, $Documentos,$qtsChaves, $Estepe, $LampadasLaterais,$LampadasTraseiras,$eixoDireitoUm,$eixoDireitoDois,$eixoDireitoTres,$eixoEsquerdoUm,$eixoEsquerdoDois,$eixoEsquerdoTres);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
