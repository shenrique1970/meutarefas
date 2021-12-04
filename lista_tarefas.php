
<!DOCTYPE html>
<html lang="pt-br">
 <body>
    <table> 
        <tr>
            <th>Tarefa</th>
            <th>Descricão</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
            <th>Opções</th>
        </tr>
        <?php 
            foreach ($lista_tarefas as $tarefa) : ?>
                <tr>
                    <td><a href="tarefa_anexos.php? id=<?php echo $tarefa['id']; ?>">
                            <?php echo $tarefa['nome']; ?>
                        </a></td>
                    
                    <td><?php echo $tarefa['descricao'] ?></td>
                    <td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
                    <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
                    <td><?php echo $tarefa['concluida'] ?></td>
                    <td><a href="editar.php?id=<?php echo $tarefa['id']; ?>" >Editar</a></td>
                    <td><a href="remover.php?id=<?php echo $tarefa['id']; ?>">Remover</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</body> 
</html>
<!-- Verificar todas as aspas simples e duplas e espaços-->
