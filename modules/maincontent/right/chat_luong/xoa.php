<?php
include('../../../../admin/config.php');
if(isset($_POST['id_quanlity'])){
	$id = $_POST['id_quanlity'];
	$sql = "delete from chat_luong where id_chat_luong = ".$id."";
	if(!mysqli_query($conn, $sql)){
		echo 'Xóa dữ liệu không thành công!';
	}
}
?>