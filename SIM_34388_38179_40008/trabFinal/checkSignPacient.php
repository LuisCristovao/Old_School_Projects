<?php 

//session_start();
//Checkusernameandpassword information


if(isset($_GET['page'])){
    
    
		    if($_GET['page']=='checkSignPacient'){ 
		       /* 
		        if( empty($_POST['type']) or empty($_POST['user']) or empty($_POST['pass'])  or ctype_space($_POST['user']) or ctype_space($_POST['pass']) or ctype_space($_POST['type']))
		        {echo "You have to fill the form!";         }  
		        
		      	else{
		      */
			      $link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
		            
		            $sql = ' SELECT * FROM utilizadores WHERE `User_ID`= ("'.$_POST['user'].'") AND  `Tipo_ID`= 4 '; //AND Tipo_ID = 4 paciente
		            		$result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());
		            $number = mysqli_num_rows($result); //if it returns 1 it is a valid user
		            
		            if($number==1)
		            {
			            	 $sql = ' SELECT * FROM pacientes WHERE `User_ID`= ("'.$_POST['user'].'")'; //AND Tipo_ID = 4 paciente
			            	$result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());
			            	 $number = mysqli_num_rows($result); //if it returns 1 it is a valid user
							if($number == 1){
								echo "O paciente ja existe";
		            
							}else{
			                	include "insertPacient.php";	
			                }	
		            }else{		               
		                 echo "Fail to Sign Up because doesnt exist OR It's not a patient";
		            }
		      //  }
		
		    }
}  


?>