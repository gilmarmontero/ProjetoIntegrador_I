<?php


	class Fornecedor{

		private $nome;


		public function setNome($dados){
		if (is_string($dados['nome'])) {
			$this -> nome = $dados['nome'];
		}
	}
		public function getNome(){
		return $this -> nome;

	}

	


}