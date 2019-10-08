<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<pre>
		
		<?php

require 'class/classMonstros.php';
require 'banco/config.php';
require 'banco/conexao.php';
require 'banco/database.php';

$rows = DBRows('lutadores');

for ($l = 1; $l <= $rows; $l++) {
$nome = DBRetornarAtr('nome' ,'lutadores', $l);
$ataque = DBRetornarAtr('ataque' ,'lutadores', $l);
$defesa = DBRetornarAtr('defesa' ,'lutadores', $l);
$especial_1 = DBRetornarAtr('especial1' ,'lutadores', $l);
$especial_2 = DBRetornarAtr('especial2' ,'lutadores', $l);

$m[] = new classMonstros($nome, $ataque, $defesa, $especial_1, $especial_2);
}
?>

	</pre>

</body>
</html>

