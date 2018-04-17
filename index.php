<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Backslash Linux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<div class="container-fluid text-center">
    <h2  >Welcome to Backslash Linux</h2>
    <?php  
        session_start();
        if(isset($_SESSION['fullname']))
    	    { 
                ?>
                    <h1> Hello <?php echo($_SESSION['fullname']);?> </h1>
                
                    <p>  For log out click below</p>

                    <p> <a href="logout.php">Log Out</a> </p>
                    
    <?php
    	    }   
    	else
            {	
                ?>
                <p> <a href="login/login.php"> Login/Signup</a> </p>
    <?php
        }
    ?>
    </div>
</body>
</html>