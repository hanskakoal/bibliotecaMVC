<?php

class Categoria {
  private $table = 'categorias';
  private $connection;

  public function __construct() {
    $database = new Database();
    $this->connection = $database->connect();
  }

  public function getAllCategorias() {
    $query = "SELECT * FROM " . $this->table;
    $stmt = $this->connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
