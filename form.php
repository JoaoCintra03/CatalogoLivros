<?php 
require_once 'config.php';

$livro = new Livro();
$dados = ['titulo' => '', 'autor' => '', 'id' => null];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dados = $livro->buscarPorId($id);
}

if (!$dados) {
    echo "Livro não encontrado.";
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $dados['id'] ? 'Editar' : 'Novo' ?> Livro</title>
</head>
<body>
    <h1><?= $dados['id'] ? 'Editar' : 'Cadastrar novo' ?> livro</h1>
    <form action="save.php" method="post">
        <?php if ($dados['id']): ?>
            <input type="hidden" name="id" value="<?= $dados['id'] ?>">
        <?php endif; ?>
        <input type="text" name="titulo" placeholder="Título" value="<?= htmlspecialchars($dados['titulo']) ?>" required>
        <input type="text" name="autor" placeholder="Autor" value="<?= htmlspecialchars($dados['autor']) ?>" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
