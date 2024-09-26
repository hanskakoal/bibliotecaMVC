<?php
class Autor {
  private $table = 'autores';
  private $connection;

  public function __construct() {
    $database = new Database();
    $this->connection = $database->connect();
  }

  public function getAllAutores() {
    $query = "SELECT * FROM " . $this->table;
    $stmt = $this->connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
