<?php
include('admin/config.php');
$sql="select *from luong";
$result = mysqli_query($conn, $sql);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Chi tiết lương</h2>    
		</div>
		<div class="row" id="btn_them">
			<h2><a href="" class="btn btn-primary col-md-2" data-toggle = "modal" data-target = '#them_luong'>Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered text-center" id="table_luong" class="display">
			<thead class="text-center bg-primary" >
				<tr>
					<th class="col-md-1 text-center" rowspan="2" style="vertical-align: middle;">ID</th>
					<th class="col-md-7 text-center" rowspan="2" style="vertical-align: middle;">Hệ số lương</th>
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
					<tr id = "<?php echo $row['id_luong']?>">
						<td><?php echo $row['id_luong']?></td>
						<td><?php echo $row['he_so_luong']?></td>
						<td><a href="" data-toggle = "modal" data-target = "#sua_luong" class="sua_luong">Sửa</a></td>
						<td><a href="javascript: void(0)" id="btn_xoa_luong">Xóa</a></td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
		<!-- Modal -->
		<div class="modal fade" id="them_luong" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Tạo mới lương</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_tao_luong">Hệ số lương: </label>
								<div class="col-sm-8">          
									<input type="number" class="form-control" id="input_tao_luong" placeholder="Nhập hệ số lương.." name="input_tao_luong">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_tao_luong"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a href="javascript:void(0)" class="col-sm-offset-4 btn btn-info col-md-4" id="btn_tao_luong">Tạo</a>
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
		<div class="modal fade" id="sua_luong" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Sửa lương</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_sua_luong">Hệ số lương: </label>
								<div class="col-sm-8">          
									<input type="number" class="form-control" id="input_sua_luong" placeholder="Nhập hệ số lương.." name="input_sua_luong">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_sua_luong"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a  href="javascript: void(0)" class="col-sm-offset-4 btn btn-info col-md-4"  id="btn_sua_luong_">Sửa</a>
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