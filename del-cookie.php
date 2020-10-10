<?php  

//Mengosongkan variabel super global $_COOKIE
unset($_COOKIE["user"]);
unset($_COOKIE["pass"]);

//Mengubah expired cookie dengan nama=cart dengan waktu satu jam sebelumnya
setcookie("user", "" , time() - 3600);  
setcookie("pass", "" , time() - 3600);
 
?>  