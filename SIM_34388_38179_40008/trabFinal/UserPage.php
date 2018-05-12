<?php

$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());

$sql = 'SELECT * FROM `utilizadores` WHERE `UserName` = "'.$_SESSION['username'].'" ';	//query que seleciona o utilizador inserido
		
$result = mysqli_query ($link ,$sql) 
			or die('The query failed: ' . mysqli_error()); // corre a query na BD onde foi feita a ligacao
			
$row = $result->fetch_assoc();


					echo '	<table>
							<tr><td>User ID:</td><td>'.$row["User_ID"].'</td></tr>
							<tr><td>UserName:</td><td>'.$row["UserName"].'</td></tr>
							<!--<tr><td>PW:</td><td>'.$row["Password"].'</td></tr>-->
							<tr><td>Nome:</td><td>'.$row["Nome"].'</td></tr>
							<tr><td>Morada:</td><td>'.$row["Morada"].'</td></tr>
							<tr><td>Contacto:</td><td>'.$row["Contato"].'</td></tr>							
							<tr><td>Mail:</td><td>'.$row["Mail"].'</td></tr>
							<tr><td>Codigo Postal:</td><td>'.$row["Codigo_Postal"].'</td></tr>';
					
					if($row["Tipo_ID"]==1)
						echo '<tr><td>Tipo:</td><td>Administrador</td></tr>';
					if($row["Tipo_ID"]==2)
						echo '<tr><td>Tipo:</td><td>Enfermeiro</td></tr>';
					if($row["Tipo_ID"]==3)
						echo '<tr><td>Tipo:</td><td>Medico</td></tr>';
					if($row["Tipo_ID"]==4)
						echo '<tr><td>Tipo:</td><td>Paciente</td></tr>';	
					

					echo '</table>';
					
							
							echo '<a href="?page=updateUserForm">Editar Valores</a>'	//falta criar um butão para editar esta informação


?>