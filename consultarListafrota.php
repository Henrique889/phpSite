<?php

include "conexao.php";

$json = array();

$consulta = "select id, placaVeiculo, modelo from frota1";
$resultado = mysqli_query($conexao, $consulta);

while($registro = mysqli_fetch_array($resultado)){
	$json['frota1'][] = $registro;
	//echo $registro['codigo']. ' - ' .$registro['nome'].' - '.$registro['categoria'].' - '.$registro['professor'].' <br/>';
	
}

	mysqli_close($conexao);
	echo json_encode($json);


?>