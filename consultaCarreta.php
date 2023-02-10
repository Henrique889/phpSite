<?PHP

include "conexao.php";

$json=array();

	if(isset($_GET["PLACA"])){
		$codigo=$_GET["PLACA"];
		
		$consulta="select * from fichaCarreta where PLACA= '{$codigo}'";
		$resultado=mysqli_query($conexao,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			//$result["id"]=$registro['id'];
			//$result["PLACA"]=$registro['PLACA'];
			$json['fichaCarreta'][]=$registro;
		}else{
			$resultar["id"]=0;
			$resultar["PLACA"]='nao registrado';
			$json['fichaCarreta'][]=$resultar;
		}
		
		mysqli_close($conexao);
		echo json_encode($json);
	}
	else{
		    $resultar["id"]=0;
			$resultar["PLACA"]='nao registrado';
			$json['fichaCarreta'][]=$resultar;
		echo json_encode($json);
	}
?>