<?php
include "conexao.php";

$codigo = $_POST["id"];
$placa = $_POST["PLACA"];
$extintor = $_POST["extintor"];
$capaDeChuva = $_POST["capaDeChuva"];
$Antena = $_POST["Antena"];
$Radio = $_POST["Radio"];
$Lona = $_POST["Lona"];
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
$Tacografo = $_POST["Tacografo"];
$tapetes = $_POST["tapetes"];
$caboAco = $_POST["caboAco"];
$catracas = $_POST["catracas"];
$boloCorda = $_POST["boloCorda"];
$cordas = $_POST["cordas"];
$Cinta = $_POST["cinta"];
$qtsChaves = $_POST["qtsChaves"];
$lanterna = $_POST["lanterna"];
$OculosProtecao = $_POST["OculosProtecao"];
$Controle = $_POST["ControlePortao"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$KitEmergenciaP = $_POST["KitEmergenciaP"];
$Interclima = $_POST["Interclima"];
$chekInterclima = $_POST["chekInterclima"];
$lampadasDianteiras = $_POST["lampadasDianteiras"];
$lampadasLaterais = $_POST["lampadasLaterais"];
$lampadasTraseiras = $_POST["lampadasTraseiras"];
$Interior = $_POST["interior"];

$sql = "INSERT INTO fichaCarroceria VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issssssssssssssssssssssssssssssssssssss', $codigo, $placa, $extintor, $capaDeChuva, $Antena, $Radio, $Lona, $ColeteRefletivo,$Xrefletivo, $parDeluvas, $capacete, $GuardaChuva,$MarteloMadeira,$Documentos,$Acendedor,$CabosForca,$Macaco,$FerroMacaco,$Triangulo,$ChaveRodas,$Tacografo,$tapetes,$caboAco,$catracas,$boloCorda,$cordas,$Cinta,$qtsChaves,$lanterna,$OculosProtecao,$Controle,$KitEmergenciaG,$KitEmergenciaP,$Interclima, $chekInterclima,$lampadasDianteiras,$lampadasLaterais, $lampadasTraseiras, $Interior);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
