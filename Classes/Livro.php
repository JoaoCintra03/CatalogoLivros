<?php
require_once __DIR__ . '/Database.php';

class Livro {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection(); 
    }

   public function salvar($titulo, $autor) {
    $sql = "INSERT INTO livros (titulo, autor) VALUES (:titulo, :autor)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':autor', $autor);
    $stmt->execute();

    return $this->db->lastInsertId(); 
}

    public function adicionar($titulo, $autor) {
        $query = "INSERT INTO livros (titulo, autor) VALUES (:titulo, :autor)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->execute();
    }

    public function atualizar($id, $titulo, $autor) {
        $sql = "UPDATE livros SET titulo = :titulo, autor = :autor WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        
        return $stmt->execute();
    }

    public function excluir($id) {
        $query = "DELETE FROM livros WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function listarTodos() {
        $query = "SELECT * FROM livros";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

public function buscarPorId($id) {
    $sql = "SELECT * FROM livros WHERE id = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $livro = $stmt->fetch(PDO::FETCH_ASSOC);

    return $livro ? $livro : null;
}


}
?>
