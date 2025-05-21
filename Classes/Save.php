<?php
require_once __DIR__ . '/Livro.php';

class Save {
    private $livro;

    public function __construct() {
        $this->livro = new Livro();
    }

    public function salvarLivro($titulo, $autor) {
        $resultado = $this->livro->salvar($titulo, $autor);

        if ($resultado) {
            return "Livro salvo com sucesso!";
        } else {
            return "Erro ao salvar o livro.";
        }
    }
}
?>
