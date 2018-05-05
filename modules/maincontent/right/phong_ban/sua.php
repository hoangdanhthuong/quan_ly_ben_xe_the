<?php
include('../../../../admin/config.php');
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST['ten'])&&!empty($_POST['ten'])&&isset($_POST['id'])){
	$ten =$_POST['ten'];
	$sql = "update phong_ban set ten_phong_ban = '".$ten."' where id_phong_ban =".$_POST['id'];
	if(!mysqli_query($conn, $sql)){
		echo 'Thêm không thành công!';
	}
}else{
	echo  'Bạn không được để trống!';
}
?>