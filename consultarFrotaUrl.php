<?PHP

include "conexao.php";

$json=array();

	if(isset($_GET["id"])){
		$codigo=$_GET["id"];
		
		$consulta="select * from frota1 where id= '{$codigo}'";
		$resultado=mysqli_query($conexao,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["placaVeiculo"]=$registro['placaVeiculo'];
			$result["modelo"]=$registro['modelo'];
			$result["url_imagem"]= $registro['url_imagem'];
			$json['frota1'][]=$result;
		}else{
			$resultar["id"]=0;
			$resultar["placaVeiculo"]='nao registrado';
			$resultar["modelo"]='nao registrado';
			$resultar["url_imagem"]='nao registrado';
			$json['frota1'][]=$resultar;
		}
		
		mysqli_close($conexao);
		echo json_encode($json);
	}
	else{
		    $resultar["id"]=0;
			$resultar["placaVeiculo"]='nao registrado';
			$resultar["modelo"]='nao registrado';
			$resultar["url_imagem"]='nao registrado';
			$json['frota1'][]=$resultar;
		echo json_encode($json);
	}
?>