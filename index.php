<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>



	<body>


	
        <?php

		
		$datos=array("Nombre"=> "Julian", "Apellido"=>"Gomez", "Edad"=>"28");
		
		foreach ($datos as $clave=>$value) {
			
			echo " para la clave $clave le corresponde el valor del array asociativo: $value<br>";
		}
		

		?>		
									
				
</body>
</html>