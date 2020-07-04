<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Catcha in PHP</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style type="text/css">
  	body{
  		background-image: url('bg2.jpg');
  		background-size:cover;
  	}
  	#form_div{
  		background-color: rgba(0,0,0,0.7);
  		color: #fff;
  		padding: 10px;
  		margin-top: 100px;
  		border-radius: 10px;
  		height: 400px;
  	}
  </style>
 
</head>
<body>
	<div class="container">
		<div class="row">
			
		<div class="col-md-6 mx-auto" id="form_div">
			<form action="signup.php" method="POST">
			<div class="form-group">
				<label>username:</label>
				<input type="email" name="username" class="form-control" placeholder="Enter username">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Password">
			</div>
			<!-- GETTING CAPTCHA IMAGE  -->
			
				<img src="generate_captcha.php">

			<!-- CAPTCHA IMAGE  -->
			
			<div class="form-group">
				<label>catcha:</label>
				<input type="text" name="captcha_code" class="form-control" placeholder="Enter captcha code">
			</div>
			<input type="submit" name="submit"  value="Verify" class="btn btn-primary btn-block">
			</form>
		</div>
			
		
		</div>
		</div>
	</div>
</body>
</html>