<?php
include "conexao.php";

$codigo = $_POST["id"];
$placa = $_POST["PLACA"];
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
$Macaco = $_POST["macaco"];
$FerroMacaco = $_POST["ferroMacaco"];
$Triangulo = $_POST["triangulo"];
$ChaveRodas = $_POST["ChaveRodas"];
$tapetes = $_POST["tapetes"];
$catracas = $_POST["catracas"];
$catracaMovel = $_POST["Catracas_M"];
$cordas = $_POST["cordas"];
$Cinta = $_POST["cinta"];
$carrinhoHidraulico = $_POST["carrinhoHidraulico"];
$calotas = $_POST["calotas"];
$qtsChaves = $_POST["qtsChaves"];
$OculosProtecao = $_POST["OculosProtecao"];
$Controle = $_POST["ControlePortao"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$KitEmergenciaP = $_POST["KitEmergenciaP"];
$chavePonta = $_POST["chavePonta"];
$chaveDuplaFenda = $_POST["chaveDuplaFenda"];
$chaveBoca = $_POST["chaveBoca"];
$pino = $_POST["pino"];
$lampadasDianteiras = $_POST["lampadasDianteiras"];
$lampadasLaterais = $_POST["lampadasLaterais"];
$lampadasTraseiras = $_POST["lampadasTraseiras"];
$Interior = $_POST["interior"];

$sql = "INSERT INTO fichaSprinter VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issssssssssssssssssssssssssssssssssss', $codigo, $placa, $extintor, $capaDeChuva, $ColeteRefletivo,$Xrefletivo, $parDeluvas, $capacete, $GuardaChuva,$MarteloMadeira,$Documentos,$Acendedor,$CabosForca,$Macaco,$FerroMacaco,$Triangulo,$ChaveRodas,$tapetes,$catracas,$catracaMovel,$cordas,$Cinta,$carrinhoHidraulico,$calotas,$qtsChaves,$OculosProtecao,$Controle,$KitEmergenciaG,$KitEmergenciaP,$chavePonta,$chaveDuplaFenda,$chaveBoca,$pino,$lampadasDianteiras,$lampadasLaterais, $lampadasTraseiras, $Interior);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
