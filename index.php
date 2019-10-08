<!DOCTYPE html>
<html style="width: 100%">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="script/jquery-form.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo-index.css">
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Merienda" rel="stylesheet">
        <script type="text/javascript">
             function testandoValidade() {
                valor1 = document.getElementById("idlutador1"). value;
                valor2 = document.getElementById("idlutador2"). value;

                if (valor1 != valor2) {
                    document.getElementById("validacao"). value = 1;
                } else {
                    document.getElementById("validacao"). value = 0;
                }
             }

             function confirmacao() {
                valor1 = document.getElementById("idlutador1"). value;
                valor2 = document.getElementById("idlutador2"). value;

                if (valor1 == valor2) {
                    alert('Lutadores iguais');
                }
             }

             function formularioEnviado() {
                nome = document.getElementById("nome"). value;
                alert(`Obrigado pelo Feedback ${nome}`);
             }


        </script>
    </head>
    <body style="padding: 0px; margin: 0px;">
        <?php 
            require 'lutadores/lutadores.php';
        ?>
        <div class="menu">
            <span class="abrir-menu"><i class="fas fa-plus"></i></span>
        </div>
        <header class="cabecalho">
            <div class="navegacao">
                <div class="logo">
                <img class="img_mobile" src="imagens/logo_monstro_mobile.png">
                </div>
                <nav class="nav">

                    <ul class="ul-nav">
                        <li class="li-nav">
                            <a href="#lutar"><span class="efeito-exibido1 exibido"><pre><i class="fas fa-home"></i></pre>COMBATER</span></a>
                        </li>
                        <li class="li-nav">
                            <a href="#criar"><span class="efeito-exibido2"><pre><i class="fas fa-plus"></i></pre>CRIAR</span></a>
                        </li>
                        <li class="li-nav">                    
                            <a href="#v-lutadores"><span class="efeito-exibido3"><pre><i class="fas fa-users"></i></pre>LUTADORES</span></a>
                        </li>
                        <li class="li-nav">
                        	<a href="#formulario"><span class="efeito-exibido4"><pre><i class="fab fa-wpforms"></i></pre>RELATAR</span></a>
                        </li>
                        <li class="li-nav">
                            <span class="span-apagar"><pre><i class="fas fa-user-times"></i></pre>APAGAR</span>
                        </li>
                    </ul>
                    
                    <div class="menu-distracao-desligado">
                        <i class="fas fa-circle-notch"></i>
                    </div>
                    <div class="apagar-hidden">

    <p>Selecione um lutador para apagar!!</p>
    <form id="form-apagar" method="POST" action="apagar.php">
        <input id="senha" type="password" required="" name="senha" placeholder="SENHA"><label class="senha" for="senha">Senha</label><br>
        <select name="apagando">
            <option value="0">Nenhum</option>
            <?php
                $total = count($m);
                $l = 0;
                for ($i = 1; $i <= $total; $i++) {
                    echo "<option value='$i'>". $m[$l]->getNome(). "</option>";
                    $l++;
                }
            ?>
        </select>
        <button class="btn-submit" type="submit">APAGAR</button>
    </form>
        			</div>  
                </nav>
                <button class="btn-more"><i class="far fa-eye-slash eye-closed eye-visivel"></i><i class="far fa-eye eye-open"></i></button>
            </div>

        </header>

        <div class="container">
            
        <div id="lutar" class="lutar">
            <H1>COMBATE</H1>
            <h2>Selecione dois monstros<br> para o combate</h2>
            <div class="box-combinar">
            	 <img class="monstro" style="float: left; bottom: 0px;" src="imagens/parallax-batalha-left.png">
            	 <img class="monstro" style="float: right; bottom: 0px; border-bottom-right-radius: 6px;" src="imagens/parallax-batalha-right.png">

            	 <!--PROCESSO DO COMBATE-->

					 <?php
                $m[] = new classMonstros('NULL', 0000, 0000, 0, 0);
                $null = count($m) - 1;
               
                //TODOS OS LUTADORES VÁLIDOS
                $todos = count($m) - 2;
            ?>
                <form id="form-combate" method="POST" action="processo-combate.php">
                    <p><label for="idlutador1">LUTADOR 1:</label>
                        <select onchange="testandoValidade()" id="idlutador1" name="nlutador1">
                        <?php
                            for ($i = 0; $i <= $todos; $i++) {
                                echo "<option value='$i'>". $m[$i]->getNome()."_". number_format($m[$i]->getNvl(), 0). "</option>";
                            }
                        ?>
                        </select><!--<div class="validade"><img src="imagens/valido.png"></div>-->
                    </p>
                        <p><label for="idlutador2">LUTADOR 2:</label>
                        <select onchange="testandoValidade()" id="idlutador2" name="nlutador2">
                        <?php 
                            for ($i = 0; $i <= $todos; $i++) {
                                echo "<option value='$i'>". $m[$i]->getNome()."_". number_format($m[$i]->getNvl(), 0). "</option>";
                            }
                        ?>
                        </select>
                        </p>
                        <input style="display: none;" id="validacao" type="number" min="1" required>
                    <button class="btn-submit btn-luta" type="submit">COMBATER</button>
                </form>
                
            </div>
            <div id="div-combate"></div>   
        </div>

        <div id="criar" class="criar">
            <h1>CRIAR</h1>
            <h2>Crie um monstro e selecione o adversário</h2>

            
            <form id="form-criar" method="POST" action="processo-criar.php">
      <table class="table-criacao">
        <tr class="tr_efeito"><td class="td_efeito" colspan="2"><input type="text" name="nnome"  maxlength="10" required><label>NOME</label></td></tr>
        <tr class="tr_efeito_atr">
          <td class="td_efeito_atr_ata"><input class="iatr" type="number" min="1" max="10000" name="nataque" id="idataque" required><label><img src="imagens/ataque.png"></label></td>
          <td class="td_efeito_atr_def"><input class="iatr" type="number" min="1" max="10000" name="ndefesa" id="iddefesa" required><label><img src="imagens/defesa.png"></label></td>
        </tr>
        <tr>
          <td>
            <div class="box">
              <div class="box-poder">
                <label for="agua" onclick="desc_poder('Agua')"><img src="imagens/1.png"></label><br><input type="radio" name="poder" id="agua" value="1" checked="">
              </div>
              <div class="box-poder">
                <label for="fogo" onclick="desc_poder('Fogo')"><img src="imagens/2.png"></label><br><input type="radio" name="poder" id="fogo" value="2">
              </div>
              <div class="box-poder">
                <label for="gelo" onclick="desc_poder('Gelo')"><img src="imagens/3.png"></label><br><input type="radio" name="poder" id="gelo" value="3">
              </div>
              <div class="box-poder">
                <label for="veneno" onclick="desc_poder('Veneno')"><img src="imagens/4.png"></label><br><input type="radio" name="poder" id="veneno" value="4">
              </div>
            </div>
          </td>
          <td>
            <div class="box">
              <div class="box-poder">
                <label for="celestial" onclick="desc_especial('Celestial')"><img src="imagens/5.png"></label><br><input type="radio" name="especial" id="celestial" value="5" checked="">
              </div>
              <div class="box-poder">
                <label for="puro" onclick="desc_especial('Puro')"><img src="imagens/6.png"></label><br><input type="radio" name="especial" id="puro" value="6">
              </div>
              <div class="box-poder">
                <label for="lendario" onclick="desc_especial('Lendário')"><img src="imagens/7.png"></label><br><input type="radio" name="especial" id="lendario" value="7">
              </div>
              <div class="box-poder">
                <label for="bruxaria" onclick="desc_especial('Bruxaria')"><img src="imagens/8.png"></label><br><input type="radio" name="especial" id="bruxaria" value="8">
              </div>
            </div>
          </td>
        </tr>
        <tr class="mouse_none"><td><span>Poder </span><input class="desc_magia" type="text" id="descricao_poder" value="Agua" readonly=""></td><td><span>Especial </span><input class="desc_magia" type="text" id="descricao_especial" value="Celestial" readonly=""></td></tr>
      </table>
      <p><select name="nad">
        <?php
          for ($i = 0; $i <= $todos; $i++) {
              echo "<option value='$i'>". $m[$i]->getNome()."_". number_format($m[$i]->getNvl(), 0). "</option>";
          }  
        ?>
      </select></p>
      <p><input class="btn-submit btn-luta" type="submit" value="LUTAR"></p>
    </form>
    <script type="text/javascript">
        function desc_poder(texto) {
          document.getElementById('descricao_poder'). value = texto; 
        }
        function desc_especial(texto) {
          document.getElementById('descricao_especial'). value = texto;
        }
      </script>
        <div id="div-criar"></div>
        </div>
    </div>
    <div id="v-lutadores">
    <div class="lutadores">
    	<h1>LUTADORES</h1>
    	<h2><?php echo (++$todos); ?> lutadores no total</h2>
        <img class="direcao" src="imagens/rolagem-to-left.gif">
        <iframe class="iframe-lutadores" src="informacoes.php"></iframe>
        <img class="direcao" src="imagens/rolagem-to-right.gif">
    </div>
</div>
    <div class="container">
    	<div id="formulario" class="formulario">
	    	<h1>FORMULÁRIO</h1>	
	    	<h2>Relate algum problema</h2>
	    	<form id="form-formulario" class="contato" method="POST" action="banco/enviar-relatorio.php">
	    		<p>
	    			<div class="campo-nome"><input id="nome" type="text" name="nome" maxlength="20" placeholder="Nome" required><label>Nome</label></div>
	    		</p>
	    		<p>	
	    			<div class="campo-email"><input type="email" name="email" placeholder="Email" required><label>Email</label></div>
	    		</p>
	    		<p><div class="campo-problema"><textarea class="problema" name="problema" placeholder="Digite a mensagem aqui!" cols="20" rows="5"></textarea></p></div>
	    		<button onclick="formularioEnviado()" class="btn-submit" type="submit">ENVIAR</button>
	    	</form>
	    
    	</div>
    </div>

         <script type="text/javascript" src="script/index.js"></script>
         <footer>
            	<p class="nome">&copy;</span>José Maycon</p>
            	<p class="descricao">Projeto feito sem fins lucrativos.	Feito em PHP! Desenvolvido por Maycon Silva</p>
             <p class="redes"><a href="https://www.facebook.com/profile.php?id=100008160376957" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a></p>
         </footer>
         <script src="script/Doom.js"></script>
    </body>
</html>
