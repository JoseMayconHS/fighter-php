<?php

class classMonstros {
		private $nome;
		private $tot;
		private $nvl;
		private $fc;
		private $ataque;
		private $defesa;
		private $dano;
		private $vida;
		private $especial_1;
		private $especial_2;
		
		public function __construct($no, $at, $de, $esp1, $esp2) {
				$this->nome = $no;
				$this->nvl = 1;
				$this->vida = 1000;
				$this->ataque = $at;
				$this->defesa = $de;
				$this->dano = 100;
				$this->especial_1 = $esp1;
				$this->especial_2 = $esp2;

				$tot = $at + $de;

				for ($fc = 0; $fc <= $tot; $fc += 58) {
						if ($this->getNvl() < 70) {
								$this->setNvl($this->getNvl() + 0.2);
								$this->setVida($this->getVida() + 200);
								$this->setDano($this->getDano() + 2);
								$this->setAtaque($this->getAtaque() + 20);
								$this->setDefesa($this->getDefesa() + 20);
								$this->setFc($this->getFc() + 200);
						}
		}

				for ($c = 0; $c <= $tot; $c += 100) {
						
						if ($this->getEspecial_1() == 1 || $this->getEspecial_2() == 1) {
								$this->setVida($this->getVida() + 20);
								$this->getDefesa($this->getDefesa() + 5);
								$this->setFc($this->getFc() + 10);
						}
						if ($this->getEspecial_1() == 2 || $this->getEspecial_2() == 2) {
								$this->setAtaque($this->getAtaque() + 10);
								$this->setDano($this->getDano() + 0.5);
								$this->setFc($this->getFc() + 15);
						}
						if ($this->getEspecial_1() == 3 || $this->getEspecial_2() == 3) {
								$this->setAtaque($this->getAtaque() + 5);
								$this->setVida($this->getVida() + 20);
								$this->setFc($this->getFc() + 12);
						}
						if ($this->getEspecial_1() == 4 || $this->getEspecial_2() == 4) {
								$this->setAtaque($this->getAtaque() + 5);
								$this->setDano($this->getDano() + 1);
								$this->setFc($this->getFc() + 16);
						}
						if ($this->getEspecial_1() == 5 || $this->getEspecial_2() == 5) {
								$this->setVida($this->getVida() + 40);
								$this->setDefesa($this->getDefesa() + 10);
								$this->setFc($this->getFc() + 20);
						}
						if ($this->getEspecial_1() == 6 || $this->getEspecial_2() == 6) {
								$this->setVida($this->getVida() + 40);
								$this->setAtaque($this->getAtaque() + 10);
								$this->setFc($this->getFc() + 24);
						}
						if ($this->getEspecial_1() == 7 || $this->getEspecial_2() == 7) {
								$this->setVida($this->getVida() + 40);
								$this->setAtaque($this->getAtaque() + 10);
								$this->setDano($this->getDano() + 1);
								$this->setFc($this->getFc() + 27);
						}
						if ($this->getEspecial_1() == 8 || $this->getEspecial_2() == 8) {
								$this->setAtaque($this->getAtaque() + 10);
								$this->setDefesa($this->getDefesa() + 10);
								$this->setDano($this->getDano() + 1);
								$this->setFc($this->getFc() + 28);
						}
				}

				$tot = $this->getAtaque() + $this->getDefesa() + ($this->getVida() / 2) + ($this->getDano() * 2);
				for ($c = 0; $c <= $tot; $c += 13) {
						$this->setFc($this->getFc() + 25);
				} 
			 
		}

		
		public function getNome() {
				return $this->nome;
		}
		
		public function getEspecial_1() {
				return $this->especial_1;
		}
		
		
		public function getEspecial_2() {
				return $this->especial_2;
		}
		

		public function getVida() {
				return $this->vida;
		}

		public function getTot() {
				return $this->tot;
		}

		public function getNvl() {
				return $this->nvl;
		}

		public function getFc() {
				return $this->fc;
		}

		public function setNome($nome) {
				$this->nome = $nome;
		}

		
		public function setEspecial_1($especial) {
				$this->especial_1 = $especial;
		}
		
		
		public function setEspecial_2($especial) {
				$this->especial_2 = $especial;
		}
		

		public function setVida($vida) {
				$this->vida = $vida;
		}

		public function setTot($t) {
				$this->tot = $t;
		}

		public function setNvl($n) {
				$this->nvl = $n;
		}

		public function setFc($f) {
				$this->fc = $f;
		}

		public function getAtaque() {
				return $this->ataque;
		}

		public function getDefesa() {
				return $this->defesa;
		}

		public function getDano() {
				return $this->dano;
		}

		public function setAtaque($ataque) {
				$this->ataque = $ataque;
		}

		public function setDefesa($defesa) {
				$this->defesa = $defesa;
		}

		public function setDano($dano) {
				$this->dano = $dano;
		}


}
