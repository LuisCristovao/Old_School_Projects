<?php
    
$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());

$sql = 'SELECT pacientes.*, utilizadores.Nome
FROM pacientes, utilizadores
WHERE pacientes.User_ID=utilizadores.User_ID 
ORDER BY pacientes.Paciente_ID ASC';	//query que seleciona o utilizador inserido
		
$result = mysqli_query ($link ,$sql) 
			or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligaÃ§Ã£o
		
$listSize = mysqli_num_rows($result);
 // echo "$listSize"; 
    



if(isset($_GET["pageNumber"])){
    $pageNum=$_GET["pageNumber"];
     
 }
  
if(isset($_GET["pageSize"])){
    $pageSize=$_GET["pageSize"];
    if($pageSize>$listSize){
            $pageSize=$listSize;
    }
    if($pageSize<1){
        $pageSize=1;
    }
 }    

 
$numPages=ceil($listSize/$pageSize);
if($pageNum>$numPages){
    $pageNum=$numPages;
}
if($pageNum<1){
    $pageNum=1;
}



//definicao da tabela criacao dos titulos
echo '<table border="1px solid black" style="width:100%">
        <tr>
        <td>Nome</td><td>Genero</td><td>NIF</td><td>Cartao Saude</td><td>User ID</td><td>Paciente ID</td>   
      </tr>';


// numeracao das linhas da tabela e definicao do primeiro e ultimo utilizador a aparecer
$start_point=($pageNum-1)*$pageSize+1;
$end_point=$start_point+$pageSize-1;


$i=1;
if ($result->num_rows > 0) {
		//echo $start_point;
		//echo $end_point;
		
		// output data of each row
		while($i<=$pageNum*$pageSize ){
		
				

			    
		    	$row = $result->fetch_assoc();
		    	
		    	
		    	
		    	if($i>=$start_point && $i<=$end_point){
			    	echo '<tr>
			    				<td>'.$row["Nome"].'</td> 
			    				
			    				<td>'.$row["Genero"].'</td>
			    				<td>'.$row["NIF"].'</td>
			    				<td>'.$row["CartaoSaude"].'</td>
			    				<td>'.$row["User_ID"].'</td>
			    				<td>'.$row["Paciente_ID"].'</td>

			    				
			         </tr>';
		         }
		       
					
		    	if($row==0)
		    		break;
				
				$i++;
		   
		}
} else {
		    echo "0 results";
		}

$link->close();


//while($i<=$pageNum*$pageSize){    echo '<tr>        <td>'.$i.'</td><td></td><td></td>        </tr>';      $i++;}




//fim da tabela
echo '</table>';
echo'<br>';      



//links das paginas
$n=1; //pageNum
$i=1; //display
while($n<=$numPages){

	$j=$i+$pageSize-1;		
	
		if($n==$pageNum){
			echo ''.$i.'-'.$j.' ';
		}else{	
    		echo ' <a href="?page=listarPacientes2&pageNumber='.$n.'&pageSize='.$pageSize.'">'.$i.'-'.$j.' </a>';
    	}
   	
    $i=$i+$pageSize;
    $n++;
}
      
      
    
      
?>


<form method="POST" action="index.php?page=InserirEpForm">
       Introduzir sintomas no Paciente ID: <input type="text" name="PacienteID" >
        <button type="submit">Submit</button>
        </form>
<!--<a href="?page=editPatientList&pageNumber=1&pageSize=10">Editar Paciente</a>-->







