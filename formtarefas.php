
<html lang="pt-br">
    
    <form method="POST">
        <input	type="hidden" name="id"  value="<?php echo  $tarefa['id']; ?>"/>
          <fieldset>
             <legend>Nova tarefa</legend>
             <label>
                    Tarefa:
                    <?php
                    if ($tem_erros && array_key_exists('nome', $erros_validacao)): ?>					
                        <span class="erro">
                            <?php echo $erros_validacao['nome']; ?>	
                        </span>
                    <?php endif; ?>
                    <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>" />
                    </label>

                    <label>Descrição(Opcional):<textarea name="descricao"> <?php echo	$tarefa['descricao']; ?> </textarea></label>
                    <label> 
                    Prazo (Opcional): 
                    <?php if ($tem_erros && isset($erros_validacao['prazo'])): ?> 
                    <span class="erro"><?php echo $erros_validacao['prazo']; ?></span> 
                    <?php endif; ?> 
                    <input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>" /> 
                    </label>

                  <fieldset>
                   <legend>Prioridade:</legend>
                    <label>
                        <input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?> /> Baixa
                        <input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?> /> Média
			            <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?> /> Alta
                    </label>
                 </fieldset> 
            <label> Tarefa  concluida:<input type="checkbox" name="concluida" value="Sim" <?php echo ($tarefa['concluida'] == "Sim") ? 'checked' : ''; ?> /></label>
           <input type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" />
        </fieldset>
    </form>
</html>

<!-- Verificar todas as aspas simples e duplas e espaços-->