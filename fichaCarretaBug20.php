<?php
include "conexao.php";

$codigo = $_POST["id"];
$placa = $_POST["PLACA"];
$qtsFerramentas = $_POST["qtsFerramentas"];
$Lona = $_POST["Lona"];
$Cordas = $_POST["Cordas"];
$Cinta = $_POST["Cinta"];
$Catracas = $_POST["Catracas"];
$Documentos = $_POST["Documentos"];
$qtsChaves = $_POST["qtsChaves"];
$Estepe = $_POST["Estepe"];


$sql = "INSERT INTO fichaCarreta_Bug20 VALUES (?,?,?,?,?,?,?,?,?,?)";
$stm = $conexao->prepare($sql);
$stm->bind_param('isssssssss', $codigo, $placa, $qtsFerramentas, $Lona, $Cordas,$Cinta,$Catracas, $Documentos,$qtsChaves,$Estepe);

if($stm->execute()){
	echo "registra";
} else{
	echo "não registrou";
}

mysqli_close($conexao);

?>
