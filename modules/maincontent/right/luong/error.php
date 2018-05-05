<?php
include('../../../../admin/config.php');
$i=0;
if(isset($_POST['luong_sua'])){
	$name = $_POST['luong_sua'];
	$sql = "select * from luong where he_so_luong ='".$name."'";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		echo 'Câu truy vấn lỗi!'; 
	}elseif(mysqli_num_rows($result)>0){
		echo 'Đã tồn tại';
	}
}elseif(isset($_POST['name_them'])){
	$name = $_POST['name_them'];
	$sql = "select * from luong where he_so_luong ='".$name."'";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		echo 'Câu truy vấn lỗi!'; 
	}elseif(mysqli_num_rows($result)>0){
		echo 'Đã tồn tại';
		$i=1;
	}
}
?>