<?php
if(!isset($_SESSION['dang_nhap_quan_ly_ben_xe'])){
	include('modules/login.php');
}else{
	include('modules/maincontent/main.php');
}
?>