<?php
	session_start();
	require	"banco.php";
	require	"ajudante.php";

	$exibir_tabela = true;
	$tem_erros = false;
	$erros_validacao = array();

if (tem_post()) {
	$tarefa = array();
	//tarefa nome
  if (isset($_POST['nome']) && strlen($_POST['nome']) > 0)
	{ $tarefa['nome'] = $_POST['nome'];}
	else
	{ $tem_erros = true;
	$erros_validacao['nome'] = 'O nome da tarefa é obrigatório!';
	}

		//Descrição
		if(isset($_POST['descricao'])){
			$tarefa['descricao'] = $_POST['descricao'];
		}else{
		$tarefa['descricao'] = '';
		}
		//Prazo
		if (isset($_POST['prazo']) && strlen($_POST['prazo']) > 0)
		{ if (validar_data($_POST['prazo']))
			{$tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']); }
		else
			{$tem_erros = true;
			$erros_validacao['prazo'] = 'O prazo não é uma data válida!';
			}
		}

		//Prioridade
		$tarefa['prioridade'] = $_POST['prioridade'];
		//Concluida
		if(isset($_POST['concluida'])){
			$tarefas['concluida'] = 'Sim';
			}else{
				$tarefas['concluida'] = 'Não';
			}
		If (! $tem_erros)
		{ gravar_tarefa($conexao, $tarefa);
		header('Location:tarefa.php');
		die();
		 }
	}
	$lista_tarefas = buscar_tarefas($conexao);
	
	$tarefa	= array(
	'id'         =>	0,
    'nome'       => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'descricao'  => (isset($_POST['descricao'])) ? $_POST['descricao'] : '',
    'prazo'      => (isset($_POST['prazo'])) ? traduz_data_para_banco($_POST['prazo']) : '',
    'prioridade' => (isset($_POST['prioridade'])) ? $_POST['prioridade'] : 1,
    'concluida'  => (isset($_POST['concluida'])) ? $_POST['concluida'] : ''
	);
	include	"template.php";

?>
