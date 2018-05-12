<?php 


if(isset($_SESSION['authuser'])  && $_SESSION['authuser'] != 0){


	switch($_SESSION['Tipo_ID'])
		{
			
			case 1: //admin
			    echo '<a href="?page=userpage">User Page</a>';
			    echo '<br><a href="?page=list&pageNumber=1&pageSize=10">List of Users</a>';
			    echo '<br><a href="?page=listarPacientes2&pageNumber=1&pageSize=10">Listar Pacientes</a>';
			    echo '<br><a href="?page=listarPacientes&pageNumber=1&pageSize=10">Listar Visitas</a>';
				echo '<br><a href="?page=signPacient&pageNumber=1&pageSize=10">Sign Paciente</a>';
			    //echo '<br><a href="?page=InserirEpForm">Inserir episodio clinico</a>'; 
			    echo '<br><a href="?page=signUp">Sign User</a>'; 
			    echo '<br><a href="?page=editPatientList&pageNumber=1&pageSize=10">Editar Paciente</a>'; 
				
			    echo '<br><a href="?page=updateUserForm&pageNumber=1&pageSize=10">Edit user</a>';
			    echo '<br><a href="?page=user_drop_list&pageNumber=1&pageSize=10">Delete user</a>';
			      echo '<br><a href="?page=logout">Logout</a>';
		    
		    break;
		    
		    case 2: //enfermeiro
		    	
			  echo '<a href="?page=userpage">User Page</a>';
			    //echo '<br><a href="?page=list&pageNumber=1&pageSize=10">List of Users</a>';
			     echo '<br><a href="?page=listarPacientes2&pageNumber=1&pageSize=10">Listar Pacientes</a>';
			     echo '<br><a href="?page=listarPacientes&pageNumber=1&pageSize=10">Listar Visitas</a>';
				echo '<br><a href="?page=editPatientList&pageNumber=1&pageSize=10">Editar Paciente</a>';
			    
			    //echo '<br><a href="?page=listarPacientes&pageNumber=1&pageSize=10">Listar Visitas</a>';
			    echo '<br><a href="?page=signUp">Sign User</a>'; 
			    echo '<br><a href="?page=signPacient&pageNumber=1&pageSize=10">Sign Paciente</a>';
			    echo '<br><a href="?page=updateUserForm">Edit user</a>';
			    echo '<br><a href="?page=logout">Logout</a>';

		   		break;
		    
		    case 3: //médico
		    	
			    echo '<a href="?page=userpage">User Page</a>';
			    //echo '<br><a href="?page=list&pageNumber=1&pageSize=10">List of Users</a>';
			     //echo '<br><a href="?page=listarPacientes2&pageNumber=1&pageSize=10">Listar Pacientes</a>';
			     echo '<br><a href="?page=listarPacientes&pageNumber=1&pageSize=10">Listar Visitas</a>';
			   
			    
			    //echo '<br><a href="?page=listarPacientes&pageNumber=1&pageSize=10">Listar Visitas</a>';
			    echo '<br><a href="?page=updateUserForm">Edit user</a>';
			    echo '<br><a href="?page=logout">Logout</a>';

		    
		   		 break;
		       
		    case 4: //paciente
		    	
			    echo '<a href="?page=userpage">User Page</a>';
			    echo '<br><a href="?page=updateUserForm">Edit user</a>';
			    echo '<br><a href="?page=logout">Logout</a>';

		       break;
		       
		     default :
		     	
			    echo '<a href="?page=userpage">User Page</a>';
			    
			    echo '<br><a href="?page=logout">Logout</a>';


		    
    
    }
        
    
}
else{
    
    echo '<a href="?page=login">Login</a>';
   // echo '<br><a href="?page=logout">Logout</a>';
    
     
    //Husssein
    //echo '<br><a href="?page=InserirEpForm">InserirEp</a>';
    // echo '<br><a href="?page=listarPacientes&pageNumber=1&pageSize=10">Listar Visitas</a>';
    // FIM HUSSEIN
    //echo '<br><a href="?page=listarPacientes2&pageNumber=1&pageSize=10">Listar Pacientes</a>';
    
    
}

?>