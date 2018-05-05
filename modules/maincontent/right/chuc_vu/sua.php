<?php
include('../../../../admin/config.php');
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST['ten'])&&!empty($_POST['ten'])&&isset($_POST['id'])){
	$ten =$_POST['ten'];
	$sql = "update chuc_vu set ten_chuc_vu = '".$ten."' where id_chuc_vu =".$_POST['id'];
	if(!mysqli_query($conn, $sql)){
		echo 'Thêm không thành công!';
	}
}else{
	echo  'Bạn không được để trống!';
}
?>