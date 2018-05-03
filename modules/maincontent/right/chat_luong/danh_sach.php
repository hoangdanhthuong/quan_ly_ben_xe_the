<?php
include('admin/config.php');
$sql="select *from chat_luong";
$result = mysqli_query($conn, $sql);
?>
<div class="col-md-10 ">
	<div class="container-fluid bg-success">
		<div id="tieu_de_quan_ly" class="row bg-primary">
			<h2 >Chất lượng xe</h2>    
		</div>
		<div class="row" id="btn_them">
			<h2><a data-toggle="modal" data-target = "#them_chat_luong" class="btn btn-primary col-md-2">Thêm</a></h2>      
		</div>
		<table class="table table-hover table-bordered" id="table_chat_luong" class="display">
			<thead >
				<tr>
					<th class="text-center col-md-1">Mã chất lượng</th>
					<th class="text-center col-md-7">Chất lượng</th>
					<th class="text-center col-md-2">Quản lý</th>
					<th class="col-md-2"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)){
					?>
					<tr id='row_<?php echo $row['id_chat_luong']?>'>
						<td><?php echo $row['id_chat_luong']?></td>
						<td><?php echo $row['chat_luong']?></td>
						<td><a href="" data-toggle = 'modal' data-target = '#sua_chat_luong' id='btn_sua_chat_luong' >Sửa</a>
						</td>

						<td>
							<a href="javascript:void(0)" id="btn_xoa_chat_luong_<?php echo $row['id_chat_luong']?>">Xóa</a>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
		<!-- Modal -->
		<div class="modal fade" id="them_chat_luong" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Tạo mới chất lượng</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_tao_chat_luong">Chất lượng: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_tao_chat_luong" placeholder="Nhập chất lượng.." name="input_tao_chat_luong">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_tao_chat_luong"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a class="col-sm-offset-4 btn btn-info col-md-4" id="btn_tao_chat_luong">Tạo</a>
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
		<div class="modal fade" id="sua_chat_luong" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title text-center">Sửa chất lượng</h2>
					</div>
					<div class="modal-body">

						<form class="form-horizontal" action="">
							<div class="form-group">
								<label class="control-label col-sm-3" for="input_sua_chat_luong">Chất lượng: </label>
								<div class="col-sm-8">          
									<input type="text" class="form-control" id="input_sua_chat_luong" placeholder="Nhập chất lượng.." name="input_sua_chat_luong">
								</div>
							</div>
							<p class="col-sm-offset-3" id="error_tao_chat_luong"></p>

							<div class="form-group">        
								<div class=" col-sm-12">
									<a class="col-sm-offset-4 btn btn-info col-md-4" >Sửa</a>
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