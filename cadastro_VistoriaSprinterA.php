<?php
include "conexao.php";

$codigo =  null;
$placa = $_POST["placa"];
$nome = $_POST["nome"];
$data = $_POST["data"];
$extintor = $_POST["extintor"];
$capaDeChuva = $_POST["capaDeChuva"];
$ColeteRefletivo = $_POST["ColeteRefletivo"];
$Xrefletivo = $_POST["Xrefletivo"];
$parDeluvas = $_POST["parDeluvas"];
$capacete = $_POST["capacete"];
$GuardaChuva = $_POST["GuardaChuva"];
$MarteloMadeira = $_POST["MarteloMadeira"];
$Documentos = $_POST["Documentos"];
$Acendedor = $_POST["Acendedor"];
$CabosForca = $_POST["CabosForca"];
$macaco = $_POST["macaco"];
$ferroMacaco = $_POST["ferroMacaco"];
$triangulo = $_POST["triangulo"];
$ChaveRodas = $_POST["ChaveRodas"];
$tapetes = $_POST["tapetes"];
$catracas = $_POST["catracas"];
$Catracas_M = $_POST["Catracas_M"];
$cordas = $_POST["cordas"];
$cinta = $_POST["cinta"];

$carrinho = $_POST["carrinho"];
$calotas = $_POST["calotas"];
$qtsChaves = $_POST["qtsChaves"];

$KitEmergenciaP = $_POST["KitEmergenciaP"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$ChaveTorxDupla = $_POST["ChaveTorxDupla"];
$ChaveFenda = $_POST["ChaveFenda"];
$ChaveBoca = $_POST["ChaveBoca"];
$Pino = $_POST["Pino"];

$LampadasDianteiras = $_POST["LampadasDianteiras"];
$LampadasLaterais = $_POST["LampadasLaterais"];
$LampadasTraseiras = $_POST["LampadasTraseiras"];
$Interior = $_POST["Interior"];

$sql = "INSERT INTO cadastrar_VistoriaSprinter1 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issssssssssssssssssssssssssssssssssss', $codigo, $placa,$nome,$data,$extintor, $capaDeChuva, $ColeteRefletivo,$Xrefletivo, $parDeluvas, $capacete, $GuardaChuva, $MarteloMadeira, $Documentos, $Acendedor, $CabosForca, $macaco, $ferroMacaco, $triangulo, $ChaveRodas,$tapetes, $catracas, $Catracas_M, $cordas, $cinta,$carrinho,$calotas, $qtsChaves, $KitEmergenciaP,$KitEmergenciaG,$ChaveTorxDupla, $ChaveFenda,$ChaveBoca,$Pino, $LampadasDianteiras, $LampadasLaterais, $LampadasTraseiras, $Interior);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
