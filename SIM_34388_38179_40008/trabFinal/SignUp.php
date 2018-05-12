

<?php
//session_unset();
?>
<form method="POST" action="index.php?page=checkSignUp">

<table>  
		<tr><td>Username:</td><td> <input type="text" name="user" ></td></tr>
       <tr><td>Password: </td><td><input type="password" name="pass" ></td></tr>
        <tr><td>Nome:    </td><td> <input type="text" name="name" ></td></tr>
    
    <?php
    
        if(isset($_SESSION['Tipo_ID']) and $_SESSION['Tipo_ID']==1){
           echo '<tr><td> Tipo de Utilizador: </td><td><select name="type">
                <option value=4>Paciente</option>
                <option value=1>Admin</option>
                <option value=2>Enfermeiro</option>
                <option value=3>Medico</option>

                </select> </td></tr>';
        }
        else{
            echo '<tr><td> Tipo de Utilizador: </td><td><select name="type">
                <option value=4>Paciente</option>
                

                </select> </td></tr>';
        }
    ?>	
        

        <tr> <td>	Data de Nascimento:	</td><td><input type="date" name="birth" >        	</td>      </tr>
  
         <tr><td> Contacto:     </td><td>   <input type="text" name="contacto"></td></tr>
         <tr><td> Mail:     </td><td>   <input type="text" name="mail"></td></tr>

          <tr><td>Morada:     </td><td>   <input type="text" name="morada"></td></tr>

   
          <tr><td>Codigo postal:    </td><td>  <input type="text" name="codigo"></td></tr>
        
     
        
    
       <tr><td> <button type="submit">Submit</button></td></tr>
        
        </table>
 
</form>