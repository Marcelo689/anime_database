<?php
	include("../controller/sessao.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
<script type="text/javascript" src="../js/script.js"></script>
</head>

<body>
	<div style="display:block;
				justify-content: center;
				align-items: center;
				margin:auto;
				width:100vw;">
<button style="margin-left:20%;margin-top:50px;margin-bottom: 50px;" class="btn btn-success" onclick="window.location.href='index.php'">Assistir</button>
<button style="margin-left:15%;margin-top:50px;margin-bottom: 50px;" class="btn btn-success" onclick="window.location.href='Lista.php'">Lista de Links</button>
<button style="margin-left:15%;margin-top:50px;margin-bottom: 50px;" class="btn btn-success" onclick="window.location.href='inserir.php'">Inserir Links</button>
	<div style="margin-left:200px;">
		<br><label>Nome</label><br>
		<input class="form-control" style="width:50vw" type="text" name="nome" id='nome'>
		<br><label>Link</label><br>
		<input class="form-control" style="width:50vw" type="text" name="link" id='link'>
		<br>
		<button class="btn btn-success" onclick="inserir()">Inserir</button>
	</div>
	</div>
</body>
</html>