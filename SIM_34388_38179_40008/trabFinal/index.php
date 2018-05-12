
<?php

include "checkLogin.php";


?>
<!DOCTYPE html>

<html>
<head>
    <title>Hospital SIM</title>
<style>
/*
table, th, td {
    border: 1px solid black;
    
}
*/

col {
    display: table-column;
}
</style>
    
</head>
<body>
    
<script src="trab.js"></script>    
<table border="1px solid black" id="first_table" style="width:100%" style="height=100%">
    <tr>
        <th><a href="http://www.fct.unl.pt"><img src="logo.png"  style="float :left" style="width:10%" height="100%"></a><H1 align="center">Hospital SIM FCT</H1></th>
    
  </tr>
</table>
<table border="1px solid black" style="width:100%" style="height:100%" >    
    <tr>
        <td align="left" valign="top"><p>Options</p><a href="?page=homepage">Presentation</a><br><?php include "option.php"; ?></td>
        <td> <?php include "homepage.php"; ?> </td>
    </tr>
</table>  
<table border="1px solid black" style="width:100%" style="height:100%">
    <tr><td align="center">Alunos:34388 ...</td></tr>
</table>    
    
</body>
<html>