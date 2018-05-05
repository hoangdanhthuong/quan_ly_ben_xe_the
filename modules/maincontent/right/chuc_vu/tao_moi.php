<?php
include("error.php");
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST['name_them'])&&!empty($_POST['name_them'])&&$i==0){
	$name = $_POST['name_them'];
	$sql = "insert into chuc_vu(ten_chuc_vu) values ('".$name."')";
	mysqli_query($conn, $sql);
}elseif(empty($_POST['name_them'])){
	echo "Tên chức vụ không được để trống.";
}
?>