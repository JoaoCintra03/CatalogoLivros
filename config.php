<?php
spl_autoload_register(function ($class) {
    $arquivo = __DIR__ . "/classes/$class.php";
    if (file_exists($arquivo)) {
        require_once $arquivo;
    } else {
        echo "Classe não encontrada: $class<br>";
    }
});
