<?php 
session_start();
//for making random string for captcha
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$captcha_string_length = 6;
	 $captcha_code = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $captcha_string_length; $i++) {
       $captcha_code .= $characters[mt_rand(0, $max)];
		 }

		 //echo $captcha_code;

		 
		 $_SESSION['captcha_image'] = $captcha_code; //passing captcha image to sesson

$catcha_img = imagecreate(100,30); //creating image by PHP function for creating image(height & width in parameter here 100 & 30)

imagecolorallocate($catcha_img, 255,237,288); //Allocate a color to image by default it is black 

$text_color = imagecolorallocate($catcha_img, 0,0,0); //passing color for text

imagestring($catcha_img, 29, 10, 2, $captcha_code , $text_color); //passing captcha code in image

header('content:image/jpeg'); //defining type of image

imagejpeg($catcha_img); //created image



?>