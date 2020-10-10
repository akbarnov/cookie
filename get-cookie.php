<?php  
if(!isset($_COOKIE["user"]) && !isset($_COOKIE["pass"])) {  
  echo "Cookie tidak ditemukan!";  
} else {  
  echo "Username = ". $_COOKIE["user"];
  echo "<br>";
  echo "Password = ". $_COOKIE["pass"];
}  
?>  