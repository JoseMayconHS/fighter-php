<?php

$nome = isset($_POST['nome'])? $_POST['nome']: 'NULL';
$email = isset($_POST['email'])? $_POST['email']: "NUll";
$recado = isset($_POST['problema'])? $_POST['problema']: "NULL";

if ($nome != "NULL") {
	require '../lutadores/banco/config.php';
	require '../lutadores/banco/conexao.php';
	require '../lutadores/banco/database.php';

	$query = "insert into relatorios (nome, email, recado) values ('$nome', '$email', '$recado')";

	if(DBEnviar($query)) {
		echo "<script>alert('Enviado')</script>";
	} else {
		echo "<script>alert('Falhou')</script>";
	}
}
