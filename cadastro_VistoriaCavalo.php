<?php
include "conexao.php";

$codigo =  null;
$placa = $_POST["placa"];
$nome = $_POST["nome"];
$data = $_POST["data"];
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
$MarteloFerro = $_POST["MarteloFerro"];
$Documentos = $_POST["Documentos"];
$Acendedor = $_POST["Acendedor"];
$CabosForca = $_POST["CabosForca"];
$macaco = $_POST["macaco"];
$ferroMacaco = $_POST["ferroMacaco"];
$triangulo = $_POST["triangulo"];
$ChaveRodas = $_POST["ChaveRodas"];
$Tacografo = $_POST["Tacografo"];
$tapetes = $_POST["tapetes"];
$caboAco = $_POST["caboAco"];

$cordas = $_POST["cordas"];
$cinta = $_POST["cinta"];
$qtsChaves = $_POST["qtsChaves"];
$lanterna = $_POST["lanterna"];

$KitEmergenciaP = $_POST["KitEmergenciaP"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$Interclima = $_POST["Interclima"];
$InterclimaFuncionando = $_POST["InterclimaFuncionando"];
$LampadasDianteiras = $_POST["LampadasDianteiras"];
$LampadasLaterais = $_POST["LampadasLaterais"];
$LampadasTraseiras = $_POST["LampadasTraseiras"];

$sql = "INSERT INTO cadastrar_VistoriaCavalo VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssssssssssssssssssssssssssssss', $codigo, $placa,$nome,$data,$extintor, $capaDeChuva, $Antena,$Radio,$Lona,$ColeteRefletivo,$Xrefletivo, $parDeluvas, $capacete, $GuardaChuva, $MarteloMadeira,$MarteloFerro, $Documentos, $Acendedor, $CabosForca, $macaco, $ferroMacaco, $triangulo, $ChaveRodas, $Tacografo, $tapetes, $cordas, $cinta, $qtsChaves,$lanterna ,$KitEmergenciaP,$KitEmergenciaG,$Interclima, $InterclimaFuncionando, $LampadasDianteiras, $LampadasLaterais, $LampadasTraseiras);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
