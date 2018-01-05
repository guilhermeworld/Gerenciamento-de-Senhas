<?php
	require_once "CRUD.php";
	$crud = new CRUD;
	
	extract($_POST);

	$crud->delete('senhas', ' WHERE idSenha=? ', array($aux));
	
?>