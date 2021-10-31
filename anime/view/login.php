<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" src="../css/style.css">
<script type="application/javascript" src="../js/script.js"></script>
</head>
<style>
.distanciar{
display:block;
margin:4vw 4vw 4vw 35vw;
}	
	.cima{
		margin-top:1vw;
		margin-bottom: 1vw;
	}

.btn-centralizar{
	margin:auto;
	margin-top:2vw;
	display:grid;
}	
.centralizar-form{
	display:flex;
	justify-content: center;
	align-items: center;
	width:100vw;
}

</style>
<body>
	
		<h1 style="text-align:center;">Login</h1>
	<div class="distanciar">
		<label class="cima">Login</label>
		<input type="text" class="form-control cima" style="width:500px;" id="login">
		<label class="cima">Senha</label>
		<input type="password" class="form-control cima" style="width:500px;" id="senha">
	
	</div>
	
		<div class="centralizar-form">
			<button class="btn btn-success btn-centralizar" onclick="logar()">Logar</button>
		</div>
	<div class="centralizar-form">
	<button class="btn btn-success btn-centralizar"  onclick="window.location.href='cadastrar.php'">Página de Cadastro</button>
	</div>
</body>
</html>