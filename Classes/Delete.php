<?php
require_once __DIR__ . '/Livro.php';

class Delete {

    private $livro;

    public function __construct() {
        $this->livro = new Livro(); 
    }

    public function excluirLivro($id) {
        $this->livro->excluir($id);
        return "Livro excluído com sucesso!";
    }
}
?>
