<?php
include('admin/config.php');
$id=$_GET['ac'];
$sql="select *from phong_ban where id_phong_ban = ".$id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success " id="sua_phong_ban">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Sửa phòng ban</h2>    
		</div>
		<div class="form_sua">
			<div class="row ">
				<form class="form-inline col-md-8 col-md-offset-2" action="">
					<div class="form-group">
						<label for='ten_phong_ban'>Nhập tên phòng ban:</label>
						<input type="text" name="" id="ten_phong_ban" value="<?php echo $row['ten_phong_ban'];?>" class="form-control">
					</div>
					<div class="form-group">
						<a id="btn_sua_phong_ban_<?php echo $id?>" class = 'btn btn-primary'  href="javascript:void(0)"> Sửa</a>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>