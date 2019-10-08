<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="script/jquery-form.js"></script>
        <script type="text/javascript">
        	$("#form-guardar").ajaxForm({
        		target: $("#div-guardar"),
        		success: function() {
        			$("#form-guardar").resetForm();
        		}
        	})

        	//BOTÃO ENVIAR E OCULTANDO A DIV

			$("#btn-guardar").click(function() {
				$(".div-guardar").hide(2000);
			})

			//FIM BOTAO ENVIAR
        </script>
	<title></title>
	<?php
		require_once 'lutadores/lutadores.php';
		        $nome_o = isset($_POST["nnome"])? $_POST["nnome"]: "NULL";
                $ataque_o = isset($_POST["nataque"])? $_POST["nataque"]: "0000";
                $defesa_o = isset($_POST["ndefesa"])? $_POST["ndefesa"]: "0000";
                $especial_1_o = isset($_POST["poder"])? $_POST["poder"]: 0;
                $especial_2_o = isset($_POST["especial"])? $_POST["especial"]: 0;
                $adversario = isset($_POST["nad"])? $_POST["nad"]: $null;

$m[] = new classMonstros("$nome_o", $ataque_o, $defesa_o, $especial_1_o, $especial_2_o);
         
        $meu = count($m) - 1 ;
        $nome = $m[$meu]->getNome();
        $ataque = $m[$meu]->getAtaque();
        $defesa = $m[$meu]->getDefesa();
        $especial1 = $m[$meu]->getEspecial_1();
        $especial2 = $m[$meu]->getEspecial_2();

        //$ultimo = count($m) - 1;

        $src1l1 = "0.gif";
        $src2l1 = "0.gif";
        $src1l2 = "0.gif";
        $src2l2 = "0.gif";

             for ($i = 1; $i <= $m[$meu]->getEspecial_1(); $i++) {
                 $src1l1 = $i. ".png";
             }
             for ($i = 1; $i <= $m[$meu]->getEspecial_2(); $i++) {
                 $src2l1 = $i. ".png";
             }

             for ($i = 1; $i <= $m[$adversario]->getEspecial_1(); $i++) {
                 $src1l2 = $i. ".png";
             }
             for ($i = 1; $i <= $m[$adversario]->getEspecial_2(); $i++) {
                 $src2l2 = $i. ".png";
             }


             ?>
</head>
<body>

<div class="div-guardar" style="display: block; background: #222; width: 90%; max-width: 320px; margin: auto; border-radius: 6px;">

            <form id="form-guardar" method="POST" action="guardar.php">
                <input style="display: none;" type="text" name="nnome_guardar" value="<?php echo $nome_o; ?>" readonly=""><input style="display: none;" type="number" name="nataque_guardar" value="<?php echo $ataque_o; ?>" readonly=""><input style="display: none;" type="number" name="ndefesa_guardar" value="<?php echo $defesa_o; ?>" readonly=""><input style="display: none;" type="number" name="np1_guardar" value="<?php echo $especial_1_o; ?>" readonly=""><input style="display: none;" type="number" name="np2_guardar" value="<?php echo $especial_2_o; ?>" readonly="">
                
                        <p style=' position: relative; cursor: default; color: white;'>Guardar lutador <?php echo $nome_o ?>? &nbsp; <input id="btn-guardar" class='btn-submit' type='submit' value='Sim'></p>
                  
                
            </form>
            <div id="div-guardar"></div>
        </div>

        <div id="idinf">
            <p></p>
            <div class="tabelas">
                <table class="informacoes-table">
                    <tr><td colspan="2"> <?php echo $m[$meu]->getNome(); ?> </td><td class="td_nvl"><span><b> <?php echo number_format($m[$meu]->getNvl(), 0); ?></b></span></td></tr>
                    <tr><td style="color: red;"><img style="float: left;" src="imagens/ataque.png"><?php echo number_format($m[$meu]->getAtaque(), 0,",","."); ?></td><td style="color: green;"><img style="float: left;" src="imagens/defesa.png"><?php echo number_format($m[$meu]->getDefesa(), 0, ",","."); ?></td></tr>
                    <tr><td><img style="float: left;" src="imagens/dano.png"><?php echo number_format($m[$meu]->getDano(), 0); ?></td><td style="color: pink;"><img style="float: left;" src="imagens/vida.png"><?php echo number_format($m[$meu]->getVida(), 0, ",","."); ?></td></tr>
                    <tr><td><img src="imagens/<?php echo $src1l1;?>"></td><td><img src="imagens/<?php echo $src2l1;?>"></td></tr>
                    <tr><td colspan="2"> FC: <span style="color: silver;"><b><?php echo number_format($m[$meu]->getFc(),0,",","."); ?></b></span></td></tr>
                </table>
                <table class="informacoes-table">
                    <tr><td colspan="2"><?php echo $m[$adversario]->getNome(); ?></td><td class="td_nvl"><span><b><?php echo number_format($m[$adversario]->getNvl(), 0); ?></b></span></td></tr>
                    <tr><td style="color: red;"><img style="float: left;" src="imagens/ataque.png"><?php echo number_format($m[$adversario]->getAtaque(), 0,",","."); ?></td><td style="color: green;"><img style="float: left;" src="imagens/defesa.png"><?php echo number_format($m[$adversario]->getDefesa(), 0, ",","."); ?></td></tr>
                    <tr><td><img style="float: left;" src="imagens/dano.png"><?php echo number_format($m[$adversario]->getDano(), 0); ?></td><td style="color: pink;"><img style="float: left;" src="imagens/vida.png"><?php echo number_format($m[$adversario]->getVida(), 0, ",","."); ?></td></tr>
                    <tr><td><img src="imagens/<?php echo $src1l2?>"></td><td><img src="imagens/<?php echo $src2l2?>"></td></tr>
                    <tr><td colspan="2"> FC: <span style="color: silver;"><b><?php echo number_format($m[$adversario]->getFc(),0,",","."); ?></b></span></td></tr>
                </table> 
            </div>   
        </div>
        <?php
            require_once 'luta.php';
            lutar($m[$meu], $m[$adversario]);
        ?>

      

</body>
</html>