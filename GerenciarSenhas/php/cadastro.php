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
	else{

		$crud->insert('senhas', 
		'Local=?, Login=?, Senha=?, Data=?', 
		array($local, $login, $senha, date("Y-m-d")));
		
		}

?>