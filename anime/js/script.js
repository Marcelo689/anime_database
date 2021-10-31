// JavaScript Document

function deletarLink(id){
	var confirmar = confirm("Deseja realmente deletar?");
	if(confirmar){
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{id:id,acao:"deletar"},
		success:function(data){
			console.log(data);
			window.location.href="Lista.php";
		}
	});
	}
}

function acessar(link,id){
	
	
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{link:link,id:id,acao:"acessar"},
		success:function(data){
			console.log(data);
		}
	});
}
function deslogar(){
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{acao:"deslogar"},
		success:function(data){
			console.log(data);
			window.location.href="login.php";
		}
	});
}
function inserir(){
	
	var nome = $("#nome").val();
	var link = $("#link").val();
	$("#nome").val("");
	$("#link").val("");
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{link:link,nome:nome,acao:"inserir"},
		success:function(data){
			console.log(data);
		}
	});
}
function cadastrar(){
	
	var nome = $("#nome").val();
	var login = $("#login").val();
	var senha = $("#senha").val();
	
	$("#nome").val("");
	$("#login").val("");
	$("#senha").val("");
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{login:login,senha:senha,nome:nome,acao:"insertUser"},
		success:function(data){
			console.log(data);
		}
	});
}
function logar(){
	
	var login = $("#login").val();
	var senha = $("#senha").val();
	
	$("#login").val("");
	$("#senha").val("");
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{login:login,senha:senha,acao:"login"},
		success:function(data){
			console.log(data);
			window.location.href="index.php";
		}
	});
}
function filtrar(){
	
	var input = $("#input").val();
	
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{input:input,acao:"filtrar"},
		success:function(data){
			console.log(data);
			$("#lista").empty();
			$("#lista").load("listaFiltrada.php");
		}
	});
}

function atualizarLink(link,id){
	
	$.ajax({
		type:"post",
		url:"controller/controle.php",
		data:{link:link,id:id,acao:"atualizar"},
		success:function(data){
			console.log(data);
			window.location.href="Lista.php";
		}
	});
}