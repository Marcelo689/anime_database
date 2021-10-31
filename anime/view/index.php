
<?php 
	include("../controller/sessao.php");
	if(isset($_SESSION['link'])){
		$link = $_SESSION['link'];
		$id   = $_SESSION['id'];
	}else{
		$link = "";
	}
?>
<!doctype html>
<html>
	<head></head>
	<title>Tela de animes</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="application/javascript" src="../js/script.js"></script>
	<body>
		<div style="margin-left:300px;">
	<button class="btn btn-success" style="margin-left:200px;" onclick="window.location.href='Lista.php'">Lista de Links</button>
	<button class="btn btn-success" style="margin-left:200px;" onclick="window.location.href='inserir.php'">Inserir Links</button>
	<button class="btn btn-danger" style="margin-left:200px;" onclick="deslogar()">Deslogar</button>
	<form method="post" action="#">
		<label style="text-align:center;font-size:40px;">Insira link do episodio</label>
		<input class="form-control" style="width:50vw;" type="text" style="width:800px;" value='<?php echo $link ?>' name="url" />
		<button class="btn btn-success" type="submit" >Acessar</button>
	
	<?php 
		
		include("../controller/stream.php");
			   
		?>
		<button class="btn btn-danger" type="button" onclick="atualizarLink('<?php echo $link ?>',<?php echo $id ?>)">Atualizar lista</button>
		</form>
	</div>
	
</html>