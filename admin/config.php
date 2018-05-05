<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'quan_ly_ben_xe_the';
$conn = mysqli_connect($servername, $username, $password, $db_name);
if(!$conn){
	die('Connection failed: '.mysqli_connect_error());
}
mysqli_set_charset($conn, 'UTF8');
?>