<?php
    
$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());

$sql = 'SELECT * FROM utilizadores';	//query que seleciona o utilizador inserido
		
$result = mysqli_query ($link ,$sql) 
			or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligação
		
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
        <td>Ordem</td><td>Name</td><td>User_ID</td>  <td>username</td>  <td>Tipo Utilizador</td> <td>Data Nascimento</td> 
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
			    				<td>'.$i.'</td>
			    				<td>'.$row["Nome"].'</td> 
			    				<td>'.$row["User_ID"].'</td>
			    				<td>'.$row["UserName"].'</td> 
			    				<td>'.$row["Tipo_ID"].'</td> 
			    				<td>'.$row["DataNasc"].'</td>
			    				



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
    		echo ' <a href="?page=list&pageNumber='.$n.'&pageSize='.$pageSize.'">'.$i.'-'.$j.' </a>';
    	}
   	
    $i=$i+$pageSize;
    $n++;
}
?>

<form id="dropForm" method="POST" action="index.php?page=drop_user" onsubmit="return confirm('Are you sure you want to Delete this User?');">
        To Delete user:
        <br>User ID: <input type="text" name="user_id_drop" >
        <input type="submit" value="submit"></button>
</form>      
<!--<script>
/*var form=document.getElementById("dropForm");
function areYouSure(){
	if(confirm('Do you really want to delete this user?')){
		form.submit();
	}
	else{
		return false;
	}
}*/
var el = document.getElementById('dropForm');

el.addEventListener('submit', function(){
    return confirm('Are you sure you want to Delete this User?');
}, false);

</script>-->
    
      




