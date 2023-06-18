<?php
	
	session_start();

	//estamos a montar o texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	//abertura do arquivo	
	$arquivo = fopen('../../app_help_desk/arquivo.hd','a');

	//escrita do texto
	fwrite($arquivo, $texto);

	//fecho do archivo
	fclose($arquivo);

	//echo $texto;
	header('Location: abrir_chamado.php');

?>