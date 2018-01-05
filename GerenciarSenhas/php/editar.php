<?php
	require_once "CRUD.php";
	$crud = new CRUD;

	extract($_POST);

	$campos = array($local, $login, $senha);

	for($i=0; $i < count($campos); $i++){
		if($campos[$i] == '')
			$msg = "Todos os campos devem ser preenchidos!";
	}

	if(isset($msg))
		print $msg;
	else
		$crud->update('senhas', 'Local=?, Login=?, Senha=? Where idSenha=?', array($local, $login, $senha, $id));

?>