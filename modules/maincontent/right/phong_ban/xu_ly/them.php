<?php
include('../../../../../admin/config.php');
if(isset($_POST['phong_ban'])){
	$phong_ban = $_POST['phong_ban'];
	if(isset($_POST['check'])){
		$sql = "select *from phong_ban where ten_phong_ban ='".$phong_ban."'";
		$result = mysqli_query($conn, $sql);
		if($result){
			if(mysqli_num_rows($result)>0){
				echo "Đã tồn tại";
			}else{
				echo "Có thể sử dụng.";
			}
		}else{
			echo "Câu truy vấn sai";
		}
	}
	else{
		$sql = "select *from phong_ban where ten_phong_ban ='".$phong_ban."'";
		$result = mysqli_query($conn, $sql);
		if($result){
			if(mysqli_num_rows($result)>0){
				echo "Đã tồn tại";
			}else{
				$sql = "INSERT INTO phong_ban(ten_phong_ban) VALUES ('".$phong_ban."')";
				if(!mysqli_query($conn, $sql)){
					echo 'Thêm không thành công.';
				}
			}
		}else{
			echo "Câu truy vấn sai";
		}
	}
	
}

?>