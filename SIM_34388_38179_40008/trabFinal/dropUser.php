<?php





	$link = mysqli_connect('localhost', 'root', '','triafct') or die('Error connecting to the server: ' . mysqli_error());
	//$_POST['user_id_drop'];
	
	//DELETE FROM `utilizadores` WHERE User_ID=1
	$sql='DELETE FROM `utilizadores` WHERE User_ID="'.$_POST['user_id_drop'].'"';



	$result = mysqli_query ($link ,$sql) 
			or die('The query failed: ' . mysqli_error()); 
	if($result==1)
			echo 'Successfully deleted user!';
	else
			echo 'Fail to delete user.';
			

?>