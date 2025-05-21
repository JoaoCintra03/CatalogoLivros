<?php 
require_once __DIR__ . '/Classes/Livro.php';

$livro = new Livro();
$livroData = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $livroData = $livro->buscarPorId($id);
}

if (!$livroData) {
    echo "Livro não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>
</head>
<body>
    <h1>Editar Livro</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($livroData['id']) ?>">
        <label for="titulo">Título: </label>
        <input type="text" name="titulo" id="titulo" value="<?= htmlspecialchars($livroData['titulo']) ?>" required>
        <br>
        <label for="autor">Autor: </label>
        <input type="text" name="autor" id="autor" value="<?= htmlspecialchars($livroData['autor']) ?>" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
