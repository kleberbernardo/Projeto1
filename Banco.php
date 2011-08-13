<?php

class Banco {

	private $db;

	public function __construct() {
		$this->db = new PDO("mysql:host=localhost;dbname=tasklist", 'root','123456');
	}

	public function inserir ($tabela, $dados) {

		foreach($dados as $coluna => $valor){
			$colunas[] = "`$coluna`";
			$valores[] = $valor;
			$holders[] = "?";
		}

		$colunas = implode(', ', $colunas);
		$holders = implode(', ', $holders);

		$query = "INSERT INTO $tabela ($colunas) VALUES ($holders)";
		$statement = $this->db->prepare($query);
		$statement->execute($valores);
	}
	
	public function listar($tabela) {
		$query = "SELECT * FROM $tabela";
		$statement = $this->db->prepare($query);
		$statement->execute();
		return $statement->fetchAll();
	}
	
	public function remover($tabela, $id) {
		$query = "DELETE FROM $tabela WHERE id = ?";
		$statement = $this->db->prepare($query);
		$statement->execute(array($id));
	}

}
