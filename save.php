<?php

require_once __DIR__ . '/Classes/Save.php';
require_once __DIR__ . '/Classes/Livro.php';

$save = new Save();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    
    $livro = new Livro();
    $livro->atualizar($id, $titulo, $autor);
} else {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    
    $livro = new Livro();
    $livro->salvar($titulo, $autor);
}
header("Location: index.php"); 
exit();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Livro</title>
</head>
<body>
    <h1>Adicionar Novo Livro</h1>
    <form action="save.php" method="post">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
