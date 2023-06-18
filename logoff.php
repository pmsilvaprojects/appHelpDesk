<?php

	session_start();

	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//remover índices de sessão
	//unset()

	unset($_SESSION['x']); //remove o indice apenas se este existir

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a variável de sessão
	//session_destroy()

	session_destroy(); //sessão destruída 
	//forçar o redirecionamento

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	*/

	session_destroy();
	header('Location: index.php');

?>