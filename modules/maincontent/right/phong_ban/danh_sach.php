<?php
include('admin/config.php');
$sql="select *from phong_ban";
$result = mysqli_query($conn, $sql);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Chi tiết phòng ban</h2>    
		</div>
		<div class="row" id="btn_them">
			<h2><a href="" class="btn btn-primary col-md-2" data-toggle = "modal" data-target = '#them_phong_ban'>Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered text-center" id="table_phong_ban" class="display">
			<thead class="text-center bg-primary" >
				<tr>
					<th class="col-md-1 text-center" rowspan="2" style="vertical-align: middle;">ID</th>
					<th class="col-md-7 text-center" rowspan="2" style="vertical-align: middle;">Tên phòng ban</th>
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
					<tr id = "<?php echo $row['id_phong_ban']?>">
						<td><?php echo $row['id_phong_ban']?></td>
						<td class="text-left"><?php echo $row['ten_phong_ban']?></td>
						<td><a href="" data-toggle = "modal" data-target = "#sua_phong_ban" class="sua_phong_ban">Sửa</a></td>
						<td><a href="javascript: void(0)" id="btn_xoa_phong_ban">Xóa</a></td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
		<!-- Modal -->
		<div class="modal fade" id="them_phong_ban" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Tạo mới phòng ban</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_tao_phong_ban">Tên phòng ban: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_tao_phong_ban" placeholder="Nhập tên phòng ban.." name="input_tao_phong_ban">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_tao_phong_ban"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a href="javascript:void(0)" class="col-sm-offset-4 btn btn-info col-md-4" id="btn_tao_phong_ban">Tạo</a>
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
		<div class="modal fade" id="sua_phong_ban" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Sửa phòng ban</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_sua_phong_ban">Tên phòng ban: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_sua_phong_ban" placeholder="Nhập tên phòng ban.." name="input_sua_phong_ban">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_sua_phong_ban"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a  href="javascript: void(0)" class="col-sm-offset-4 btn btn-info col-md-4"  id="btn_sua_phong_ban_">Sửa</a>
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