<?php

$_SESSION['PacienteID']=$_POST['PacienteID'];

?>


<form method="POST" action="index.php?page=InserirEp">




		<input type="hidden" name="Dificuldade_Respiratoria" value="0">
        <input type="checkbox" name="Dificuldade_Respiratoria" value="1">Dificuldade Respiratoria<br>

		<input type="hidden" name="Problema_Cardiaco" value="0">
        <input type="checkbox" name="Problema_Cardiaco" value="1">Problema Cardiaco<br>
        
        <input type="hidden" name="Fractura" value="0">
        <input type="checkbox" name="Fractura" value="1">Fractura<br>
        
        <input type="hidden" name="Tontura" value="0">
        <input type="checkbox" name="Tontura" value="1">Tontura<br>
        
        <input type="hidden" name="Hemorragia" value="0">
        <input type="checkbox" name="Hemorragia" value="1">Hemorragia<br>
        
        <input type="hidden" name="Azia" value="0">
        <input type="checkbox" name="Azia" value="1">Azia<br>
        
        <input type="hidden" name="Vomito" value="0">
        <input type="checkbox" name="Vomito" value="1">Vomito<br>
        
        <input type="hidden" name="Cefaleia" value="0">
        <input type="checkbox" name="Cefaleia" value="1">Cefaleia
		
		<table>
        <tr><td>Tensao</td></tr>
		<tr><td><input type="number" name="Tensao" min=0 max=20 step=0.1></td></tr>
		<tr><td>Glicemia</td></tr>
		<tr><td><input type="number" name="Glicemia" min ="0" max="200"></td></tr>
		</table>
		
		
        <!--<input type="hidden" name="Tensao" value="0">
        <input type="checkbox" name="Tensao" value="1">Tensao<br>
        
        <input type="hidden" name="Glicemia" value="0">
        <input type="checkbox" name="Glicemia" value="1">Glicemia<br>-->
        
        <button type="submit">Submit</button>
        </form>
        
        
        
    