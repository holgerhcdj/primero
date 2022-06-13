<?php
require_once("Estudiantes.php");
$Estudiantes=new Estudiantes();
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lista estudiantes</title>
	<style>
		th{
			padding: 5px;
			background: black;
			color:white;
		}
		td{
			padding: 5px;
			border:solid 1px #807979;
		}
		table{
			width:80%;
			border-collapse:collapse;
		}
		a{
			background:#b1b5c8 ;
			color:#F2EDED;
			text-decoration:none;
			padding:5px;
			font-family: Arial;
			border-radius:5px;
		}
		img{
			width:20px;
		}
		img{
			width:20px;
		}
	</style>
</head>
<body>
	<h1 style="background:#7AC7D1;text-align:center;color:white;">lista estudiantes VN</h1>
	<table align="center">
		<tr>
			<th style="background:#CD7272;color:white;">#</th>
			<th style="background:#CD7272;color:white;font:small-caps 100%/200% serif;">Nombres</th>
			<th style="background:#CD7272;color:white;">Apellidos</th>
			<th style="background:#CD7272;color:white;">cedula</th>
			<th style="background:#CD7272;color:white;">edad</th>
			<th style="background:#CD7272;color:white;">ciudad</th>
			<th style="background:#CD7272;color:white;">genero</th>
			<th>Acciones</th>
		</tr>
		<?php
		$x=0;
		foreach ($consulta as $c) {
			$x=$x+1;
			echo "<tr>
			     <td>$x</td>
			      <td>{$c["est_nombres"]}</td>
			      <td>{$c["est_apellidos"]}</td>
			      <td>{$c["est_cedula"]}</td>
			      <td>{$c["est_edad"]}</td>
			      <td>{$c["est_ciudad"]}</td>
			      <td>{$c["est_genero"]}</td>
			      <td>

			      <a href=>
			      <img src='edit.png'/>

			      <a href=>
			      <img src='delete.png'/>
			      </a>

			      </td>

			</tr>";
		}

	

		?>
	</table>
</body>
</html>