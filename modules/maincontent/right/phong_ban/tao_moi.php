<?php
include("error.php");
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST['name_them'])&&!empty($_POST['name_them'])&&$i==0){
	$name = $_POST['name_them'];
	$sql = "insert into phong_ban(ten_phong_ban) values ('".$name."')";
	mysqli_query($conn, $sql);
}elseif(empty($_POST['name_them'])){
	echo "Tên phòng ban không được để trống.";
}
?>