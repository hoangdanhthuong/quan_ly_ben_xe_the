<?php
include('admin/config.php');
$sql="select *from chuc_vu";
$result = mysqli_query($conn, $sql);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Chức vụ</h2>    
		</div>
		<div class="row" id="btn_them">
			<h2><a href="index.php?quanly=chucvu&ac=them" class="btn btn-primary col-md-2">Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered" id="table_chuc_vu" class="display">
			<thead >
				<tr>
					<th class="text-center col-md-1">Mã chức vụ</th>
					<th class="text-center col-md-7">Tên chức vụ</th>
					<th class="text-center col-md-2">Quản lý</th>
					<th class="col-md-2"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><?php echo $row['id_chuc_vu']?></td>
						<td><?php echo $row['ten_chuc_vu']?></td>
						<td><a href="index.php?quanly=luong&ac=sua&id=<?php echo $row['id_chuc_vu']?>">Sửa</a></td>
						<td><a href="javascript: void(0)" id="btn_xoa_chuc_vu<?php echo $row['id_chuc_vu']?>">Xóa</a></td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
	</div>
</div>