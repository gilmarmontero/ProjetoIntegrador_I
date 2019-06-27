<?php
	
class Cliente{
		private $nome;
		private $cpf;
		private $endereco;
		private $telefone;
		private $cidade;
		private $estado;


	public function setNome($dados){
		if (is_string($dados['nome'])) {
			$this -> nome = $dados['nome'];
		}
	}
	public function getNome(){
		return $this -> nome;
	
	}
	public function setCpf($dados){
		if (is_string($dados['cpf'])) {
			$this -> cpf = $dados['cpf'];
		}
	}
	public function getCpf(){
		return $this -> cpf;
	}
	public function setEndereco($endereco){
		if (is_string($endereco['endereco'])) {
			$this -> endereco = $endereco['endereco'];
		}
	}
	public function getEndereco(){
		return $this -> endereco;

	}
	public function setTelefone($telefone){
		if (is_string($telefone['telefone'])) {
			$this -> telefone = $telefone['telefone'];
		}
	}
	public function getTelefone(){
		return $this -> telefone;
	}
	public function setCidade($cidade){
		if (is_string($cidade['cidade'])) {
			$this -> cidade = $cidade['cidade'];
		}
	}
	public function getCidade(){
		return $this -> cidade;
	}
	public function setEstado($estado){
		if (is_string($estado['estado'])) {
			$this -> estado = $estado['estado'];
		}
	}
	public function getEstado(){
		return $this -> estado;

	}




}

	







?>