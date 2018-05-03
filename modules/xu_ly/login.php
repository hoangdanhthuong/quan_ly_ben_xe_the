<?php
session_start();
include('../../admin/config.php');
if(isset($_POST['username'])&&isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select *from nhan_vien where ten_dang_nhap = '".$username."' and mat_khau = '".$password."'";
	$result = mysqli_query($conn,$sql);
	if($result){
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['dang_nhap_quan_ly_ben_xe']['ten_dang_nhap'] = $row['ten_dang_nhap'];
			$_SESSION['dang_nhap_quan_ly_ben_xe']['quyen_truy_cap'] = $row['quyen_truy_cap'];
			echo $_SESSION['dang_nhap_quan_ly_ben_xe']['quyen_truy_cap'];
		}else{

			echo 2;
		}
	}else{
		echo 3;
	}
}

?>