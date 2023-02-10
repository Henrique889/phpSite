<?php
include "conexao.php";

$codigo =  null;
$PlacaV = $_POST["PlacaV"];
$Nome = $_POST["Nome"];
$Data = $_POST["Data"];
$KM = $_POST["KM"];
$AlinhamentoD = $_POST["AlinhamentoD"];
$AlinhamentoKM = $_POST["AlinhamentoKM"];
$AlinhamentoS = $_POST["AlinhamentoS"];
$AlinhamentoR = $_POST["AlinhamentoR"];
$ExtintorD = $_POST["ExtintorD"];
$ExtintorT = $_POST["ExtintorT"];
$Palletera = $_POST["Palletera"];
$PalleteraD = $_POST["PalleteraD"];
$PaletasD = $_POST["PaletasD"];
$PaletasKM = $_POST["PaletasKM"];
$PaletasT = $_POST["PaletasT"];
$OleoD = $_POST["OleoD"];
$OleoKm = $_POST["OleoKm"];
$OleoTroca = $_POST["OleoTroca"];
$FiltroM_D = $_POST["FiltroM_D"];
$FiltroM_D = $_POST["FiltroM_D"];
$FiltroM_KM = $_POST["FiltroM_KM"];
$FiltroM_Troca = $_POST["FiltroM_Troca"];
$FiltroC_Data = $_POST["FiltroC_Data"];
$FiltroC_km = $_POST["FiltroC_km"];
$FiltroC_troca = $_POST["FiltroC_troca"];
$FiltroArData = $_POST["FiltroArData"];
$FiltroArKm = $_POST["FiltroArKm"];
$FiltroArTroca = $_POST["FiltroArTroca"];
$FiltroArSData = $_POST["FiltroArSData"];
$FiltroArSKm = $_POST["FiltroArSKm"];
$FiltroArSTroca = $_POST["FiltroArSTroca"];
$OleoCombustivel_D = $_POST["OleoCombustivel_D"];
$OleoCombustivel_KM = $_POST["OleoCombustivel_KM"];
$OleoCombustivel_T = $_POST["OleoCombustivel_T"];
$OleoDiferencialD = $_POST["OleoDiferencialD"];
$OleoDiferencialKM = $_POST["OleoDiferencialKM"];
$OleoDiferencialT = $_POST["OleoDiferencialT"];
$PneusD = $_POST["PneusD"];
$PneusT = $_POST["PneusT"];
$PneusE = $_POST["PneusE"];
$Correia_D = $_POST["Correia_D"];
$Correia_KM = $_POST["Correia_KM"];
$Correia_T = $_POST["Correia_T"];
$Tacografo = $_POST["Tacografo"];
$Ripas = $_POST["Ripas"];
$Assoalho = $_POST["Assoalho"];
$Operador = $_POST["Operador"];
$Ras_Data = $_POST["Ras_Data"];
$Ras_Status = $_POST["Ras_Status"];
$Manu_Pecas = $_POST["Manu_Pecas"];

$sql = "INSERT INTO relatorios_mensal VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssssssssssssssssssssssssssssssssssssssssssss', $codigo, $PlacaV,$Data,$Nome,$KM, $AlinhamentoD,$AlinhamentoKM,$AlinhamentoS,$AlinhamentoR, $ExtintorD,$ExtintorT, $Palletera, $PalleteraD, $PaletasD, $PaletasKM, $PaletasT, $OleoD,$OleoKm,$OleoTroca, $FiltroM_D, $FiltroM_KM, $FiltroM_Troca, $FiltroC_Data,$FiltroC_km,$FiltroC_troca,$FiltroArData, $FiltroArKm, $FiltroArTroca, $FiltroArSData, $FiltroArSKm,$FiltroArSTroca, $OleoCombustivel_D, $OleoCombustivel_KM,$OleoCombustivel_T, $OleoDiferencialD,$OleoDiferencialKM, $OleoDiferencialT, $PneusD, $PneusT, $PneusE,$Correia_D,$Correia_KM,$Correia_T,$Tacografo,$Ripas,$Assoalho,$Operador,$Ras_Data,$Ras_Status,$Manu_Pecas);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
