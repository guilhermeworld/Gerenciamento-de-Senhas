<?php
	require_once "CRUD.php";

	$crud = new CRUD;
	$sel = $crud->select('idSenha ,Local, Login, Senha, Data', 'senhas', 'ORDER BY Data DESC', array());
	foreach ($sel as $reg) {
		$idSenha = $reg['idSenha'];
		$Local = $reg['Local'];
		$Login = $reg['Login'];
		$Senha = $reg['Senha'];
		$Data = $reg['Data'];

		echo "<tr>
	            <td>$Local</td>
	            <td>$Login</td>
	            <td>$Senha</td>
	            <td>$Data</td>
	            <td>
	            <a class=\"waves-effect waves-light blue accent-3 btn col s4\" onclick=\"incluirCampos('$Local', '$Login', '$Senha', $idSenha, '$Data'); mostrar('attSenha')\" href=\"#topo\">Editar</a>
	            <a class=\"waves-effect waves-light red accent-3 btn col s4\" onclick=\"remover($idSenha)\">Remover</a>
	            </td>
      		</tr>";

	}
?>