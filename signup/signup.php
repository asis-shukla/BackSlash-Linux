<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<form action="php/main.php" method="post">
	<div class="form-group">
    	<label for="InputName">Your Name</label>
    	<input type="text" class="form-control" id="InputName" name="name" placeholder="Enter Your Name">
  	</div>
  <div class="form-group">
    <label for="InputEmail">Email address</label>
    <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter your email"> 
  </div>
  <div class="form-group">
    <label for="InputPassword1">Password</label>
    <input type="password" class="form-control" id="InputPassword1" name="pass" placeholder="Enter Your Password">
  </div>
   <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" class="form-control" id="InputPassword" name="cpass" placeholder="One more time Please">
  </div>
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
<br>
<div>
	<p>Already a member</p>
	<a href="../login/login.php">Login</a>
</div>

</body>
</html>