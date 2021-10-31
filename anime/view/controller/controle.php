<?php
	include($_SERVER['DOCUMENT_ROOT']."/controller/funcoes.php");
	session_start();
	$sql = new SQL();


	
	$acao = $_POST['acao'];
	
	if($acao == "deletar"){
		$id  = $_POST['id'];
		$sql->deleteLink($id);
	}else if($acao == "acessar"){
		$link = $_POST['link'];
		$id	  = 	$_POST['id'];
		$_SESSION['link'] = $link;
		$_SESSION['id'] = $id;
	}else if($acao == "inserir"){
		$nome = $_POST['nome'];
		$link = $_POST['link'];
		$sql->insertLink($link,$nome,$_SESSION['usuario_id']);
	}else if($acao === "filtrar"){
		$_SESSION['input'] = $_POST['input'];
	}else if($acao == "atualizar"){
		$link = $_POST['link'];
		$id	  = 	$_POST['id'];
		$sql->atualizarLink($link,$id);
	}else if($acao == "insertUser"){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$nome  = $_POST['nome'];
		$sql->insertUser($login,$senha,$nome);
	}else if($acao == "login"){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$resultado = $sql->login($login,$senha);
		
		$_SESSION['usuario_id'] = $resultado['id'];
	}else if($acao == "deslogar"){
		unset($_SESSION['usuario_id']);
	}
		
	
?>