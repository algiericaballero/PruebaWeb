<?php  
include_once "includes/auth.php";
include_once "includes/mainscripts.php";
$cant = count($_SESSION['back']);
if(isset($_SESSION['back'][$cant-2])){
	$dir = $_SESSION['back'][$cant-2];
	unset($_SESSION['back'][$cant-2]);
}else{
	$dir = 'index.php';
}
if(isset($_SESSION['back'][$cant-1])){
	unset($_SESSION['back'][$cant-1]);
}
redirect($dir); 
?>