<?php
session_start();
if(isset($_POST['submit'])){

	//getting created captcha image from session
	 $captcha_code =  $_SESSION['captcha_image'];

	 //getting user inserted captcha image 
	 $user_inserted_captcha = $_POST['captcha_code'];
	
	//checking both values are same or not
	if($captcha_code === $user_inserted_captcha){
		
		echo "Verified"; //if value matches return verified
		//header('location:index.php'); 
	}
	else{

		echo "Wrong Captcha"; //if value not matched show error
 	}
}

?>