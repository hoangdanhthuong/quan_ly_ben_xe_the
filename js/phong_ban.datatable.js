$(document).ready(function() {
	$('#table_phong_ban').DataTable();
	$(document).on('click','.sua_phong_ban', function(){
		var id = $(this).closest('tr').find('td:eq(0)').text();
		var phong_ban = $(this).closest('tr').find('td:eq(1)').text();
		$('#input_sua_phong_ban').val(phong_ban);
		$('[id^="btn_sua_phong_ban_"]').attr('id',"btn_sua_phong_ban_" + id);
	});
	$(document).on('keyup','#input_sua_phong_ban',function(){
		var phong_ban = $.trim($(this).val());
		if(phong_ban.length == 0){
			$('#error_sua_phong_ban').text('Tên phòng ban không được để trống.').css('color','red');
			$('[id^="btn_sua_phong_ban_"]').css('pointer-events', 'none');
		}else{
			$.ajax({
				url: 'modules/maincontent/right/phong_ban/error.php',
				method: "POST",
				data:{phong_ban_sua:phong_ban},
				cache: false,
				success: function(data){
					if(data){
						$('#error_sua_phong_ban').text(data).css('color','red');
						$('[id^="btn_sua_phong_ban_"]').css('pointer-events', 'none');
					}else{
						$('#error_sua_phong_ban').text('Có thể sử dụng.').css('color','red');

						$('[id^="btn_sua_phong_ban_"]').css('pointer-events', 'auto');
					}
				}

			});
		}

	});
	$(document).on('keyup','#input_tao_phong_ban',function(){
		var phong_ban = $.trim($(this).val());
		if(phong_ban.length == 0){
			$('#error_tao_phong_ban').text('Tên phòng ban không được để trống.').css('color','red');
			$('#btn_tao_phong_ban').css('pointer-events', 'none');
		}else{
			$.ajax({
				url: 'modules/maincontent/right/phong_ban/error.php',
				method: "POST",
				data:{name_them:phong_ban},
				cache: false,
				success: function(data){
					if(data){
						$('#error_tao_phong_ban').text(data).css('color','red');
						$('#btn_tao_phong_ban').css('pointer-events', 'none');
					}else{
						$('#error_tao_phong_ban').text('Có thể sử dụng.').css('color','red');
						$('#btn_tao_phong_ban').css('pointer-events', 'auto');
					}
				}

			});
		}
	});
	$(document).on('click','[id^="btn_sua_phong_ban_"]',function(){
		var id = $(this).attr('id').substring(18);
		var phong_ban = $.trim($('#input_sua_phong_ban').val());
		$.ajax({
			url: 'modules/maincontent/right/phong_ban/sua.php',
			method: 'POST',
			cache:false,
			data: {ten: phong_ban,id:id},
			beforeSend: function(){

			},
			success: function(data){
				if(data){
					alert(data);
				}else
				window.location = 'index.php?quanly=phongban';
			}
		});
	});
	$(document).on('click', "#btn_tao_phong_ban", function(){
		var name = $.trim($("#input_tao_phong_ban").val());
		$.ajax({
			url: "modules/maincontent/right/phong_ban/tao_moi.php",
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
					window.location = 'index.php?quanly=phongban';
				}

			}

		});
	});
	$(document).on('click',"#btn_xoa_phong_ban", function(){
		if(confirm("Bạn có chắc chắn xóa?")){
			var id = $(this).closest('tr').find('td:eq(0)').text();
			$.ajax({
				url: "modules/maincontent/right/phong_ban/xoa.php",
				method: "POST",
				cache: false,
				data: {id:id},
				success:function(){
					$('#'+id).closest("tr").remove();
				}
			});
		}
	});
});
