<?php
include("error.php");
if(isset($_POST['name_them'])&&!empty($_POST['name_them'])&&$i==0){
	$name = $_POST['name_them'];
	$sql = "insert into luong(he_so_luong) values ('".$name."')";
	mysqli_query($conn, $sql);
}elseif(empty($_POST['name_them'])){
	echo "Hệ số lương không được để trống.";
}
?>