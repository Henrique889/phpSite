<?php

require_once "conexao.php";

$json = array();

if(isset($_GET['id'])){
	$codigo = $_GET['id'];
	$sql = "DELETE FROM frota1 WHERE id = ? ";
	$stm = $conexao->prepare($sql);
	$stm->bind_param('i', $codigo);
	
	if($stm->execute()){
		echo "excluido";

	}else{
		echo "erro";
	}

	mysqli_close($conexao);

}else{
	echo "naoExiste";
}


?>