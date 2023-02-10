<?PHP

include "conexao.php";

$json=array();

	if(isset($_GET["name"])){
		$nome=$_GET["name"];
		
		$consulta="select * from image_AvariasMarcadas where name= '{$nome}'";
		$resultado=mysqli_query($conexao,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['image_AvariasMarcadas'][]=$registro;
		}else{
			$resultar["id"]=0;
			$resultar["name"]='nao registrado';
			$json['image_AvariasMarcadas'][]=$resultar;
		}
		
		mysqli_close($conexao);
		echo json_encode($json);
	}
	else{
		    $resultar["id"]=0;
			$resultar["name"]='nao registrado';
			$json['image_AvariasMarcadas'][]=$resultar;
		echo json_encode($json);
	}
?>