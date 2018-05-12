

<?php
//session_unset();
$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());



if(isset($_POST['patient_ID_special'])  and $_POST['patient_ID_special']!=null ){
    $local_patient_id=$_POST['patient_ID_special'];
    $_POST['patient_ID_special']=null;
}
/*else{
    $local_patient_id=$_SESSION['patient_ID'];
}*/



$sql = 'SELECT * FROM pacientes where Paciente_ID='.$local_patient_id;	//query que seleciona o utilizador inserido
		
$result = mysqli_query ($link ,$sql) 
			or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligaÃ§Ã£o
$row = $result->fetch_assoc();




if($row['Genero']=="m")
	$str_gender="Masculino";
else
	$str_gender="Femenino";	


   

echo'<form method="POST" action="index.php?page=editPatient">
       <table>       
		<tr><td>:NIF</td><td> <input type="number" name="nif" value="'.$row['NIF'].'" ></td></tr>
        <tr><td>Cartão de Saude:</td><td> <input type="number" name="cartao_saude" value="'.$row['CartaoSaude'].'"></td></tr>
		<input type="hidden" name="patient_ID_special" value="'.$local_patient_id.'">';
        
           

    echo '<tr><td>genero: </td><td><select name="gender">
                <option value="'.$row['Genero'].'">'.$str_gender.'</option>
                <option value="m">Masculino</option>
                <option value="f">Femenino</option>
                
                </select>
             </td></tr>';


echo  '<tr><td> <button type="submit">Submit</button></td></tr>
    </table>
</form>';






?>
