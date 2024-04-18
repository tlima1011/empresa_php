<<<<<<< HEAD
<?php
	$server = "localhost"; 
	$user = "root"; 
	$pass = ""; 
	$bd = "empresa"; 

	if ($conn = mysqli_connect($server,$user,$pass,$bd)){
		//echo "Conectado"; 
	}else{ 
		//echo "Erro!"; 
	}
	function mensagem($texto, $tipo){ 
		echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
	}
=======
<?php
	$server = "localhost"; 
	$user = "root"; 
	$pass = ""; 
	$bd = "empresa"; 

	if ($conn = mysqli_connect($server,$user,$pass,$bd)){
		//echo "Conectado"; 
	}else{ 
		//echo "Erro!"; 
	}
	function mensagem($texto, $tipo){ 
		echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
	}
>>>>>>> e5131a51d16b7a131b020f8544f2eb1100b734f0
?> 