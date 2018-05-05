<?php
include('../../../../admin/config.php');
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST['quanlity'])){
	$quanlity = $_POST['quanlity'];
	if(isset($_POST['check'])){
		$sql = "select *from chat_luong where chat_luong ='".$quanlity."'";
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
		$sql = "select *from chat_luong where chat_luong ='".$quanlity."'";
		$result = mysqli_query($conn, $sql);
		if($result){
			if(mysqli_num_rows($result)>0){
				echo "Đã tồn tại";
			}else{
				$sql = "INSERT INTO chat_luong(chat_luong) VALUES ('".$quanlity."')";
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