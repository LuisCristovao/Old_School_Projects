

<?php
session_unset();
?>
<form method="POST" action="index.php?page=checkLogin">
        Utilizador: <input type="text" name="user" >
        Password: <input type="password" name="pass" >
        <button type="submit">Submit</button>
        </form>