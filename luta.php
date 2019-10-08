<?php

    function lutar($lutador1, $lutador2) {
        //require_once 'classMonstros.php';

        if ($lutador1->getNome() == "NULL") {
            echo "<div class='div_luta'><p style='text-align: center; color: black;'>AGUARDANDO...</p></div>";
        } elseif ($lutador1->getNome() === $lutador2->getNome()) {
            echo "<div class='div_luta'><p style='text-align: center; color: black;'>LUTADORES IGUAIS</p></div>";
        } else {  
        //$rounds = $r;
        while ($lutador1->getVida() > 0 && $lutador2->getVida() > 0){
            $n = rand(1, 8);
            switch ($n) {
                case 1: case 5: case 7: 
                    //214.3x70=14      0.1x102= 1,07
                        $multiplicacao = 1.1;
                        for ($m = 0; $m < $lutador1->getAtaque(); $m++) {
                            $multiplicacao += 0.005;
                        }
                        $divisao = 1.1;
                        for ($i = 0; $i < $lutador2->getDefesa(); $i++) {
                            $divisao += 0.005;
                        };
                        $d = ($lutador1->getDano() * $multiplicacao) / $divisao;
                        $lutador2->setVida($lutador2->getVida() - $d);
                        echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> <span style='color: green;'>atacou</span>(<u>". number_format($lutador1->getDano(), 0, ',','.')."*". number_format($multiplicacao, 1, ',', '.'). "/". number_format($divisao, 1, ',', '.')."</u>)!!! tirou: -". number_format($d,0,',','.'). " de dano!&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(),0,',','.'). " ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";

                      break; 
                case 2:
                        $e = rand(1, 4);
                        if ($e == 1 || $e == 2 || $e == 3) {
                            //AGUA
                            if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {   
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $lutador2->setVida($lutador2->getVida() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Água(<span style='color: orange;'>PÉSSIMO!</span>) na Água -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $d = $lutador1->getDano() * 3;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Água(<span style='color: red;'>CRÍTICO!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Água(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($lutador1->getDano(),0,',','.')."&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() / 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Água(<span style='color: green;'>RUIM!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Água(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //FOGO
                            if ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() / 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: green;'>RUIM!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";       
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: orange;'>PÉSSIMO!</span>) no Fogo -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $d = $lutador1->getDano() * 3;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: red;'>CRÍTICO!</span>) no Gelo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($lutador1->getDano(),0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //GELO
                            if ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $d = $lutador1->getDano() * 3;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: red;'>CRÍTICO!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() / 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: green;'>RUIM!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $lutador2->setVida($lutador2->getVida() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: orange;'>PÉSSIMO!</span>) no Gelo -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($lutador1->getDano(),0,',','.')."&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //VENENO
                            if ($lutador1->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $d = $lutador1->getDano() * 3;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: red;'>CRÍTICO!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() / 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: green;'>RUIM!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($lutador1->getDano(),0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $lutador2->setVida($lutador2->getVida() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: orange;'>PÉSSIMO!</span>) no Veneno -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() / 2;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                        } elseif ($e == 4) {
                            //CELESTIAL
                            if ($lutador1->getEspecial_1() == 5 || $lutador1->getEspecial_2() == 5) {   
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Celestial(<span style='color: green;'>NORMAL!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Celestial(<span style='color: green;'>NORMAL!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Celestial(<span style='color: green;'>RUIM!</span>) no Gelo -". number_format($lutador1->getDano(),0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $d = $lutador1->getDano() * 3.5;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3.5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Celestial(<span style='color: red;'>CRÍTICO!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() * 1.5;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Celestial(<span style='color: green;'>RUIM!</span>) na Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //PURO
                            if ($lutador1->getEspecial_1() == 6 || $lutador1->getEspecial_2() == 6) {
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Puro(<span style='color: green;'>RUIM!</span>) em Água -". number_format($lutador1->getDano(),0,',','.')."&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Puro(<span style='color: green;'>NORMAL!</span>) em Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Puro(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($d,0,',','.'). " &nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $d = $lutador1->getDano() * 3.5;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3.5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Puro(<span style='color: red;'>CRÍTICO!</span>) no Veneno -". number_format($d,0,',','.'). " &nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() * 1.5;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Puro(<span style='color: green;'>RUIM!</span>) na Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //LENDÁRIO
                            if ($lutador1->getEspecial_1() == 7 || $lutador1->getEspecial_2() == 7) {
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $d = $lutador1->getDano() * 5;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Lendário(<span style='color: red;'>CRÍTICO!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $d = $lutador1->getDano() * 3;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Lendário(<span style='color: green;'>NORMAL!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $d = $lutador1->getDano() * 3;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Lendário(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $d = $lutador1->getDano() * 3;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Lendário(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Lendário(<span style='color: green;'>RUIM!</span>) na Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //BRUXARIA
                            if ($lutador1->getEspecial_1() == 8 || $lutador1->getEspecial_2() == 8) {
                                if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() / 2);
                                    $lutador1->setVida($lutador1->getVida() + $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) na Água +". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() / 2);
                                    $lutador1->setVida($lutador1->getVida() + $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) no Fogo +". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                    $d = $lutador1->getDano() * 2;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() / 2);
                                    $lutador1->setVida($lutador1->getVida() + $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) no Gelo +". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                    $d = $lutador1->getDano() * 3.5;
                                    $lutador2->setVida($lutador2->getVida() - $lutador1->getDano() * 3.5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador2->getEspecial_1() >= 5 || $lutador2->getEspecial_2() >= 5) {
                                    $d = $lutador1->getDano() * 1.5;
                                    $lutador2->setVida($lutador2->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: blue;'><b>". $lutador1->getNome(). "</b></span> deu um ataque de Bruxaria(<span style='color: green;'>RUIM!</span>) na Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                        }
                    break;

                case 3: case 6: case 8:
                    //214.3x70=14      0.1x102= 1,07
                    $multiplicacao = 1.1;
                        for ($m = 0; $m < $lutador2->getAtaque(); $m++) {
                            $multiplicacao += 0.005;
                        }
                    $divisao = 1.1;
                    for ($i = 0; $i < $lutador1->getDefesa(); $i++) {
                        $divisao += 0.005;
                    };
                    $d = ($lutador2->getDano() * $multiplicacao) / $divisao;
                     $lutador1->setVida($lutador1->getVida() - $d);
                        echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> <span style='color: green;'>atacou<u></span></u>(<u>". number_format($lutador2->getDano(), 0, ',','.')."*". number_format($multiplicacao, 1, ',', '.'). "/". number_format($divisao, 1, ',', '.'). "</u>)!!! tirou -". number_format($d,0,',','.'). " de dano!&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(),0,',','.'). " ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                     
                     break;                     
                case 4:
                    $e = rand(1, 4);
                        if ($e == 1 || $e == 2 || $e == 3) {
                            //AGUA
                            if ($lutador2->getEspecial_1() == 1 || $lutador2->getEspecial_2() == 1) {   
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $lutador1->setVida($lutador1->getVida() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Água(<span style='color: orange;'>PÉSSIMO!</span>) na Água -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $d = $lutador2->getDano() * 3;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Água(<span style='color: red;'>CRÍTICO!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Água(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($lutador2->getDano(),0,',','.')."&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() / 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Água(<span style='color: green;'>RUIM!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                     echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Água(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }

                            }
                            //FOGO
                            if ($lutador2->getEspecial_1() == 2 || $lutador2->getEspecial_2() == 2) {
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() / 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: green;'>RUIM!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";       
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: orange;'>PÉSSIMO!</span>) no Fogo -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $d = $lutador2->getDano() * 3;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: red;'>CRÍTICO!</span>) no Gelo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($lutador2->getDano(),0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                     echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Fogo(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //GELO
                            if ($lutador2->getEspecial_1() == 3 || $lutador2->getEspecial_2() == 3) {
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $d = $lutador2->getDano() * 3;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: red;'>CRÍTICO!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() / 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: green;'>RUIM!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $lutador1->setVida($lutador1->getVida() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: orange;'>PÉSSIMO!</span>) no Gelo -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($lutador2->getDano(),0,',','.')."&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                     echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Gelo(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //VENENO
                            if ($lutador2->getEspecial_1() == 4 || $lutador2->getEspecial_2() == 4) {
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $d = $lutador2->getDano() * 3;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: red;'>CRÍTICO!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() / 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: green;'>RUIM!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($lutador2->getDano(),0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $lutador1->setVida($lutador1->getVida() - 1);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: orange;'>PÉSSIMO!</span>) no Veneno -1&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() / 2;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                     echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque de Veneno(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                        } elseif ($e == 4) {
                            //CELESTIAL
                            if ($lutador2->getEspecial_1() == 5 || $lutador2->getEspecial_2() == 5) {   
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Celestial(<span style='color: green;'>NORMAL!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Celestial(<span style='color: green;'>NORMAL!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Celestial(<span style='color: green;'>RUIM!</span>) no Gelo - ". number_format($lutador2->getDano(),0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $d = $lutador2->getDano() * 3.5;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3.5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Celestial(<span style='color: red;'>CRÍTICO!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() * 1.5;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                     echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Celestial(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //PURO
                            if ($lutador2->getEspecial_1() == 6 || $lutador2->getEspecial_2() == 6) {
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano());
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Puro(<span style='color: green;'>RUIM!</span>) em Água -". number_format($lutador2->getDano(),0,',','.')."&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Puro(<span style='color: green;'>NORMAL!</span>) em Fogo - $d&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 2);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Puro(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($d,0,',','.'). " &nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $d = $lutador2->getDano() * 3.5;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3.5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Puro(<span style='color: red;'>CRÍTICO!</span>) no Veneno -". number_format($d,0,',','.'). " &nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() * 1.5;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                     echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Puro(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //LENDÁRIO
                            if ($lutador2->getEspecial_1() == 7 || $lutador2->getEspecial_2() == 7) {
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $d = $lutador2->getDano() * 5;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Lendário(<span style='color: red;'>CRÍTICO!</span>) na Água -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $d = $lutador2->getDano() * 3;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Lendário(<span style='color: green;'>NORMAL!</span>) no Fogo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $d = $lutador2->getDano() * 3;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Lendário(<span style='color: green;'>NORMAL!</span>) no Gelo -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $d = $lutador2->getDano() * 3;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Lendário(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Lendário(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                            //BRUXARIA
                            if ($lutador2->getEspecial_1() == 8 || $lutador2->getEspecial_2() == 8) {
                                if ($lutador1->getEspecial_1() == 1 || $lutador1->getEspecial_2() == 1) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() / 2);
                                    $lutador2->setVida($lutador2->getVida() + $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) na Água +". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 2 || $lutador1->getEspecial_2() == 2) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() / 2);
                                    $lutador2->setVida($lutador2->getVida() + $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) no Fogo +". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 3 || $lutador1->getEspecial_2() == 3) {
                                    $d = $lutador2->getDano() * 2;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() / 2);
                                    $lutador2->setVida($lutador2->getVida() + $d);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) no Gelo +". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                } elseif ($lutador1->getEspecial_1() == 4 || $lutador1->getEspecial_2() == 4) {
                                    $d = $lutador2->getDano() * 3.5;
                                    $lutador1->setVida($lutador1->getVida() - $lutador2->getDano() * 3.5);
                                    echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>NORMAL!</span>) no Veneno -". number_format($d,0,',','.'). "&nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                                 elseif ($lutador1->getEspecial_1() >= 5 || $lutador1->getEspecial_2() >= 5) {
                                    $d = $lutador2->getDano() * 1.5;
                                    $lutador1->setVida($lutador1->getVida() - $d);
                                     echo "<div class='div_luta'><p><span class='csluta'><span style='color: red;'><b>". $lutador2->getNome(). "</b></span> deu um ataque Bruxaria(<span style='color: green;'>RUIM!</span>) em Mágia -". number_format($d,0,',','.'). " &nbsp; &nbsp;<sup><span style='color: blue;'>". $lutador1->getNome(). "</span> <img src='imagens/vida.png'> ". number_format($lutador1->getVida(), 0,',','.')." ||| <span style='color: red;'>". $lutador2->getNome()."</span> <img src='imagens/vida.png'> ". number_format($lutador2->getVida(),0,',','.'). "</sub></span></p></div>";
                                }
                            }
                        } break;
              
                    }
                }
        if ($lutador1->getVida() > $lutador2->getVida()) {
            echo "<script type='text/javascript'>
                    alert('Lutador ". $lutador1->getNome(). " venceu!!!');
            </script>";
        } else {
            echo "<script type='text/javascript'>
                    alert('Lutador ". $lutador2->getNome(). " venceu!!!');
            </script>";
        }
    } 
}



                
