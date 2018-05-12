<?php 

    		$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
    
            //UPDATE `utilizadores` SET `UserName`="sdvs" WHERE User_ID=1


            //apartir de agora usamos sempre o user id special para fazer o update Ã© mais geral do que usar a var session.
        
            $local_user_id=$_POST['user_ID_special'];
            $_POST['user_ID_special']=null;
            //echo 'local user id: '.$local_user_id;
            //echo '<br>contato: '.$_POST['contacto'];
            //,`Codigo_Postal`="'.$_POST['cod_postal'].'"
            //,`DataNasc`="'.$_POST['birth'].'",`Mail`="'.$_POST['mail'].'",`Morada`="'.$_POST['morada'].'" 
            //,`Contato`="'.$_POST['contacto'].'"    
            
             if($_POST['morada']==""){
           
           		$_POST['morada']=NULL;
           		}
          
          if($_POST['contacto']==""){
           		$_POST['contacto']=0;
           		}
           		
           		  if($_POST['mail']==""){
           		$_POST['mail']=	NULL;
           		}
           		
           		  if($_POST['cod_postal']==""){
           		$_POST['cod_postal']=NULL;
           		}
            
            if($_POST['pass']!=""){
                //echo $_SESSION['User_ID'];
                if($_POST['birth']!=""){
                    $sql='UPDATE `utilizadores` SET `UserName` = "'.$_POST['user'].'",`Nome`="'.$_POST['name'].'",`Password`="'.md5($_POST['pass']).'",`Tipo_ID`='.$_POST['type'].',`DataNasc`="'.$_POST['birth'].'",`Mail`="'.$_POST['mail'].'",`Morada`="'.$_POST['morada'].'",`Codigo_Postal`="'.$_POST['cod_postal'].'",`Contato`="'.$_POST['contacto'].'"  WHERE `User_ID` = '.$local_user_id.'';
                }
                else{
                    //echo 'entrou aqui';
                    $sql='UPDATE `utilizadores` SET `UserName` = "'.$_POST['user'].'",`Nome`="'.$_POST['name'].'",`Password`="'.md5($_POST['pass']).'",`Tipo_ID`='.$_POST['type'].',`DataNasc`=NULL,`Mail`="'.$_POST['mail'].'",`Morada`="'.$_POST['morada'].'",`Codigo_Postal`="'.$_POST['cod_postal'].'",`Contato`="'.$_POST['contacto'].'"  WHERE `User_ID` = '.$local_user_id.'';
                }
            }
            else{
                if($_POST['birth']!=""){
                    $sql='UPDATE `utilizadores` SET `UserName` = "'.$_POST['user'].'",`Nome`="'.$_POST['name'].'",`Tipo_ID`='.$_POST['type'].',`DataNasc`="'.$_POST['birth'].'",`Mail`="'.$_POST['mail'].'",`Morada`="'.$_POST['morada'].'",`Codigo_Postal`="'.$_POST['cod_postal'].'",`Contato`="'.$_POST['contacto'].'"  WHERE `User_ID` = '.$local_user_id.'';
                }
                else{
                    $sql='UPDATE `utilizadores` SET `UserName` = "'.$_POST['user'].'",`Nome`="'.$_POST['name'].'",`Tipo_ID`='.$_POST['type'].',`DataNasc`=NULL,`Mail`="'.$_POST['mail'].'",`Morada`="'.$_POST['morada'].'",`Codigo_Postal`="'.$_POST['cod_postal'].'",`Contato`="'.$_POST['contacto'].'"  WHERE `User_ID` = '.$local_user_id.'';
                }
            }






            $result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligaÃ§Ã£o
                
            if($result==1)
                echo "Successfully updated user!";
            else
                echo "Fail to Sign Up.";
            


?>