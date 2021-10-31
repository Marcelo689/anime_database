<?php
	include("../controller/sessao.php");
?>

<?php 
	include("../controller/funcoes.php");


	$input = $_SESSION['input'];
	$sql = new SQL();

	$listaCompleta = $sql->autoComplete($input);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
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
	
</body>
</html>