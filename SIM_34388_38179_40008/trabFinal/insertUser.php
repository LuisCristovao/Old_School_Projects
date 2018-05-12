<?php 

   		

           			//SELECT * FROM `localidades` WHERE `Codigo_Postal`= '2810-175'
           	/*
		
			$link = mysqli_connect('localhost', 'root', '','triafct') 
			or die('Error connecting to the server: ' . mysqli_error());
			$checkCod = 'SELECT * FROM `localidades` WHERE `Codigo_Postal`= "'.$_POST['codigo'].'"';
			$result1 =  mysqli_query ($link ,$checkCod) or die('The query failed Codigo: ' . mysqli_error());
			$number = mysqli_num_rows($result1);
			if($number == 0){
				 echo "Successfully created a new CODIGO!";

			
				$insertCod = 'INSERT INTO `localidades` (`Codigo_Postal`, `Concelho`) VALUES ("'.$_POST['codigo'].'", "'.$_POST['concelho'].'")';
				
				$result2 =  mysqli_query ($link ,$checkCod) or die('The query failed InserirCodigo: ' . mysqli_error());

					
			}else{
				 echo "Successfully SH11111T!";

			}			   
           */
       
           
           
             if($_POST['morada']==""){
           
           		$_POST['morada']=NULL;
           		}
          
          if($_POST['contacto']==""){
           		$_POST['contacto']=0;
           		}
           		
           		  if($_POST['mail']==""){
           		$_POST['mail']=	NULL;
           		}
           		
           		  if($_POST['codigo']==""){
           		$_POST['codigo']=NULL;
           		}
           		
           		
           		
           			$link = mysqli_connect('localhost', 'root', '','triafct') 
   					or die('Error connecting to the server: ' . mysqli_error());
           		
           		
           		 if($_POST['birth']==""){
           	$insert= 'INSERT INTO utilizadores(User_ID, UserName, Password, Nome, Morada, Contato, Mail, Codigo_Postal, Tipo_ID, DataNasc) 
   				VALUES(NULL, "'.$_POST['user'].'", "'.md5($_POST['pass']).'","'.$_POST['name'].'","'.$_POST['morada'].'","'.$_POST['contacto'].'","'.$_POST['mail'].'","'.$_POST['codigo'].'","'.$_POST['type'].'",NULL)';
   				
           		}
           		else{
           		$insert= 'INSERT INTO utilizadores(User_ID, UserName, Password, Nome, Morada, Contato, Mail, Codigo_Postal, Tipo_ID, DataNasc) 
   				VALUES(NULL, "'.$_POST['user'].'", "'.$_POST['pass'].'","'.$_POST['name'].'","'.$_POST['morada'].'","'.$_POST['contacto'].'","'.$_POST['mail'].'","'.$_POST['codigo'].'","'.$_POST['type'].'","'.$_POST['birth'].'")';
   				}
   				

           		


        
       		
   				/*$insert= 'INSERT INTO utilizadores(User_ID, UserName, Password, Nome, Morada, Contato, Mail, Codigo_Postal, Tipo_ID, DataNasc) 
   				VALUES(NULL, "'.$_POST['user'].'", "'.$_POST['pass'].'","'.$_POST['name'].'","'.$_POST['morada'].'","'.$_POST['contacto'].'","'.$_POST['mail'].'","'.$_POST['codigo'].'","'.$_POST['type'].'","'.$_POST['birth'].'")';
   				*/
   				
   				

   				
   				
   				
   				$result = mysqli_query($link, $insert); 
       
            if($result==1)
                echo "Successfully created a new user!";
            else
                echo "Fail to Sign Up.";
            


?>