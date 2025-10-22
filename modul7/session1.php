<?php 
session_start(); 
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
$count = $_SESSION['count'];
?> 
<html> 
<head> 
 <title>Demo session 1 </title> 
</head> 
<body> 
<h1> Demo Session 1 </h1> 
<?php
    Echo "Anda telah mengakses halaman ini sebanyak : $count kali"; 
?> 
</body> 
</html>

