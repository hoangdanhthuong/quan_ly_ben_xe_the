$(document).ready(function() {
	$('#table_luong').DataTable();
	$(document).on('click','.sua_luong', function(){
		var id = $(this).closest('tr').find('td:eq(0)').text();
		var luong = $(this).closest('tr').find('td:eq(1)').text();
		$('#input_sua_luong').val(luong);
		$('[id^="btn_sua_luong_"]').attr('id',"btn_sua_luong_" + id);
	});
	$(document).on('keyup','#input_sua_luong',function(){
		var luong = $.trim($(this).val());
		if(luong.length == 0){
			$('#error_sua_luong').text('Tên hệ số lương không được để trống.').css('color','red');
			$('[id^="btn_sua_luong_"]').css('pointer-events', 'none');
		}else{
			$.ajax({
				url: 'modules/maincontent/right/luong/error.php',
				method: "POST",
				data:{luong_sua:luong},
				cache: false,
				success: function(data){
					if(data){
						$('#error_sua_luong').text(data).css('color','red');
						$('[id^="btn_sua_luong_"]').css('pointer-events', 'none');
					}else{
						$('#error_sua_luong').text('Có thể sử dụng.').css('color','red');

						$('[id^="btn_sua_luong_"]').css('pointer-events', 'auto');
					}
				}

			});
		}

	});
	$(document).on('keyup','#input_tao_luong',function(){
		var luong = $.trim($(this).val());
		if(luong.length == 0){
			$('#error_tao_luong').text('Hệ số lương không được để trống.').css('color','red');
			$('#btn_tao_luong').css('pointer-events', 'none');
		}else{
			$.ajax({
				url: 'modules/maincontent/right/luong/error.php',
				method: "POST",
				data:{name_them:luong},
				cache: false,
				success: function(data){
					if(data){
						$('#error_tao_luong').text(data).css('color','red');
						$('#btn_tao_luong').css('pointer-events', 'none');
					}else{
						$('#error_tao_luong').text('Có thể sử dụng.').css('color','red');
						$('#btn_tao_luong').css('pointer-events', 'auto');
					}
				}

			});
		}
	});
	$(document).on('click','[id^="btn_sua_luong_"]',function(){
		var id = $(this).attr('id').substring(14);
		var luong = $.trim($('#input_sua_luong').val());
		$.ajax({
			url: 'modules/maincontent/right/luong/sua.php',
			method: 'POST',
			cache:false,
			data: {ten: luong,id:id},
			beforeSend: function(){

			},
			success: function(data){
				if(data){
					alert(data);
				}else
				window.location = 'index.php?quanly=luong';
			}
		});
	});
	$(document).on('click', "#btn_tao_luong", function(){
		var name = $.trim($("#input_tao_luong").val());
		$.ajax({
			url: "modules/maincontent/right/luong/tao_moi.php",
			method: "POST",
			cache: false,
			data: {name_them: name},
			beforeSend: function(){
				$(this).text("Đang xử lý..");
			},
			success: function(data){
				if(data){
					alert(data);	
				}else{
					window.location = 'index.php?quanly=luong';
				}

			}

		});
	});
	$(document).on('click',"#btn_xoa_luong", function(){
		if(confirm("Bạn có chắc chắn xóa?")){
			var id = $(this).closest('tr').find('td:eq(0)').text();

			$.ajax({
				url: "modules/maincontent/right/luong/xoa.php",
				method: "POST",
				cache: false,
				data: {id:id},
				success:function(){
					$('#'+id).closest("tr").remove();
				}
			});	
		}
	});
	$(document).on('wheel','input[type=number]', function(e){
		$(this).blur();
	});
});
