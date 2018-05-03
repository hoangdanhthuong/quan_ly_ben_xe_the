<?php
include('../../../../../admin/config.php');
if(isset($_POST['id_phong_ban'])){
	$id = $_POST['id_phong_ban'];
	$sql = 'delete from phong_ban where id_phong_ban = '.$id;
	if(!mysqli_query($conn, $sql)){
		echo 'Xóa dữ liệu không thành công!';
	}
}
?>