<?php 
	include($_SERVER['DOCUMENT_ROOT']."/model/database.php");
	class SQL{
		public function contaDigito($inteiro,$total){
        	$string = "";
            for($i =strlen($inteiro) ;$i < $total;$i++){
            	$string .= "0";
            }
            
            return "$string"."$inteiro";
        
        }
		public function insertLink($link,$nome,$id){
			$db = new DB();
			
			$con = $db->conectar();
			
			$sql = "INSERT INTO link(link,nome,id_usuario) VALUES('$link','$nome',$id)";
			
			mysqli_query($con,$sql) or die(mysqli_error($con));
		
		}
		
		public function deleteLink($id){
			$db = new DB();
			
			$con = $db->conectar();
			
			$sql = "DELETE FROM link WHERE id = $id ";
			
			mysqli_query($con,$sql);
		}
		
		public function selectAllLink($id = 0){
			$db =  new DB();
			
			$con = $db->conectar();
			
			$sql = "SELECT * FROM link ";
			
			if($id != 0){
				$sql .= "WHERE id_usuario = $id ";
			}
			$resultado = mysqli_query($con,$sql);
			
			$resultado = $resultado->fetch_all(MYSQLI_ASSOC);
			
			return $resultado;
		}
		
		public function autoComplete($input){
			
			$db =  new DB();
			
			$con = $db->conectar();
			
			$sql = "SELECT * FROM link WHERE nome LIKE '%".$input."%'";
			
			$resultado = mysqli_query($con,$sql);
			
			$resultado = $resultado->fetch_all(MYSQLI_ASSOC);
			
			return $resultado;
		}
		
		public function atualizarLink($link,$id){
			$db =  new DB();
			$sqlF = new SQL();
			$localDoEp = 0;
			$contador = 0; 
			$con = $db->conectar();
			$totalLetras = strlen($link); 
			for($i=$totalLetras-1; $i > $totalLetras-$totalLetras ;$i--){
				if(!is_numeric($link[$i]) && $contador > 0){
					break;
				}
				if(is_numeric($link[$i])){
					$contador++;
					$localDoEp = $i;
				}
			}
			//$linkF = substr($link,0,$totalLetras-$contador);
			$primeiroLink = substr($link,0,$localDoEp);
			$segundoLink  = substr($link,$localDoEp+$contador,$totalLetras);
			$ep = substr($link,$localDoEp,$contador+$localDoEp);
			//$ep = substr($link,strlen($link)-$contador-1,strlen($link)-2);
			$ep = intval($ep);
			$ep = $ep +1;
			$stringEp = $sqlF->contaDigito($ep,$contador);
			
			$sql = "UPDATE link SET link =  '".$primeiroLink.$stringEp.$segundoLink."' WHERE id = $id ";
			
			$resultado = mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$sql = "UPDATE link SET episodio = ".$ep." WHERE id = $id ";
			
			$resultado = mysqli_query($con,$sql) or die(mysqli_error($con));
			
		
		}
		

		public function insertUser($login,$senha,$nome){
			
			$db = new DB();
			
			$con = $db->conectar();
			
			$sql = "INSERT INTO usuario(login,senha,nome) VALUES('$login','$senha','$nome')";
			
			mysqli_query($con,$sql) or die(mysqli_error($con));
		}
		
		public function login($login,$senha){
			$db =  new DB();
			
			$con = $db->conectar();
			
			$sql = "SELECT id FROM usuario WHERE login = '$login' AND senha = '$senha' ";
			
			$resultado = mysqli_query($con,$sql);
			
			$resultado = $resultado->fetch_assoc();
			
			return $resultado;
		}
	}


?>