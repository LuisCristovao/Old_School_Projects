

<?php
//session_unset();
$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());



if(isset($_POST['user_ID_special'])  and $_POST['user_ID_special']!=null ){
    $local_user_id=$_POST['user_ID_special'];
    $_POST['user_ID_special']=null;
}
else{
    $local_user_id=$_SESSION['User_ID'];
}



$sql = 'SELECT * FROM utilizadores where User_ID='.$local_user_id;	//query que seleciona o utilizador inserido
		
$result = mysqli_query ($link ,$sql) 
			or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligaÃ§Ã£o
$row = $result->fetch_assoc();
$local_user_id;



//echo "user_id ";
//echo $_SESSION['User_ID'];

if($row['Tipo_ID']==1)
    $type_str="Admin";

if($row['Tipo_ID']==3)
    $type_str="Medico";

if($row['Tipo_ID']==2)
    $type_str="Enfermeiro";

if($row['Tipo_ID']==4)
    $type_str="Paciente";

   

echo'<form method="POST" action="index.php?page=updateUser">
       <table>       
		<tr><td>Username:</td><td> <input type="text" name="user" value="'.$row['UserName'].'" ></td></tr>
        <tr><td>Password:</td><td> <input type="password" name="pass" ></td><td>Deixe em branco a password se não a quer mudar!</td></tr>
        <tr><td>Nome:    </td><td> <input type="text" name="name" value="'.$row['Nome'].'" ></td></tr>
        <tr> <td>Data de Nascimento:</td><td><input type="date" name="birth"  value="'.$row['DataNasc'].'"></td></tr>
        <tr><td> Contacto:     </td><td>   <input type="text" name="contacto" value="'.$row['Contato'].'"></td></tr>
        <tr><td> Mail:     </td><td>   <input type="text" name="mail" value="'.$row['Mail'].'"></td></tr>
         <tr><td>Morada:     </td><td>   <input type="text" name="morada" value="'.$row['Morada'].'"></td></tr>
        <tr><td><input type="hidden" name="user_ID_special" value="'.$local_user_id.'"></td></tr>
        <tr><td> Codigo postal:   </td><td>   <input type="text" name="cod_postal" value="'.$row['Codigo_Postal'].'"></td></tr>';
           
if($_SESSION['Tipo_ID']==1){
    echo '<tr><td>Tipo de Utilizador: </td><td><select name="type">
                <option value="'.$row['Tipo_ID'].'">'.$type_str.'</option>
                <option value=1>Admin</option>
                <option value=3>Medico</option>
                <option value=2>Enfermeiro</option>
                <option value=4>Paciente</option>
                </select>
             </td></tr>';
}
else{
    
   echo' <input type="hidden" name="type" value="'.$row['Tipo_ID'].'">';
}



echo  '<tr><td> <button type="submit">Submit</button></td></tr>
    </table>
</form>';






?>
