<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            span#idnvl {
                text-align right;
                font-size: 15pt;
            }

            table tr td{
                border: 2px solid black;
                background-color: rgba(20, 20, 20,.8);
            }
            table.cstabela {
                position: absolute;
                padding: 0px;
                margin: 0px 1% 5px 1%;
                top: 0px;
                width: 250px;
                float: left;
                cursor: default;
                pointer-events: none;
            }

            .titulo {
                color: black;
                width: 100%;
                position: fixed;
                left: 0px;
            }

        </style>
    </head>
    <body style="text-align: center; color: white; font-family: 'Merienda', cursive;">
        <?php
            require_once 'lutadores/lutadores.php';

            $v = count($m) - 1;
            $width = 0;
            for ($c = 0; $c <= $v; $c++) {
                for ($i = 1; $i <= $m[$c]->getEspecial_1(); $i++) {
                    $src1 = $i;
                }
                for ($i = 1; $i <= $m[$c]->getEspecial_2(); $i++) {
                    $src2 = $i;
                }
                echo "<table class='cstabela'
                style='left: ". $width. "px;'>
                 <tr><td colspan='2'>". $m[$c]->getNome(). "</td><td><span><b>". number_format($m[$c]->getNvl(), 1)."</b></span></td></tr>
                <tr><td><img style='float: left;' src='imagens/ataque.png'><span style='color: red;'>". number_format($m[$c]->getAtaque(), 0, ',', '.'). "</span></td><td><img style='float: left;' src='imagens/defesa.png'><span style='color: green;'>". number_format($m[$c]->getDefesa(), 0, ',', '.'). "</span></td></tr>
                <tr><td><img style='float: left;' src='imagens/dano.png'><span style='color: white;'>". number_format($m[$c]->getDano(), 0,',','.'). "</span></td><td><img style ='float: left;'src='imagens/vida.png'><span style='color: pink;'>". number_format($m[$c]->getVida(), 0, ',', '.'). "</span></td></tr>
                <tr><td>MAGIAS:</td><td><img src='imagens/$src1.png'> &nbsp; <img src='imagens/$src2.png'></td></tr>
                <tr><td colspan='2'> FC: <span style='color: silver;'><b>". number_format($m[$c]->getFc(),0,',','.'). "</b></span></td></tr>
                </table>";
                $width += 270;
            }
         ?>
          
    </body>
</html>
