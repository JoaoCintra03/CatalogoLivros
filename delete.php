<?php
require_once 'classes/Delete.php';

$delete = new Delete();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mensagem = $delete->excluirLivro($id); 
    echo $mensagem;
}
?>
