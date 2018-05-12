<?php

$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
 
 	echo "entrou no Update Estado";
 	
 	
 	
 	
 	$sql='UPDATE `lista` SET `Estado`=1 WHERE `Visita_ID`=("'.$_POST['VisitaId'].'")';
 	
	$result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());

    if($result==1)
            echo "Paciente atendido com sucesso";

header("Location: index.php?page=listarPacientes&pageNumber=1&pageSize=10");
include "ListaPacientes.php";





?>