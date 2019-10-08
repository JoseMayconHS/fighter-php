<!DOCTYPE html>
<html>
<head>
	<!--<script type="text/javascript" src="script/jquery.js"></script>
	<script type="text/javascript" src="script/jquery-form.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".form-combate").ajaxForm({
				target: $("#div-combate-atualizada"),
				success: function() {
					$(".form-combate").resetForm();
				}

			})
		})
	</script>-->
	<title></title>
	<?php

		require_once 'lutadores/lutadores.php';
 				$lutador1 = isset($_POST["nlutador1"])? $_POST["nlutador1"]: $null;
                $lutador2 = isset($_POST["nlutador2"])? $_POST["nlutador2"]: $null;  

                $src1l1 = '0.gif';
                $src2l1 = '0.gif';
                $src1l2 = '0.gif';
                $src2l2 = '0.gif';
                if ($m[$lutador1]->getNome() != "NULL" && $m[$lutador2]->getNome() != "NULL") {
                    for ($i = 1; $i <= $m[$lutador1]->getEspecial_1(); $i++) {
                        $src1l1 = $i . '.png';
                    }
                    for ($i = 1; $i <= $m[$lutador1]->getEspecial_2(); $i++) {
                        $src2l1 = $i . '.png';
                    }
                    for ($i = 1; $i <= $m[$lutador2]->getEspecial_1(); $i++) {
                        $src1l2 = $i. '.png';
                    }
                    for ($i = 1; $i <= $m[$lutador2]->getEspecial_2(); $i++) {
                        $src2l2 = $i. '.png';
                    }
                }

?>
</head>
<body>

	<!--<p class="atualizar"><form class="form-combate" method="POST"><input class="btn-submit" type="submit" value="ATUALIZAR"><input class="none" type="text" name="nlutador1" value="<?php echo $lutador1 ?>" redonly><input class="none" type="text" name="nlutador2" value="<?php echo $lutador2 ?>" readonly></form></p>-->
	<div id="div-combate-atualizada">
	<div class="tabelas">                   
                           
                        <table class="informacoes-table">
                            <tr><td colspan="2"><?php echo $m[$lutador1]->getNome() ?> </td><td class="td_nvl"><span><b><?php echo number_format($m[$lutador1]->getNvl(), 0) ?></b></span></td></tr>
                            <tr><td><img style="float: left;" src="imagens/ataque.png"><span style="color: red;"><?php echo number_format($m[$lutador1]->getAtaque(), 0, ",", ".") ?> </span></td><td><img style="float: left;" src="imagens/defesa.png"><span style="color: green;"><?php echo number_format($m[$lutador1]->getDefesa(), 0, ",", ".") ?> </span></td></tr>
                            <tr><td><img style="float: left;" src="imagens/dano.png"><span style="color: white;"><?php echo number_format($m[$lutador1]->getDano(), 0) ?> </span></td><td><img style ="float: left;"src="imagens/vida.png"><span style="color: pink;"><?php echo number_format($m[$lutador1]->getVida(), 0, ",", ".") ?> </span></td></tr>
                            <tr><td><img src="imagens/<?php echo $src1l1 ?>"></td><td><img src="imagens/<?php echo $src2l1 ?>"></td></tr>
                            <tr><td colspan="2"> FC: <span style="color: silver;"><b><?php echo number_format($m[$lutador1]->getFc(),0,",",".") ?> </b></span></td></tr>
                        </table>
                        <table class="informacoes-table">
                            <tr><td colspan="2"><?php echo $m[$lutador2]->getNome() ?> </td><td class="td_nvl"><span><b><?php echo number_format($m[$lutador2]->getNvl(), 0) ?></b></span></td></tr>
                            <tr><td><img style="float: left;" src="imagens/ataque.png"><span style="color: red;"><?php echo number_format($m[$lutador2]->getAtaque(), 0, ",", ".") ?> </span></td><td><img style="float: left;" src="imagens/defesa.png"><span style="color: green;"><?php echo number_format($m[$lutador2]->getDefesa(), 0, ",", ".") ?> </span></td></tr>
                            <tr><td><img style="float: left;" src="imagens/dano.png"><span style="color: white;"><?php echo number_format($m[$lutador2]->getDano(), 0) ?> </span></td><td><img style ="float: left;"src="imagens/vida.png"><span style="color: pink;"><?php echo number_format($m[$lutador2]->getVida(), 0, ",", ".") ?> </span></td></tr>
                            <tr><td><img src="imagens/<?php echo $src1l2 ?>"></td><td><img src="imagens/<?php echo $src2l2 ?>"></td></tr>
                            <tr><td colspan="2"> FC: <span style="color: silver;"><b><?php echo number_format($m[$lutador2]->getFc(),0,",",".") ?> </b></span></td></tr>
                        </table>
                    </div>
            <div class="batalha">
                <?php
                        require_once "luta.php";
                        lutar($m[$lutador1], $m[$lutador2]);
                ?> 
        </div>
    </div>

</body>
</html>

