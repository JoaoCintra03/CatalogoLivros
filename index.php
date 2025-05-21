<?php require_once 'config.php'; ?>

<?php
$livroInstance = new Livro();
$livros = $livroInstance->listarTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>📚 Catálogo de Livros</h1>
        <a class="button" href="form.php">Adicionar Novo Livro</a>
    </header>

    <main>
        <section class="livros-listagem">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($livros as $livro): ?>
                        <tr>
                            <td><?= htmlspecialchars($livro['titulo']) ?></td>
                            <td><?= htmlspecialchars($livro['autor']) ?></td>
                            <td>
                                <a href="form.php?id=<?= $livro['id'] ?>" class="edit">Editar</a>
                                <a href="../CatalogoLivros-main/delete.php?id=<?= $livro['id'] ?>" class="delete" onclick="return confirm('Deseja remover este livro?')">Remover</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
