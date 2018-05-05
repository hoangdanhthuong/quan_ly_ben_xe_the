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
			<h2><a href="" class="btn btn-primary col-md-2" data-toggle = "modal" data-target = '#them_chuc_vu'>Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered text-center" id="table_chuc_vu" class="display">
			<thead class="bg-primary">
				<tr>
					<th class="text-center col-md-1" rowspan="2" style="vertical-align: middle;">Mã chức vụ</th>
					<th class="text-center col-md-7" rowspan="2" style="vertical-align: middle;">Tên chức vụ</th>
					<th class="text-center col-md-2" colspan="2">Quản lý</th>
				</tr>
				<tr>
					<th class="text-center col-md-2">Sửa</th>
					<th class="col-md-2 text-center">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)){
					?>
					<tr id = "<?php echo $row['id_chuc_vu']?>">
						<td><?php echo $row['id_chuc_vu']?></td>
						<td class="text-left"><?php echo $row['ten_chuc_vu']?></td>
						<td><a href="" data-toggle = "modal" data-target = "#sua_chuc_vu" class="sua_chuc_vu "><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="javascript: void(0)" id="btn_xoa_chuc_vu" ><i class="glyphicon glyphicon-trash"></i></a></td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
		<!-- Modal -->
		<div class="modal fade" id="them_chuc_vu" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Tạo mới chức vụ</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_tao_chuc_vu">Tên chức vụ: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_tao_chuc_vu" placeholder="Nhập chức vụ.." name="input_tao_chuc_vu">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_tao_chuc_vu"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a href="javascript:void(0)" class="col-sm-offset-4 btn btn-info col-md-4" id="btn_tao_chuc_vu">Tạo</a>
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
		<div class="modal fade" id="sua_chuc_vu" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Sửa chức vụ</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_sua_chuc_vu">Tên chức vụ: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_sua_chuc_vu" placeholder="Nhập chức vụ.." name="input_sua_chuc_vu">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_sua_chuc_vu"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a  href="javascript: void(0)" class="col-sm-offset-4 btn btn-info col-md-4"  id="btn_sua_chuc_vu_">Sửa</a>
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