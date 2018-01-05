<!DOCTYPE html>
<?php
	include "php/CRUD.php";
	include "js/funcoes.js";
?>
<html lang="PT-br>
<head>
	<meta charset="UTF=8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Agenda de Senhas</title>
	<link rel="icon" href="images/icon.png">
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/custom.css" />
</head>

<body>
	<div class="flow-text container">
		<main>	
				<p id="topo" class="center-align card-panel teal lighten-1"><b>Agenda de Senhas</b></p>
				<div class="hidden" id="cadastro">
					<form class="row" >
						<div class="input-field col s3  inline offset-s1">
							<input placeholder="Ex: Loja, Banco, Redes Sociais..." id="local" type="text" data-length="15" maxlength="15">
						    <label for="local">Local</label>
						</div>

						<div class="input-field col s3 inline">
						    <input  id="login" type="text" data-length="15" maxlength="15">
						    <label for="login">Login</label>
						</div>

						<div class="input-field col s3 inline">    	
							<input  id="senha" type="text" data-length="15" maxlength="15">
							<label for="senha">Senha</label>
						</div>	
						<br>
						<br>
						<br>
						<div class="col s12">
							<a class="waves-effect waves-light green accent-4 btn inpuButton" onclick="cadastrar()"> Confirmar Cadastro</a>
						</div>
									    					    
					</form>						
				</div>

				<div class="hidden" id="attSenha">
					<form class="row">

						<div class="input-field inline hidden">
							<input class="hidden" disabled type="text" id="ID">
						</div>
						
						<br>

						<div class="input-field col s3  inline offset-s1">
							<input placeholder="" id="nLocal" type="text" data-length="15" maxlength="15">
						    <label for="nLocal">Local</label>
						</div>

						<div class="input-field col s3 inline">
						    <input placeholder="" id="nLogin" type="text" data-length="15" maxlength="15">
						    <label for="nLogin">Login</label>
						</div>

						<div class="input-field col s3 inline">    	
							<input placeholder="" id="nSenha" type="text" data-length="15" maxlength="15">
							<label for="nSenha">Senha</label>
						</div>	
						<br>
						<br>
						<br>
						<div class="col s12">
							<a class="waves-effect waves-light blue accent-3 btn inpuButton" onclick="editar()"> Atualizar </a>
						</div>
									    					    
					</form>						
				</div>

				<table id="tabela" class=" highlight centered responsive-table bordered">
        			<thead>
	          			<tr class="card-panel teal lighten-2">
			            <th>Local</th>
			            <th>Login</th>
			            <th>Senha</th>
			            <th>Data do cadastro</th>
			            <th> <a class="waves-effect waves-light green accent-4 btn tooltipped" data-position="top" data-delay="50" data-tooltip="Adicione uma nova senha" onclick="mostrar_Ocultar('cadastro')">Add</a>
			             	 <a class="waves-effect waves-light red accent-4 btn" onclick="limpar()">Limpar</a>
			         	</th>
			          	</tr>

		       		</thead>
		       			<?php require_once "php/mostrarTabela.php" ?>  
		      	</table>
		      	
		</main>

	</div>
	
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

</body>
</html>


