<?php
require	"banco.php";
remover_tarefa($conexao, $_GET['id']);
header('Location: tarefa.php');
?>
<!-- Verificar todas as aspas simples e duplas e espaços-->