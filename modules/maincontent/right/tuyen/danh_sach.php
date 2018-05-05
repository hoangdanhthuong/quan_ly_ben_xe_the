<?php
include('admin/config.php');
$sql="select *from tuyen";
$result = mysqli_query($conn, $sql);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Chi tiết tuyến</h2>    
		</div>
		<div class="row" id="btn_them">
			<h2><a href="" class="btn btn-primary col-md-2" data-toggle = "modal" data-target = '#them_tuyen'>Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered text-center" id="table_tuyen" class="display">
			<thead class="text-center bg-primary" >
				<tr>
					<th class="col-md-1 text-center" rowspan="2" style="vertical-align: middle;">ID</th>
					<th class="col-md-3 text-center" rowspan="2" style="vertical-align: middle;">Địa điểm 1</th>
					<th class="col-md-3 text-center" rowspan="2" style="vertical-align: middle;">Địa điểm 2</th>
					<th class="col-md-1 text-center" rowspan="2" style="vertical-align: middle;">Độ dài</th>
					<th class="col-md-2 text-center" colspan="2">Quản lý</th>
					
				</tr>
				<tr>
					<th class="col-md-2" >Sửa</th>
					<th class="col-md-2" >Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)){
					?>
					<tr id = "<?php echo $row['id_tuyen']?>">
						<td><?php echo $row['id_tuyen']?></td>
						<td class="text-left"><?php echo $row['dia_diem_1']?></td>
						<td class="text-left"><?php echo $row['dia_diem_2']?></td>
						<td class="text-center"><?php echo $row['do_dai']?></td>
						<td><a href="" data-toggle = "modal" data-target = "#sua_tuyen" class="sua_tuyen">Sửa</a></td>
						<td><a href="javascript: void(0)" id="btn_xoa_tuyen">Xóa</a></td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
		<!-- Modal -->
		<div class="modal fade" id="them_tuyen" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Tạo mới tuyến</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_tao_dia_diem_1">Địa điểm 1: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_tao_dia_diem_1" placeholder="Nhập địa điểm 1.." name="input_tao_dia_diem_1">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_dia_diem_1"></p>
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_tao_dia_diem_2">Địa điểm 2: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_tao_dia_diem_2" placeholder="Nhập địa điểm 2.." name="input_tao_dia_diem_2">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_tao_dia_diem_2"></p>
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_tao_do_dai">Độ dài: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_tao_do_dai" placeholder="Nhập độ dài.." name="input_tao_do_dai">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_tao_do_dai"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a  href="javascript: void(0)" class="col-sm-offset-4 btn btn-info col-md-4"  id="btn_tao_tuyen_">Sửa</a>
								</div>
							</div>
						</form>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal sua -->
		<div class="modal fade" id="sua_tuyen" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Sửa tuyến</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_sua_dia_diem_1">Địa điểm 1: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_sua_dia_diem_1" placeholder="Nhập địa điểm 1.." name="input_sua_dia_diem_1">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_sua_dia_diem_1"></p>
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_sua_dia_diem_2">Địa điểm 2: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_sua_dia_diem_2" placeholder="Nhập địa điểm 2.." name="input_sua_dia_diem_2">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_sua_dia_diem_2"></p>
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_sua_do_dai">Độ dài: </label>
								<div class="col-sm-8">          
									<input type="number" class="form-control" id="input_sua_do_dai" placeholder="Nhập độ dài.." name="input_sua_do_dai">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_sua_do_dai"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a  href="javascript: void(0)" class="col-sm-offset-4 btn btn-info col-md-4"  id="btn_sua_tuyen_">Sửa</a>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>