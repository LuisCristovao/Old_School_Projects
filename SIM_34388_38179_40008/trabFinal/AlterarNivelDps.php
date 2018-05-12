<?php 
//ALterar a variável estado do paciente e retirar da Tabela

//Pedir Paciente ID ou só Visita ID? SOLUÇÃO TEMP: Visita ID
?>
<form method="POST" action="index.php?page=UpdateNivel">

		Novo Nivel: <select name="nivelnovo2">
		            <option value="Vermelho">Vermelho</option>
		            <option value="Laranja">Laranja</option>
		            <option value="Amarelo">Amarelo</option>
		            <option value="Verde">Verde</option>
		            <option value="Azul">Azul</option>
		            </select><br>

        Visita ID: <input type="text" name="VisitaId2" >
        <button type="submit">Submit</button>
        </form>

