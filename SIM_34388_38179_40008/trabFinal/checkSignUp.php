<?php 

//session_start();
//Checkusernameandpassword information
if(isset($_GET['page'])){
    
    
    if($_GET['page']=='checkSignUp'){ 
        
        if( empty($_POST['type']) or empty($_POST['user']) or empty($_POST['pass'])  or ctype_space($_POST['user']) or ctype_space($_POST['pass']) or empty($_POST['type'])){
            echo "You have to feel the form!";
        }
        
        
        else{
            $link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
            //echo "Olaaaaaaaaaaaaa!";
            $sql = 'SELECT * FROM utilizadores WHERE (username = "'.$_POST['user'].'")';
            $result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());
            $number = mysqli_num_rows($result); //if it returns 1 it is a valid user
            if($number>=1){
                echo "Fail to Sign Up because username already exist";

            }
            else{
                include "insertUser.php";
            }
        }

    }
    
}

?>