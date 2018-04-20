<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Backslash Linux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body class="bgground">
    <div class="container-fluid text-center">
    <h2 class="text-dark" >Welcome to Backslash Linux</h2>
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