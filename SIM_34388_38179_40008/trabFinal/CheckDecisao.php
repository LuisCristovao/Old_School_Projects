<?php



if($_POST['Decisao'] == 1){
echo "Entrou aqui";
	$_SESSION['novo'] =1;
	include "AlterarNivel.php";
	}
else
	include "InserirnaListaNovo.php";

	

	
?>
