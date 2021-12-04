<html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciador de Tarefas</title>
        <link rel="stylesheet" href="tarefas.css" type="text/css" />
    </head>
    <body>
        <h1>Gerenciador de Tarefas</h1>

        <?php require('formtarefas.php'); ?>

        <?php if ($exibir_tabela) : ?>
            
            <?php require('lista_tarefas.php'); ?>
        <?php endif; ?>
    </body>
</html>

<!-- Verificar todas as aspas simples e duplas-->
