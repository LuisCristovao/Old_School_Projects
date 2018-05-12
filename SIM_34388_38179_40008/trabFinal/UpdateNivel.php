<?php

$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
 
 	echo "entrou no Update Nivel";
 	
 	
 	
    $sql='SELECT * FROM `lista` WHERE `Visita_ID`=("'.$_POST['VisitaId2'].'")';
    
    $result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());

 	$row = $result->fetch_assoc();
 	
 	
	$_SESSION['date']=$row['Hora_de_Chegada'];
 	echo $_SESSION['date'];
 	
 	
 	if($_POST['nivelnovo2']=='Vermelho'){
 		echo "entrou aqui no Vermelho novo";
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+0);
     }
        
     if($_POST['nivelnovo2']=='Laranja'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+600);
     }
     
     if($_POST['nivelnovo2']=='Amarelo'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+3600);
	 }

     if($_POST['nivelnovo2']=='Verde'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+7200);
	 }
	 
     if($_POST['nivelnovo2']=='Azul'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+14400);
     }

 	
 	
 	$sql='UPDATE `lista` SET `Tempo Limite`=("'.$_SESSION['date2'].'"),`Nivel`=("'.$_POST['nivelnovo2'].'") WHERE `Visita_ID`=("'.$_POST['VisitaId2'].'")';
 	
	$result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());

    if($result==1)
            echo "Alterado Nivel com sucesso";
            
     
     
     unset($_SESSION['date']);
     unset($_SESSION['date2']);

//a href="?page=list&pageNumber=1&pageSize=10";
header("Location: index.php?page=listarPacientes&pageNumber=1&pageSize=10");
include "ListaPacientes.php";




?>