<?php

include "conexao.php";

$json = array();

$consulta = "select id, placaCarreta, tipoCarreta from carreta";
$resultado = mysqli_query($conexao, $consulta);

while($registro = mysqli_fetch_array($resultado)){
	$json['carreta'][] = $registro;
	//echo $registro['codigo']. ' - ' .$registro['nome'].' - '.$registro['categoria'].' - '.$registro['professor'].' <br/>';
	
}

	mysqli_close($conexao);
	echo json_encode($json);


?>