<?php
	class DB{
		
		
		public function conectar(){
			
			$con = new mysqli("localhost","root","","animes");
			
			return $con;
		}	
	
	}

?>