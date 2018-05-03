<?php
include('../../admin/config.php');
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$sql = "select ten_dang_nhap from nhan_vien where ten_dang_nhap = '".$username."'";
	$result = mysqli_query($conn,$sql);
	if($result){
		if(mysqli_num_rows($result)>0){
			echo 2;
		}else{
			echo 1;
		}
	}else{
		echo 3;
	}
}
?>