<?php 

  			  $link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
           

            
        
            //INSERT INTO `pacientes`(`Paciente_ID`, `DataNascimento`, `Genero`, `NIF`, `CartaoSaude`, `User_ID`) VALUES (null,"1992-2-13",'m',11,11,2)
            $sql='INSERT INTO `pacientes`(`Paciente_ID`, `Genero`, `NIF`, `CartaoSaude`, `User_ID`) VALUES (null,"'.$_POST['gender'].'","'.$_POST['nif'].'","'.$_POST['saude'].'","'.$_POST['user'].'")';
           
			$result = mysqli_query ($link ,$sql) 
					or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligação
             
   			
   				
            if($result==1)
                echo "Successfully created a Paciente!";
            else
                echo "Fail to Sign Up.";
            


?>