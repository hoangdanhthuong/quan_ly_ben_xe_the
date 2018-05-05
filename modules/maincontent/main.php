<?php 
include('modules/maincontent/left/menu.php');
if(isset($_GET['quanly'])){
	$tam = $_GET['quanly'];
}else{
	$tam = '';
}
if($tam =='phongban'){
	include('modules/maincontent/right/phong_ban/main.php');
}elseif($tam =='chucvu'){
	include('modules/maincontent/right/chuc_vu/main.php');
}elseif($tam =='luong'){
	include('modules/maincontent/right/luong/main.php');
}elseif($tam =='tuyen'){
	include('modules/maincontent/right/tuyen/main.php');
}elseif($tam =='chatluong'){
	include('modules/maincontent/right/chat_luong/main.php');	
}else{
	include('modules/maincontent/right/trangchu.php');
}

?>

