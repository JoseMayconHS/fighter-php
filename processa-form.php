<?php

		$nome = isset($_POST['name'])? $_POST['name']: null;
		$comentario = isset($_POST['comment'])? $_POST['comment']: null;
		echo "<pre>";
		echo $nome. ", ". $comentario;
		echo "</pre>";
?>