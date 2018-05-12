<?php 

session_start();
//echo 'Session:'.$_SESSION['authuser'].'';
//Checkusernameandpassword information
if(isset($_GET['page'])){
    
    
    if($_GET['page']=='checkLogin'){    
        $link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());

        $sql = 'SELECT * FROM UTILIZADORES WHERE (username = "'.$_POST['user'].'" AND password = "'.md5($_POST['pass']).'")';
        $result = mysqli_query ($link ,$sql) or die('The query failed: ' . mysqli_error());
        $number = mysqli_num_rows($result); //if it returns 1 it is a valid user
       
		 $row = $result->fetch_assoc();
        
        if($number==1){
        	
        	 $_SESSION['authuser']=1;
             $_SESSION['User_ID'] = $row['User_ID'];
             $_SESSION['Tipo_ID']=$row['Tipo_ID'];
             $_SESSION['username']=$_POST['user'];
             $_SESSION['pass']=$_POST['pass'];
             $_SESSION['Debug']= $row['Tipo_ID'];   
        }
        else{
            $_SESSION['authuser']=0;
        }

    }
}

?>