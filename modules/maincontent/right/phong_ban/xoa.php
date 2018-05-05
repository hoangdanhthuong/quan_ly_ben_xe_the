<?php 
include("../../../../admin/config.php");
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = "delete from phong_ban where id_phong_ban =".$id;
	mysqli_query($conn, $sql);
}
?>