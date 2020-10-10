<?php  
$input_username = 'akbarnovian';
$input_password = 'ganteng123';


//Contoh set cookie dengan nama=cart, nilai=2, expired=30 hari, path= /
setcookie("user", "$input_username" , time()+3600);
setcookie("pass", "$input_password" , time()+3600);

  
?>  