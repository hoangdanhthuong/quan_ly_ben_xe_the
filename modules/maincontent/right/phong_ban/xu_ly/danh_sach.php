<?php
include('../../../../../admin/config.php');
$sql="select *from phong_ban";
$result = mysqli_query($conn, $sql);
$row[] = mysqli_fetch_assoc($result) ;

echo json_encode($result);
?>