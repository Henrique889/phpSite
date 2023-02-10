<?PHP

include "conexao.php";

$json=array();

	if(isset($_GET["PLACA"])){
		$placaV=$_GET["PLACA"];
		
		$consulta="select * from fichaCavalo where PLACA= '{$placaV}'";
		$resultado=mysqli_query($conexao,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['fichaCavalo'][]=$registro;
		}else{
			$resultar["id"]=0;
			$resultar["PLACA"]='nao registrado';
			$json['fichaCavalo'][]=$resultar;
		}
		
		mysqli_close($conexao);
		echo json_encode($json);
	}
	else{
		    $resultar["id"]=0;
			$resultar["PLACA"]='nao registrado';
			$json['fichaCavalo'][]=$resultar;
		echo json_encode($json);
	}
?>