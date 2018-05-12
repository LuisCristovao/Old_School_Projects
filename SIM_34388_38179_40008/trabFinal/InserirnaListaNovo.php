<?php 


if(isset($_SESSION['novo']) && ($_SESSION['novo'] =1))
{

$_SESSION['nivelnovo']=$_POST['nivelnovo'];

     if($_SESSION['nivelnovo']=='Vermelho'){
 		echo "entrou aqui no Vermelho novo";
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+0);
     }
        
     if($_SESSION['nivelnovo']=='Laranja'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+600);
     }
     
     if($_SESSION['nivelnovo']=='Amarelo'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+3600);
	 }

     if($_SESSION['nivelnovo']=='Verde'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+7200);
	 }
	 
     if($_SESSION['nivelnovo']=='Azul'){
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+14400);
     }


 $link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
 
 	echo "entrou no novo";
   	$sql= 'INSERT INTO `lista`(`Paciente_ID`, `Sintomas_ID`, `Hora_de_Chegada`, `Tempo Limite`, `Nivel`, `Visita_ID`,`Estado`) 
	 VALUES ("'.$_SESSION['PacienteID'].'","'.$_SESSION['Sintoma_ID'].'","'.($_SESSION['date']).'","'.($_SESSION['date2']).'","'.($_SESSION['nivelnovo']).'",NULL, NULL)';

	$result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());

    if($result==1)
            echo "Visita inserida com sucesso";
            
 }
 else{
          
          
   
 $link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
 echo $_SESSION['PacienteID'];
 	echo "entrou no normal";
   	$sql= 'INSERT INTO `lista`(`Paciente_ID`, `Sintomas_ID`, `Hora_de_Chegada`, `Tempo Limite`, `Nivel`, `Visita_ID`,`Estado`) 
	 VALUES ("'.$_SESSION['PacienteID'].'","'.$_SESSION['Sintoma_ID'].'","'.($_SESSION['date']).'","'.($_SESSION['date2']).'","'.($_SESSION['cor']).'",NULL, NULL)';

	$result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());

    if($result==1)
            echo "Visita inserida com sucesso";
            
}  
            
            
            
            
   unset($_SESSION['Sintoma_ID']);
   unset($_SESSION['date']);
   unset($_SESSION['date2']);
   unset($_SESSION['cor']);
   unset($_SESSION['nivelnovo']);
   unset($_SESSION['novo']);
   unset($_SESSION['PacienteID']);
   
	header("Location: index.php?page=listarPacientes&pageNumber=1&pageSize=10");
	include "ListaPacientes.php";


 
            
?>