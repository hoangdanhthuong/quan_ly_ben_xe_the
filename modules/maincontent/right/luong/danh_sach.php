<?php
include('admin/config.php');
$sql="select *from luong";
$result = mysqli_query($conn, $sql);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Lương</h2>    
		</div>
		<div class="row" id="btn_them">
			<h2><a href="index.php?quanly=luong&ac=them" class="btn btn-primary col-md-2">Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered" id="table_luong" class="display">
			<thead >
				<tr>
					<th class="text-center col-md-1">Mã lương</th>
					<th class="text-center col-md-7">Hệ số lương</th>
					<th class="text-center col-md-2">Quản lý</th>
					<th class="col-md-2"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><?php echo $row['id_luong']?></td>
						<td><?php echo $row['he_so_luong']?></td>
						<td><a href="index.php?quanly=luong&ac=sua&id=<?php echo $row['id_luong']?>">Sửa</a></td>
						<td><a href="javascript: void(0)" id="btn_xoa_luong<?php echo $row['id_luong']?>">Xóa</a></td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
	</div>
</div>