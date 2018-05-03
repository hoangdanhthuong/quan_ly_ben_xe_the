<?php
include('admin/config.php');
$sql="select *from phong_ban";
$result = mysqli_query($conn, $sql);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Phòng ban</h2>    
		</div>
		<div class="row" id="btn_them">
			<h2><a data-toggle="modal" data-target = "#btn_them_phong_ban" class="btn btn-primary col-md-2">Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered" id="table_phong_ban" class="display">
			<thead >
				<tr>
					<th class="text-center col-md-1">Mã phòng ban</th>
					<th class="text-center col-md-7">Tên phòng ban</th>
					<th class="text-center col-md-2">Quản lý</th>
					<th class="col-md-2"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)){
					?>
					<tr id="row_<?php echo $row['id_phong_ban'];?>">
						<td><?php echo $row['id_phong_ban']?></td>
						<td><?php echo $row['ten_phong_ban']?></td>
						<td><a href="index.php?quanly=phongban&ac=<?php echo $row['id_phong_ban'];?>" >Sửa</a>
						</td>

						<td >
							<a href="javascript:void(0)" id="btn_xoa_phong_ban_<?php echo $row['id_phong_ban']?>" >Xóa</a>
						</td>
					</tr>
					<?php
				}
				?>

			</tbody>
		</table>
		<!-- Modal -->
		
		<!-- Modal -->

	</div>
</div>
