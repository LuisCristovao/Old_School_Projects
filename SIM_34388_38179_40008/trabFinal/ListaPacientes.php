<?php
    
$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());

//$sql = 'SELECT * FROM lista';	//query que seleciona o utilizador inserido

//$sql= 'SELECT * FROM `lista` WHERE `Estado`IS NULL ORDER BY `Tempo Limite` ASC';
$sql='SELECT lista.*,utilizadores.* FROM lista, pacientes, utilizadores WHERE lista.Paciente_ID=pacientes.Paciente_ID AND pacientes.User_ID=utilizadores.User_ID AND lista.Estado IS NULL ORDER BY `Tempo Limite` ASC';

		
$result = mysqli_query ($link ,$sql) 
			or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligaÃ§Ã£o
		
$listSize = mysqli_num_rows($result);

    //echo "MERDA";

/*
$pageNumber=1;

$pageSize=10;

*/

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
        <td>Ordem de Atendimento</td><td>Hora de Chegada</td><td>Nivel</td><td>Tempo Limite</td><td>Nome</td><td>User_ID</td><td>Visita ID</td>
      </tr>';

//echo "MERDA1";
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
			    
			    				<td>'.$i.'</td>
			    				<td>'.$row["Hora_de_Chegada"].'</td> 
			    				<td>'.$row["Nivel"].'</td>
			    				<td>'.$row["Tempo Limite"].'</td>
			    			    <td>'.$row["Nome"].'</td>
								<td>'.$row["User_ID"].'</td>
			    				<td>'.$row["Visita_ID"].'</td>

			    				

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


//echo "MERDA2";

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
    		echo ' <a href="?page=listarPacientes&pageNumber='.$n.'&pageSize='.$pageSize.'">'.$i.'-'.$j.' </a>';
    	}
   	
    $i=$i+$pageSize;
    $n++;
}
 
      //if Enfermeira
      
      
      
      if($_SESSION['Tipo_ID']==2 || $_SESSION['Tipo_ID']==1 ){
      
      	echo '
      
      	<table><tr><td>
      		
      	<form method="POST" action="index.php?page=UpdateNivel">
		Deseja Alterar Nivel de alguem Paciente na lista de espera?</td></tr>
		<tr><td>
		Novo Nivel: <select name="nivelnovo2">
		            <option value="Vermelho">Vermelho</option>
		            <option value="Laranja">Laranja</option>
		            <option value="Amarelo">Amarelo</option>
		            <option value="Verde">Verde</option>
		            <option value="Azul">Azul</option>
		            </select><br>

        Visita ID: <input type="text" name="VisitaId2" >
        <button type="submit">Submit</button></td></tr>
        </form>
        
        </td></tr></table>
         ';
		}



	//if Médico
	
	 if($_SESSION['Tipo_ID']==3 || $_SESSION['Tipo_ID']==1){
	 
	 		echo ' 
	 		<br>
		<table><tr>
			

	<form method="POST" action="index.php?page=UpdateEstado">
		<td>Qual o Paciente que deseja atender?</td></tr>
        <tr><td> Visita ID: <input type="text" name="VisitaId" ></td>
        <td> <button type="submit">Submit</button></td>
        </form>
          </tr></table>

         	';


	}
		      
?>

  
      
      
      
      
      
      
    
