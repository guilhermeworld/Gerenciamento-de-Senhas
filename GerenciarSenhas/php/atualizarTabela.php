<?php
	require_once "CRUD.php";

	echo "<table  class=\" highlight centered responsive-table bordered\">
		<thead>
  			<tr class=\"card-panel teal lighten-2\">
            <th>Local</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Data do cadastro</th>
            <th> <a class=\"waves-effect waves-light green accent-4 btn tooltipped\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"Adicione uma nova senha\" onclick=\"mostrar_Ocultar('cadastro')\">Add</a>
             	 <a class=\"waves-effect waves-light red accent-4 btn tooltipped\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"Remova todas as senhas cadastradas\" onclick=\"limpar()\">Limpar</a>
         	</th>
          	</tr>
   		</thead>";

   			require_once "mostrarTabela.php";
    		  
  	echo "</table>

  	<script type=\"text/javascript\" src=\"../js/materialize.js\"></script>

  	";



?>