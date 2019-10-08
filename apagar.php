<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require_once 'lutadores/lutadores.php';

    $senha = retornarSenha();

	$apagado = isset($_POST['apagando'])? $_POST['apagando']: null;
    $senhaDigitada = isset($_POST['senha'])? $_POST['senha']: null;

    if ($apagado != null) {
        if ($senhaDigitada){
               if ($apagado != 0) {
                    if($senhaDigitada == $senha) {
                        if(DBApagar($apagado)) {
                            echo "<script>alert('Sucesso :/ (ATUALIZE A PÁGINA)')</script>";        
                        } else {
                            echo "<script>alert('Falhou :) (ATUALIZE A PÁGINA)')</script>";
                        }
                    } else {
                        echo "<script>alert('Senha incorreta!! :)')</script>";
                    }   
                } else {
                     echo "<script>alert('Nenhum O.o')</script>";
                }  
            } 
        }
          


    ?>

	
</body>
</html>