<?php
include('../../../../admin/config.php');
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST['quanlity'])&&isset($_POST['id_quanlity'])){
	$quanlity = $_POST['quanlity'];
	$id = $_POST['id_quanlity'];
	$sql = "update chat_luong set chat_luong ='".$quanlity."' where id_chat_luong = ".$id;
	if(!mysqli_query($conn,$sql)){
		echo 'Thêm không thành công!';
	}
}
?>