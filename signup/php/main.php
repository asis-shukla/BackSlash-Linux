<?php
// database interaction code
include('connection.php');  // this return $conn as the connection name
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

// first we check that password and confirm passwords are same or not
if($pass == $cpass)  // if pass and cpass are same then insert this in database and login
{
    $md5_pass  = md5($pass);  //calculate md5
    $insert_query = "INSERT INTO users (fullname, email, pword) VALUES ('$name', '$email', '$md5_pass') ";
    
    if ($conn->query($insert_query) === TRUE)
    {
        $_SESSION['fullname'] = $name;
        $_SESSION['email'] = $email;
        header ('location:../../index.php');
    }
    else 
    {
        echo("got back and try again please");
    }
}
else // if not same then give a message that passwords NOT match
{
    header ('location:../signup.php');
}

?>
