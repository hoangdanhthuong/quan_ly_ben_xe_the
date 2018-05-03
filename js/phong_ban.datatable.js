
$(document).ready(function() {
	$('#table_phong_ban').DataTable();
} );
// su kien nhan vao tao chat luong
$(document).on('keyup','#input_tao_phong_ban',function(){
	var phong_ban = $.trim($('#input_tao_phong_ban').val());
	
	$.ajax({
		url: 'modules/maincontent/right/phong_ban/xu_ly/them.php',
		method: 'POST',
		data: {phong_ban:phong_ban, check:'0'},
		beforeSend: function(){
		},
		success: function(data){
			$('#error_tao_phong_ban').text(data).css('color','red');
			if(phong_ban.length == 0){
				$('#error_tao_phong_ban').text('Bạn không được để trống.').css('color','red');
			}
		}
	})

});
$(document).on('click','#btn_tao_phong_ban', function(){
	var phong_ban = $.trim($('#input_tao_phong_ban').val());
	if(phong_ban.length>0){
		$.ajax({
			url: 'modules/maincontent/right/phong_ban/xu_ly/them.php',
			method: 'POST',
			data: {phong_ban:phong_ban},
			cache:false,
			beforeSend: function(){
				$('#btn_tao_phong_ban').text('Đang xử lý..');
			},
			success: function(data){
				if(data){
					$('#error_tao_phong_ban').text(data).css('color','red');
				}else{
					window.location= 'index.php?quanly=phongban';
				}
			}

		});
	}
	
});
//xoa chat luong

$('#table_phong_ban').on('click','[id^="btn_xoa_phong_ban_"]', function(e){
	e.preventDefault();
	var id_phong_ban = $(this).attr('id').substring(18);
	$.ajax({
		url: 'modules/maincontent/right/phong_ban/xu_ly/xoa.php',
		method: 'POST',
		data: {id_phong_ban: id_phong_ban},
		cache: false,
		beforeSend: function(){

		},
		success: function(data){
			$('#table_phong_ban').find('#row_'+id_phong_ban).remove();
		}
	});
});

