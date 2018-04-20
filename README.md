# BackSlash-Linux
This is for BackSlash Linux test on web development 

index.php is the start page of project
I build index.php page from scratch using bootstrap by its cdn link
Add some bootstrap classes to elements of HTML
1 - Main div tag contain classes container-fluid and text-center for making content to auto adjust in middle on any devices
2 - Use external css for add some colors in body, h1, h2 
3 - external css file named as main.css 
4 - Before running this project on PHP server make database with following information
5 - Forms used for signup and login is developed is from Internet freely available themes.  
$servername = "localhost";
$username = "root";
$password = "";
$dbname ='bslinux';

You can also edit the connection.php file present in login/php and signup/php

Make one table in bslinux database named as "users"
It contain columns with following attribute


Columns names		type		size     	Extra information
id                   int     	255 		primary key 	    auto incriment
fullname -         varchar   	255
email -            varchar   	255
pword -            varchar   	255

