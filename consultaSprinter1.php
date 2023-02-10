<?PHP

include "conexao.php";

$json=array();

	if(isset($_GET["PLACA"])){
		$placaV=$_GET["PLACA"];
		
		$consulta="select * from fichaSprinter where PLACA= '{$placaV}'";
		$resultado=mysqli_query($conexao,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['fichaSprinter'][]=$registro;
		}else{
			$resultar["id"]=0;
			$resultar["PLACA"]='nao registrado';
			$json['fichaSprinter'][]=$resultar;
		}
		
		mysqli_close($conexao);
		echo json_encode($json);
	}
	else{
		    $resultar["id"]=0;
			$resultar["PLACA"]='nao registrado';
			$json['fichaSprinter'][]=$resultar;
		echo json_encode($json);
	}
?>