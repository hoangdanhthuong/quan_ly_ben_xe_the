<?php
include('../../../../admin/config.php');
$i=0;
if(isset($_POST['chuc_vu_sua'])){
	$name = $_POST['chuc_vu_sua'];
	$sql = "select * from chuc_vu where ten_chuc_vu ='".$name."'";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		echo 'Câu truy vấn lỗi!'; 
	}elseif(mysqli_num_rows($result)>0){
		echo 'Đã tồn tại';
	}
}elseif(isset($_POST['name_them'])){
	$name = $_POST['name_them'];
	$sql = "select * from chuc_vu where ten_chuc_vu ='".$name."'";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		echo 'Câu truy vấn lỗi!'; 
	}elseif(mysqli_num_rows($result)>0){
		echo 'Đã tồn tại';
		$i=1;
	}
}
?>