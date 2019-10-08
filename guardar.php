<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	require_once 'lutadores/lutadores.php';

	$nome_guardar = isset($_POST["nnome_guardar"])? $_POST["nnome_guardar"]: null;
                $ataque_guardar = isset($_POST["nataque_guardar"])? $_POST["nataque_guardar"]: "0000";
                $defesa_guardar = isset($_POST["ndefesa_guardar"])? $_POST["ndefesa_guardar"]: "0000";
                $especial_1_guardar = isset($_POST["np1_guardar"])? $_POST["np1_guardar"]: 0;
                $especial_2_guardar = isset($_POST["np2_guardar"])? $_POST["np2_guardar"]: 0;

	if ($nome_guardar != null) {

		$query = "insert into lutadores (nome, ataque, defesa, especial1, especial2) values ('$nome_guardar', $ataque_guardar, $defesa_guardar, $especial_1_guardar, $especial_2_guardar)";

		if (DBEnviar($query)) {
			echo "<script>alert('Sucesso!! (ATUALIZE A PÁGINA!!)')</script>";
		} else {
			echo "<script>alert('Falha')</script>";
		}
			
	}

            ?>

</body>
</html>