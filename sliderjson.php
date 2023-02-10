<?php

include "conexao.php";

$response = array();
    
if(isset($_GET["placa"])){
	$placa=$_GET["placa"];
    $consulta = "select * from imagens_avarias where placa = '{$placa}'";
    $resultado = mysqli_query($conexao, $consulta);

    if(mysqli_num_rows($resultado) > 0){
        $response['imagens_avarias'] = array();
    
        while($row = mysqli_fetch_array($resultado)){
            $json = array();
            $json['image_Url'] = $row['image_Url'];
            array_push($response['imagens_avarias'],$json);
        }
        echo json_encode($response);
    }
    //echo array("server_response" =>$json);
}

	mysqli_close($conexao);
	echo json_encode($json);


?>