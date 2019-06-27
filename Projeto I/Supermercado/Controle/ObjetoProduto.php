<?php


class Produto{

		private $nome;
		private $valor;
		private $unidade;
		private $quantidade;
		private $categoria;
		private $fornecedor;

	public function setNome($dados){
		if (is_string($dados['nome'])) {
			$this -> nome = $dados['nome'];
		}
	}
	public function getNome(){
		return $this -> nome;
	
	}
	public function setValor($dados){
		if (is_string($dados['valor'])) {
			$this -> valor = $dados['valor'];
		}
	}
	public function getValor(){
		return $this -> valor;
	}
	
	public function setUnidade($dados){
		if (is_string($dados['unidade'])) {
			$this -> unidade = $dados['unidade'];
		}
	}
	public function getUnidade(){
		return $this -> unidade;
	}
	
	public function setQuantidade($dados){
		if (is_string($dados['quantidade'])) {
			$this -> quantidade = $dados['quantidade'];
		}
	}
	public function getQuantidade(){
		return $this -> quantidade;
	}
	
	public function setCategoria($dados){
		if (is_string($dados['categoria'])) {
			$this -> categoria = $dados['categoria'];
		}
	}
	public function getCategoria(){
		return $this -> categoria;
	}
	
	public function setFornecedor($dados){
		if (is_string($dados['fornecedor'])) {
			$this -> fornecedor = $dados['fornecedor'];
		}
	}
	public function getFornecedor(){
		return $this -> fornecedor;
	}
	

	
}

