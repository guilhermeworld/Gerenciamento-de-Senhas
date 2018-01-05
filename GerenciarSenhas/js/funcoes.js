<script>

function mostrar(id){

	document.getElementById(id).style.display = "block";
}

function ocultar(id){

	document.getElementById(id).style.display = "none";
}

function mostrar_Ocultar(id){

	if((document.getElementById(id).style.display == "block"))
		ocultar(id);
	else
		document.getElementById(id).style.display = "block";
}

function attTabela () {

	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","/GerenciarSenhas/php/atualizarTabela.php", false);
	xmlhttp.send(null);
	document.getElementById("tabela").innerHTML=xmlhttp.responseText;

}

function resetarCampos(i){

	if(i==1){

		$('#local').val("");
		$('#login').val("");
		$('#senha').val("");
	}
	else if (i==2){

		$('#nLocal').val("");
		$('#nLogin').val("");
		$('#nSenha').val("");	
	}
}

function incluirCampos(local, login, senha, id, data){

	$('#ID').val(id);
	$('#data').val(data);
	$('#nLocal').val(local);
	$('#nLogin').val(login);
	$('#nSenha').val(senha);
}

function cadastrar(){

	$.post('/GerenciarSenhas/php/cadastro.php', {

		local:$('#local').val(),
		login:$('#login').val(),
		senha:$('#senha').val()

	}, function(res){

		if(res){
			alert(res);
		}
		else{
			alert("Cadastro realizado com sucesso!");
			resetarCampos(1);
		}
		attTabela();

	});
}

function limpar(){

	var x = confirm("Todas as senhas serão apagadas! Deseja continuar?");

	if(x==true){
		$.post('/GerenciarSenhas/php/limpar.php', {

		}, function(res){

			if(res){

			}
			else{
				alert("Agenda de senhas limpada com sucesso!");
				resetarCampos(2);
			}
			attTabela();

		});
	}

}

function remover($id){

	var x = confirm("Esta senha será apagada! Deseja continuar?");

	if(x==true){

		$.post('/GerenciarSenhas/php/remover.php', {
			aux:$id
		}, function(res){

			if(res){

			}
			else{
				alert("Senha removida com sucesso!");
			}
			attTabela();
		});
	}

}


function editar(){

	$.post('/GerenciarSenhas/php/editar.php', {

		id:$('#ID').val(),
		local:$('#nLocal').val(),
		login:$('#nLogin').val(),
		senha:$('#nSenha').val()

	}, function(res){

		if(res){
			alert(res);

		}
		else{
			alert("Atualização realizada com sucesso!");
			ocultar("attSenha");

		}
		attTabela();
	});
}

</script>