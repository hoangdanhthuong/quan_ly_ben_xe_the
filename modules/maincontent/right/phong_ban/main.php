<?php
if(isset($_GET['ac'])){
	include('modules/maincontent/right/phong_ban/view/sua.php');	
}else{
	include('modules/maincontent/right/phong_ban/view/danh_sach.php');
	include('modules/maincontent/right/phong_ban/view/tao_moi.php');	
}
?>
<script type="text/javascript" src="js/phong_ban.datatable.js"></script>