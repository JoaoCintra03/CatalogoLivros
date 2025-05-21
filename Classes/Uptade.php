<?php
require_once __DIR__ . '/Livro.php';

class Update {
    private $livro;

    public function __construct() {
        $this->livro = new Livro();
    }

    public function atualizarLivro($id, $titulo, $autor) {
        return $this->livro->atualizar($id, $titulo, $autor);
    }
}
?>
