<?php

function DBEnviar($query) {
    $banco = DBConnect();

    $resultado = @mysqli_query($banco, $query);

    DBClose($banco);

    return $resultado;
}

function DBApagar($apagar) {
	$banco = DBConnect();

	$query = "DELETE FROM lutadores WHERE id = $apagar";

	$resultado = DBEnviar($query);

	DBClose($banco);

	return $resultado;
}

function DBRows($table) {
	$banco = DBConnect();

	$query = "SELECT id FROM $table ORDER BY id DESC";

	$rows = DBEnviar($query);

	if (!@mysqli_num_rows($rows)) {
		return false;
	} else {
		
		while($array = @mysqli_fetch_assoc($rows)) {

			$data[] = $array;
		
		foreach ($data as $key => $value) {
			foreach ($value as $key1 => $value1) {
				return $value1;
			}
		}
	}
	}

	DBClose($banco);
}


function DBRetornarAtr($qtd = '*', $table, $id) {

	$query = "SELECT $qtd FROM $table where id = $id";
	
	$retorno = DBEnviar($query);

	if (!@mysqli_num_rows($retorno)) {
		return false;
	} else {
		while ($res = @mysqli_fetch_assoc($retorno)) {
			$data[] = $res;

			foreach ($data as $key => $value) {
				foreach ($value as $key1 => $value1) {
					return $value1;
				}
			}
		}
	}
}


function retornarSenha() {
	$query = "SELECT senha FROM senha";

	$retorno = DBEnviar($query);

	if(!@mysqli_num_rows($retorno)){
		return Batata;
	} else {
		foreach ($retorno as $key => $value) {
			foreach ($value as $campo => $senha) {
				return $senha;
			}
		}
	}
}
