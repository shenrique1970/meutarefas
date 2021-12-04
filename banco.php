<?php
	$bdServidor	='localhost';
	$bdUsuario='root';
	$bdSenha=''; 
	$bdBanco='db_tarefas';
	$conexao= mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
	if	(mysqli_connect_errno($conexao))
		{echo	"Problemas para conectar no banco.Erro:	";
		echo mysqli_connect_error();
		die();
	}
	function buscar_tarefas($conexao)
	{	$sqlBusca = 'SELECT	* FROM tarefas ORDER BY id DESC';
		$resultado = mysqli_query($conexao,	$sqlBusca);
		$tarefas = [];
		while	($tarefa=mysqli_fetch_array($resultado))
		{	$tarefas[] = $tarefa;}
		return	$tarefas;
	}
	Function buscar_anexos($conexao, $tarefa_id)
	{
		$sql = "SELECT * FROM anexos WHERE tarefa_id = {$tarefa_id}";
		$resultado = mysqli_query($conexao, $sql);
		$anexos = [];
		while ($anexo = mysqli_fetch_assoc($resultado))
		{  $anexos[] = $anexo;	}
		return $anexos;
	}
	function buscar_tarefa($conexao, $id)
	{  	
		$sqlBusca ='SELECT * FROM tarefas WHERE id ='.$id;
		$resultado = mysqli_query($conexao, $sqlBusca);
		return mysqli_fetch_assoc($resultado);
	}
	function gravar_tarefa($conexao, $tarefa)
		{	
			$sqlGravar = "INSERT INTO tarefas
						(
							nome,
							descricao,
							prioridade,
							prazo,
							concluida
						)
			VALUES('{$tarefa['nome']}','{$tarefa['descricao']}',
					{$tarefa['prioridade']},'{$tarefa['prazo']}',
					'{$tarefa['concluida']}')";

			mysqli_query($conexao,	$sqlGravar);
		} 	
	function editar_tarefa($conexao, $tarefa) 
		{	
			$sqlEditar="UPDATE tarefas SET
			nome = '{$tarefa['nome']}',
			descricao = '{$tarefa['descricao']}',
			prioridade = '{$tarefa['prioridade']}',
			prazo = '{$tarefa['prazo']}',
			concluida = '{$tarefa['concluida']}' 
			WHERE id = '{$tarefa['id']}'";
			mysqli_query($conexao, $sqlEditar); 
		}
	function remover_tarefa($conexao, $id) 
	{	
		$sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";
		mysqli_query($conexao, $sqlRemover);
	} 



?>	
<!-- Verificar todas as aspas simples e duplas e espaços-->
