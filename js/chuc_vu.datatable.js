$(document).ready(function() {
	$('#table_chuc_vu').DataTable();
	$(document).on('click','.sua_chuc_vu', function(){
		var id = $(this).closest('tr').find('td:eq(0)').text();
		var chuc_vu = $(this).closest('tr').find('td:eq(1)').text();
		$('#input_sua_chuc_vu').val(chuc_vu);
		$('[id^="btn_sua_chuc_vu_"]').attr('id',"btn_sua_chuc_vu_" + id);
	});
	$(document).on('keyup','#input_sua_chuc_vu',function(){
		var chuc_vu = $.trim($(this).val());
		if(chuc_vu.length == 0){
			$('#error_sua_chuc_vu').text('Tên chức vụ không được để trống.').css('color','red');
			$('[id^="btn_sua_chuc_vu_"]').css('pointer-events', 'none');
		}else{
			$.ajax({
				url: 'modules/maincontent/right/chuc_vu/error.php',
				method: "POST",
				data:{chuc_vu_sua:chuc_vu},
				cache: false,
				success: function(data){
					if(data){
						$('#error_sua_chuc_vu').text(data).css('color','red');
						$('[id^="btn_sua_chuc_vu_"]').css('pointer-events', 'none');
					}else{
						$('#error_sua_chuc_vu').text('Có thể sử dụng.').css('color','red');

						$('[id^="btn_sua_chuc_vu_"]').css('pointer-events', 'auto');
					}
				}

			});
		}
		
	});
	$(document).on('keyup','#input_tao_chuc_vu',function(){
		var chuc_vu = $.trim($(this).val());
		if(chuc_vu.length == 0){
			$('#error_tao_chuc_vu').text('Tên chức vụ không được để trống.').css('color','red');
			$('#btn_tao_chuc_vu').css('pointer-events', 'none');
		}else{
			$.ajax({
				url: 'modules/maincontent/right/chuc_vu/error.php',
				method: "POST",
				data:{name_them:chuc_vu},
				cache: false,
				success: function(data){
					if(data){
						$('#error_tao_chuc_vu').text(data).css('color','red');
						$('#btn_tao_chuc_vu').css('pointer-events', 'none');
					}else{
						$('#error_tao_chuc_vu').text('Có thể sử dụng.').css('color','red');
						$('#btn_tao_chuc_vu').css('pointer-events', 'auto');
					}
				}

			});
		}
	});
	$(document).on('click','[id^="btn_sua_chuc_vu_"]',function(){
		var id = $(this).attr('id').substring(16);
		var chuc_vu = $.trim($('#input_sua_chuc_vu').val());
		$.ajax({
			url: 'modules/maincontent/right/chuc_vu/sua.php',
			method: 'POST',
			cache:false,
			data: {ten: chuc_vu,id:id},
			beforeSend: function(){

			},
			success: function(data){
				if(data){
					alert(data);
				}else
				window.location = 'index.php?quanly=chucvu';
			}
		});
	});
	$(document).on('click', "#btn_tao_chuc_vu", function(){
		var name = $.trim($("#input_tao_chuc_vu").val());
		$.ajax({
			url: "modules/maincontent/right/chuc_vu/tao_moi.php",
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
					window.location = 'index.php?quanly=chucvu';
				}
				
			}

		});
	});
	$(document).on('click',"#btn_xoa_chuc_vu", function(){
		if(confirm("Bạn có chắc chắn xóa?")){
			var id = $(this).closest('tr').find('td:eq(0)').text();
			$.ajax({
				url: "modules/maincontent/right/chuc_vu/xoa.php",
				method: "POST",
				cache: false,
				data: {id:id},
				success:function(){
					$('#'+id).closest("tr").remove();
				}
			});
		}
	});
} );
