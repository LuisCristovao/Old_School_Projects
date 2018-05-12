<?php 

    $link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
    
    $sql= 'INSERT INTO `sintomas`(`Sintoma_ID`, `Dificuldade_respiratoria`, `Problemas_cardiaco`, `Fractura`, `Tontura`, `Hemorragia`, `Azia`, `Vomito`, `Cefaleia`, `Tensao`, `Glicemia`) 
    VALUES (NULL,"'.$_POST['Dificuldade_Respiratoria'].'","'.$_POST['Problema_Cardiaco'].'","'.$_POST['Fractura'].'","'.$_POST['Tontura'].'","'.$_POST['Hemorragia'].'","'.$_POST['Azia'].'","'.$_POST['Vomito'].'","'.$_POST['Cefaleia'].'","'.$_POST['Tensao'].'","'.$_POST['Glicemia'].'")';
   	$result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());

    if($result==1)
            echo "Sintomas inseridos com sucesso";
    
    
    //------------------------SINTOMA_ID
    
    $sql='SELECT * FROM sintomas WHERE Sintoma_ID= (SELECT MAX(Sintoma_ID) FROM sintomas)';
    
    $result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());
        
     $row= $result->fetch_assoc();
     $_SESSION['Sintoma_ID']=$row['Sintoma_ID'];

     
     
     //---------------------------------------ÁRVORE
     
if
( ( $_POST['Fractura'] == 1 ) && ( $_POST['Problema_Cardiaco'] == 1 ) && ( $_POST['Dificuldade_Respiratoria'] == 1 ) )
{
    $class = 1;
}


if(($_POST['Tontura'] == 1 ) && ($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 1 ) )
{
    $class = 1;
}


if(($_POST['Hemorragia'] == 1 ) && ( $_POST['Tontura'] == 0 ) && ( $_POST['Fractura'] == 0 ) && ( $_POST['Problema_Cardiaco'] == 1 ) && ( $_POST['Dificuldade_Respiratoria'] == 1 ) )
{
    $class = 1;
}


if(($_POST['Hemorragia'] == 0 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 1 ) )
{
    $class = 2;
}


if(($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 1 ) )
{
    $class = 2;
}


if(($_POST['Hemorragia'] == 1 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ( $_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 155 && $_POST['Tensao'] <= 15.85 )
{
    $class = 3;
}


if(($_POST['Hemorragia'] == 1 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 155 && $_POST['Tensao'] > 15.85 )
{
    $class = 2;
}


if(($_POST['Hemorragia'] == 0 ) && ($_POST['Fractura'] == 1 ) && ( $_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 155 )
{
    $class = 3;
}

if(($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] > 155 )
{
    $class = 2;
}

if(($_POST['Tontura'] == 1 ) && ($_POST['Fractura'] == 0 ) && ( $_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) )
{
    $class = 3;
}

if(($_POST['Azia'] == 1 ) && ($_POST['Hemorragia'] == 1 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 128.5 )
{
    $class = 3;
}

if(($_POST['Azia'] == 0 ) &&($_POST['Hemorragia'] == 1 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 128.5 )
{
    $class = 4;
}

if(($_POST['Hemorragia'] == 1 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] > 128.5 )
{
    $class = 3;
}

if(($_POST['Hemorragia'] == 0 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 1 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) )
{
    $class = 4;
}

if(($_POST['Tontura'] == 1 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 139.5 )
{
    $class = 4;
}

if(($_POST['Tontura'] == 1 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] > 139.5 )
{
    $class = 3;
}

if(($_POST['Hemorragia'] == 1 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) )
{
    $class = 4;
}

if(($_POST['Hemorragia'] == 0 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Tensao'] <= 14.55 && $_POST['Glicemia'] <= 125.5 )
{
    $class = 5;
}

if(($_POST['Hemorragia'] == 0 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Tensao'] <= 14.55 && $_POST['Glicemia'] > 125.5 )
{
    $class = 4;
}

if(($_POST['Hemorragia'] == 0 ) && ($_POST['Tontura'] == 0 ) && ($_POST['Fractura'] == 1 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Tensao'] > 14.55 )
{
    $class = 4;
}

if(($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 129.5 && $_POST['Tensao'] <= 14.95 )
{
    $class = 5;
}

if(($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] <= 129.5 && $_POST['Tensao'] > 14.95 )
{
    $class = 4;
}

if(($_POST['Fractura'] == 0 ) && ($_POST['Problema_Cardiaco'] == 0 ) && ($_POST['Dificuldade_Respiratoria'] == 0 ) && $_POST['Glicemia'] > 129.5 )
{
    $class = 4;
}
               
     
     
//-----------------------------------------------------------------------------------TEMPO
     $_SESSION['date'] = date('Y-m-d H:i:s');
     
     if($class==1){
     $_SESSION['cor'] ='Vermelho';
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+0);
     }
     
     if($class==2){
     $_SESSION['cor']='Laranja';
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+600);
     }
     
     if($class==3){
     $_SESSION['cor']='Amarelo';
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+3600);
}

     if($class==4){
     $_SESSION['cor']='Verde';
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+7200);
}
     if($class==5){
     $_SESSION['cor']='Azul';
     $_SESSION['date2'] = date('Y-m-d H:i:s',strtotime($_SESSION['date'])+14400);
     }
     
       echo "A classificacao e '".$_SESSION['cor']."'";
     ?>
	
		<form method="POST" action="index.php?page=CheckDecisao">
        Concorda com o Nivel?:  <input type="radio" name="Decisao" value="0" checked>Sim
        						<input type="radio" name="Decisao" value="1"> Nao
        						<button type="submit">Submit</button>
       	 </form>
    
              
