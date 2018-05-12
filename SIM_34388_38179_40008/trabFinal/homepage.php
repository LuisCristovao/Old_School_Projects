



<!--<h2 align="center">Hospital where every body looks for you!!</h2><h2 align= "center"><img  src="home_image.jpg"  style="float:center"></h2>-->
    
<?php 
$page=null;

 if(isset($_GET["page"])){
     $page=$_GET["page"];
//     echo $page;
 }
if( isset($_SESSION['authuser']) && $_SESSION['authuser'] == 1)
{     
    switch($_SESSION['Tipo_ID']){
        case 1://admin    
            switch($page){
                case 'logout':
                    $_SESSION['authuser'] =0;
                    session_unset();
                    header("Location: index.php");
                    break;
                case 'homepage':
                    include "home.php";
                    break;
                case 'userpage':
                    include "UserPage.php";
                    break;
                case 'signUp':    
                    include "SignUp.php";
                    //echo "Login first !";
                    break;
                case 'checkLogin':
                    echo "Login Success!!";
                    //echo $_SESSION['authuser'];
                    break;
                case 'list':
                    include "user_list.php";
                    break;
                case 'checkSignUp':    
                    include "checkSignUp.php";
                    break;  
                case 'signPacient':    
                    include "SignPacient.php";
                    break; 
                case 'checkSignPacient':
                    include "checkSignPacient.php";
                    break;

                case 'updateUserForm':
                    include "updateUserForm.php";
                    break; 

                case 'updateUser':
                    include "updateUser.php";
                    break;   

				case 'editPatientList':
                    include "editPatientList.php";
                    break;  
				case 'editPatientForm':
                    include "editPatientForm.php";
                    break; 
				case 'editPatient':
                    include "editPatient.php";
                    break; 		
					
				case 'user_drop_list':
					include "user_drop_list.php";
					break;
				case 'drop_user':
					include "dropUser.php";
					break;


                                 //Hussein
                    case 'InserirEpForm':
                    include "InserirEpForm.php";
                    break;

                 case 'InserirEp':
                    include "InserirEp.php";
                    break;

                 case 'CheckDecisao':
                    include "CheckDecisao.php";
                    break;

                 case 'UpdateEstado':
                    include "UpdateEstado.php";
                    break;

                case 'UpdateNivel':
                    include "UpdateNivel.php";
                    break;

                    case 'InserirnaListaNovo':
                    include "InserirnaListaNovo.php";
                    break;

                    case 'listarPacientes':
                        include "ListaPacientes.php";
                        break;

                    //FIM HUSSEIN
                      case 'listarPacientes2':
                    include "ListarPacientes2.php";
                    break;




                default:
                    include "home.php";
                    break;

            }
            break;
            
        case 2: //Enfermeiro
            switch($page){
                case 'logout':
                    $_SESSION['authuser'] =0;
                    session_unset();
                    header("Location: index.php");
                    break;
                case 'homepage':
                    include "home.php";
                    break;
                case 'userpage':
                    include "UserPage.php";
                    break;
                case 'signUp':    
                    include "SignUp.php";
                    //echo "Login first !";
                    break;
                case 'checkLogin':
                    echo "Login Success!!";
                    //echo $_SESSION['authuser'];
                    break;
                /*case 'list':
                    include "user_list.php";
                    break;*/
                case 'checkSignUp':    
                    include "checkSignUp.php";
                    break;
                case 'signPacient':    
                    include "SignPacient.php";
                    break; 
                case 'checkSignPacient':
                    include "checkSignPacient.php";
                    break;

                case 'updateUserForm':
                    include "updateUserForm.php";
                    break; 
                
                case 'updateUser':
                    include "updateUser.php";
                    break;     
                case 'editPatientList':
                    include "editPatientList.php";
                    break;  
				case 'editPatientForm':
                    include "editPatientForm.php";
                    break; 
				case 'editPatient':
                    include "editPatient.php";
                    break; 		


                                 //Hussein
                    case 'InserirEpForm':
                    include "InserirEpForm.php";
                    break;

                 case 'InserirEp':
                    include "InserirEp.php";
                    break;

                 case 'CheckDecisao':
                    include "CheckDecisao.php";
                    break;

                 case 'UpdateEstado':
                    include "UpdateEstado.php";
                    break;

                case 'UpdateNivel':
                    include "UpdateNivel.php";
                    break;

                    case 'InserirnaListaNovo':
                    include "InserirnaListaNovo.php";
                    break;

                    case 'listarPacientes':
                        include "ListaPacientes.php";
                        break;

                    //FIM HUSSEIN
                      case 'listarPacientes2':
                    include "ListarPacientes2.php";
                    break;




                default:
                    include "home.php";
                    break;

            }
            break;
            
            
            case 3: //Medico
            switch($page){
                case 'logout':
                    $_SESSION['authuser'] =0;
                    session_unset();
                    header("Location: index.php");
                    break;
                case 'homepage':
                    include "home.php";
                    break;
                case 'userpage':
                    include "UserPage.php";
                    break;
                /*case 'signUp':    
                    include "SignUp.php";
                    //echo "Login first !";
                    break;*/
                case 'checkLogin':
                    echo "Login Success!!";
                    //echo $_SESSION['authuser'];
                    break;
                /*case 'list':
                    include "user_list.php";
                    break;*/
                /*case 'checkSignUp':    
                    include "checkSignUp.php";
                    break;*/  
               /* case 'signPacient':    
                    include "SignPacient.php";
                    break; 
                case 'checkSignPacient':
                    include "checkSignPacient.php";
                    break;*/

                case 'updateUserForm':
                    include "updateUserForm.php";
                    break; 
                
                case 'updateUser':
                    include "updateUser.php";
                    break;     
                


                                 //Hussein
                   /* case 'InserirEpForm':
                    include "InserirEpForm.php";
                    break;

                 case 'InserirEp':
                    include "InserirEp.php";
                    break;*/

                 case 'CheckDecisao':
                    include "CheckDecisao.php";
                    break;

                 case 'UpdateEstado':
                    include "UpdateEstado.php";
                    break;

                /*case 'UpdateNivel':
                    include "UpdateNivel.php";
                    break;

                    case 'InserirnaListaNovo':
                    include "InserirnaListaNovo.php";
                    break;

                   */ case 'listarPacientes':
                        include "ListaPacientes.php";
                        break;

                    //FIM HUSSEIN
                    /*  case 'listarPacientes2':
                    include "ListarPacientes2.php";
                    break;*/




                default:
                    include "home.php";
                    break;

            }
            break;
            
            
            
            case 4: //Paciente
            switch($page){
                case 'logout':
                    $_SESSION['authuser'] =0;
                    session_unset();
                    header("Location: index.php");
                    break;
                case 'homepage':
                    include "home.php";
                    break;
                case 'userpage':
                    include "UserPage.php";
                    break;
                /*case 'signUp':    
                    include "SignUp.php";
                    //echo "Login first !";
                    break;*/
                case 'checkLogin':
                    echo "Login Success!!";
                    //echo $_SESSION['authuser'];
                    break;
                /*case 'list':
                    include "user_list.php";
                    break;*/
                /*case 'checkSignUp':    
                    include "checkSignUp.php";
                    break;*/  
                /*case 'signPacient':    
                    include "SignPacient.php";
                    break; 
                case 'checkSignPacient':
                    include "checkSignPacient.php";
                    break;*/

                case 'updateUserForm':
                    include "updateUserForm.php";
                    break; 
                
                case 'updateUser':
                    include "updateUser.php";
                    break;     
                


                /*                 //Hussein
                    case 'InserirEpForm':
                    include "InserirEpForm.php";
                    break;

                 case 'InserirEp':
                    include "InserirEp.php";
                    break;

                 case 'CheckDecisao':
                    include "CheckDecisao.php";
                    break;

                 case 'UpdateEstado':
                    include "UpdateEstado.php";
                    break;

                case 'UpdateNivel':
                    include "UpdateNivel.php";
                    break;

                    case 'InserirnaListaNovo':
                    include "InserirnaListaNovo.php";
                    break;

                    case 'listarPacientes':
                        include "ListaPacientes.php";
                        break;

                    //FIM HUSSEIN
                      case 'listarPacientes2':
                    include "ListarPacientes2.php";
                    break;



                */
                default:
                    include "home.php";
                    break;

            }
            break;
            
        default:
            echo "Error in User Type!!!";
            break;        
            
    }
    
}
else{
    
    
    switch($page){
        case 'login':
            include "login.php";
            break;
        case 'homepage':
            include "home.php";
            break;
        case 'userpage':
            echo "Wanted to hack the page Ah,Ah!";
            break;
        case 'checkLogin':
           echo "fail to login, probably wrong pass or username!!";
            break;
        case 'signUp':    
            //include "SignUp.php";
            echo "Login first !";
            break;
        case 'checkSignUp':    
            //include "checkSignUp.php";
            echo "Login first !";
            break;    
            
            
         /*               //Hussein
            case 'InserirEpForm':
            include "InserirEpForm.php";
            break;
            
         case 'InserirEp':
            include "InserirEp.php";
            break;
            
         case 'CheckDecisao':
         	include "CheckDecisao.php";
         	break;
         	         	
         case 'UpdateEstado':
         	include "UpdateEstado.php";
         	break;
         	
		case 'UpdateNivel':
         	include "UpdateNivel.php";
         	break;
         	
		case 'InserirnaListaNovo':
		include "InserirnaListaNovo.php";
		break;

        case 'listarPacientes':
            include "ListaPacientes.php";
            break;
            
            //FIM HUSSEIN

            case 'listarPacientes2':
            include "ListarPacientes2.php";
            break;

           */ 
            default:
            include "home.php";
            break;
        
            
    }
    
    if(isset($_SESSION['debug']))
     echo 'tipo: '.$_SESSION['Debug'];
    
}

?>