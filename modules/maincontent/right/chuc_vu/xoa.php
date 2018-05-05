<?php 
include("../../../../admin/config.php");
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = "delete from chuc_vu where id_chuc_vu =".$id;
	mysqli_query($conn, $sql);
}
?>