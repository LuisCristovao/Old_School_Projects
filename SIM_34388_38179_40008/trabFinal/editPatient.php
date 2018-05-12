<?php 

    		$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
    
            //UPDATE `utilizadores` SET `UserName`="sdvs" WHERE User_ID=1


            //apartir de agora usamos sempre o user id special para fazer o update Ã© mais geral do que usar a var session.
        
            $local_patient_id=$_POST['patient_ID_special'];
            $_POST['patient_ID_special']=null;
            //echo 'local user id: '.$local_user_id;
            //echo '<br>contato: '.$_POST['contacto'];
            //,`Codigo_Postal`="'.$_POST['cod_postal'].'"
            //,`DataNasc`="'.$_POST['birth'].'",`Mail`="'.$_POST['mail'].'",`Morada`="'.$_POST['morada'].'" 
            //,`Contato`="'.$_POST['contacto'].'"    

            

            //echo $_SESSION['User_ID'];
            $sql='UPDATE `pacientes` SET `NIF` = "'.$_POST['nif'].'",`CartaoSaude`="'.$_POST['cartao_saude'].'",`Genero`="'.$_POST['gender'].'" WHERE `Paciente_ID` = '.$local_patient_id.'';
            $result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligaÃ§Ã£o
                
            if($result==1)
                echo "Successfully updated patient!";
            else
                echo "Fail to update patient.";
            


?>