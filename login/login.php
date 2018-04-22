<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<form action="php/main.php" method="post">
  <div class="form-group">
    <label for="InputEmail">Email address</label>
    <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter your email"> 
  </div>
  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" class="form-control" id="InputPassword" name="pass" placeholder="Enter Your Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
 <br>
 
 <div>
	<p> Not a member </p>
	<a href="../signup/signup.php"> Sign Up </a>
</div>
</body>
</html>