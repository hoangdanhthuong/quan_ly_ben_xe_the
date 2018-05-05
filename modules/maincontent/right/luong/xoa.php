<?php 
include("../../../../admin/config.php");
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = "delete from luong where id_luong =".$id;
	mysqli_query($conn, $sql);
}
?>