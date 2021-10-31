<?php
	include("../controller/sessao.php");
?>

<!doctype html>
<html>
	
<?php 
	include("../controller/funcoes.php");

	$sql = new SQL();

	$listaCompleta = $sql->selectAllLink($_SESSION['usuario_id']);
?>
<head>
<meta charset="utf-8">
<title>Lista de links</title>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script type="text/javascript" src="../js/script.js"></script>
</head>
	<div style="display:block;
				justify-content: center;
				align-items: center;
				margin:auto;
				width:100vw;">
	<label style="margin:auto;width:100vw;text-align: center;font-size:40px;">Pesquisa</label>
	<input class="form-control" style="width:50%;margin:auto;"type="text" id="input" onKeyDown="filtrar()" onKeyUp="filtrar()" >
		<div style="display:block;
				justify-content: center;
				align-items: center;
				margin:auto;
				width:100vw;">
<button style="margin-left:20%;margin-top:50px;margin-bottom: 50px;" class="btn btn-success" onclick="window.location.href='index.php'">Assistir</button>
<button style="margin-left:15%;margin-top:50px;margin-bottom: 50px;" class="btn btn-success" onclick="window.location.href='Lista.php'">Lista de Links</button>
<button style="margin-left:15%;margin-top:50px;margin-bottom: 50px;" class="btn btn-success" onclick="window.location.href='inserir.php'">Inserir Links</button>
		</div>
		</div>
<div style="display:flex;
				justify-content: center;
				align-items: center;
				padding:0px,70px;" id="lista">
	<form action="index.php">
		<table class="table table-dark">
			<thead>
				<tr>
					<td>Nomes </td><td>Episodio</td><td>Links</td><td>Ações</td>
				</tr>
			</thead>
<?php 
for($i=0;$i<count($listaCompleta);$i++)
{
	echo "<tr>";
	echo "<td>".$listaCompleta[$i]['nome']."</td>";
	echo "<td>".$listaCompleta[$i]['episodio']."</td>";
	echo "<td>".$listaCompleta[$i]['link']."</td>"."<td>";
?>
	<button class="btn btn-success" type="submit" onclick="acessar('<?php echo $listaCompleta[$i]['link'] ?>',<?php echo $listaCompleta[$i]['id'] ?>);">Acessar</button>	
	<button class="btn btn-danger" type="button" onclick="deletarLink(<?php echo $listaCompleta[$i]['id'] ?>);">Apagar</button>
<?php
	echo "</td>";
	echo "</tr>";
}
			
?>	
		</table>
	
	
	</form>
	
	</div>
<body>
</body>
</html>