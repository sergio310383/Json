<?php
set_include_path(get_include_path() . PATH_SEPARATOR .
        __DIR__ . '/../');
function carregarClasses($nomeClasse) {
    $nomeClasseSO = str_replace("\\", DIRECTORY_SEPARATOR, $nomeClasse);
    include_once $nomeClasseSO . ".php";
}
spl_autoload_register('carregarClasses');
?>
