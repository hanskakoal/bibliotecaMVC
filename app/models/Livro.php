<?php
require_once '../config/database.php';

class Livro {
    private $connection;
    private $table = 'livros';

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAllLivros() {
        $query = "SELECT livros.id, livros.titulo, livros.ano_publicacao, categorias.nome as categoria, autores.nome as autor
                  FROM " . $this->table . "
                  LEFT JOIN categorias ON livros.categoria_id = categorias.id
                  LEFT JOIN autores ON livros.autor_id = autores.id";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLivroById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addLivro($titulo, $autor_id, $categoria_id, $ano_publicacao) {
        $query = "INSERT INTO " . $this->table . " (titulo, autor_id, categoria_id, ano_publicacao) VALUES (:titulo, :autor_id, :categoria_id, :ano_publicacao)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor_id', $autor_id);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':ano_publicacao', $ano_publicacao);
        return $stmt->execute();
    }


    public function updateLivro($id, $titulo, $autor_id, $categoria_id, $ano_publicacao) {
        $query = "UPDATE " . $this->table . " SET titulo = :titulo, autor_id = :autor_id, categoria_id = :categoria_id, ano_publicacao = :ano_publicacao WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor_id', $autor_id);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':ano_publicacao', $ano_publicacao);
        return $stmt->execute();
    }

    public function deleteLivro($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
