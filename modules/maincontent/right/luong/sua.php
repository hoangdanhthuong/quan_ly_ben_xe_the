<?php
include('../../../../admin/config.php');
if(isset($_POST['ten'])&&!empty($_POST['ten'])&&isset($_POST['id'])){
	$ten =$_POST['ten'];
	$sql = "update luong set he_so_luong = '".$ten."' where id_luong =".$_POST['id'];
	if(!mysqli_query($conn, $sql)){
		echo 'Thêm không thành công!';
	}
}else{
	echo  'Bạn không được để trống!';
}
?>