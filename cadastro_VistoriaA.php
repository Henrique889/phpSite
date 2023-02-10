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
$catracas = $_POST["catracas"];
$catracaMovel = $_POST["catracaMovel"];
$cordas = $_POST["cordas"];
$cinta = $_POST["cinta"];
$qtsChaves = $_POST["qtsChaves"];
$lanterna = $_POST["lanterna"];
$KitEmergenciaP = $_POST["KitEmergenciaP"];
$KitEmergenciaG = $_POST["KitEmergenciaG"];
$LampadasDianteiras = $_POST["LampadasDianteiras"];
$LampadasLaterais = $_POST["LampadasLaterais"];
$LampadasTraseiras = $_POST["LampadasTraseiras"];
$Interior = $_POST["Interior"];

$sql = "INSERT INTO cadastrar_Vistoria1 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('issssssssssssssssssssssssssssssssssss', $codigo, $placa,$nome,$data,$extintor, $capaDeChuva,$Antena,$Radio,$Lona, $ColeteRefletivo,$Xrefletivo, $parDeluvas, $capacete, $GuardaChuva, $MarteloMadeira, $Documentos, $CabosForca,$Acendedor , $macaco, $ferroMacaco, $triangulo, $ChaveRodas,$Tacografo,$tapetes,$caboAco, $catracas, $catracaMovel, $cordas, $cinta,$qtsChaves, $lanterna, $KitEmergenciaG,$KitEmergenciaP, $LampadasDianteiras, $LampadasLaterais, $LampadasTraseiras, $Interior);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
