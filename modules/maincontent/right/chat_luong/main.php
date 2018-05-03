<?php
if(isset($_GET['ac'])){
	$temp = $_GET['ac'];
}else{
	$temp = '';
}

if($temp == 'them'){
	include('modules/maincontent/right/chat_luong/tao_moi.php');
}else{
	include('modules/maincontent/right/chat_luong/danh_sach.php');
}

?>
<script type="text/javascript" src="js/chat_luong.datatable.js"></script>