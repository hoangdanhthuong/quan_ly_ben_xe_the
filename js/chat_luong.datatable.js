
$(document).ready(function() {
	$('#table_chat_luong').DataTable();

} );
$(document).on('click', '#btn_sua_chat_luong', function(){
	$('#input_sua_chat_luong').val($(this).closest('tr').find('td:eq(1)').text());
	$('#sua_chat_luong').find('a').attr('id', 'btn_sua_chat_luong_'+$(this).closest('tr').find('td:eq(0)').text());
});
// su kien nhan vao tao chat luong
$(document).on('keyup','#input_tao_chat_luong',function(){
	var quanlity = $.trim($('#input_tao_chat_luong').val());
	
	$.ajax({
		url: 'modules/maincontent/right/chat_luong/tao_moi.php',
		method: 'POST',
		data: {quanlity:quanlity, check:'0'},
		beforeSend: function(){
		},
		success: function(data){
			$('#error_tao_chat_luong').text(data).css('color','red');
			if(quanlity.length == 0){
				$('#error_tao_chat_luong').text('Bạn không được để trống.').css('color','red');
			}
		}
	})
});
$(document).on('click','#btn_tao_chat_luong', function(){
	var quanlity = $.trim($('#input_tao_chat_luong').val());
	if(quanlity.length>0){
		$.ajax({
			url: 'modules/maincontent/right/chat_luong/tao_moi.php',
			method: 'POST',
			data: {quanlity:quanlity},
			cache:false,
			beforeSend: function(){
				$('#btn_tao_chat_luong').text('Đang xử lý..');
			},
			success: function(data){
				if(data){
					$('#error_tao_chat_luong').text(data).css('color','red');
				}else{
					window.location= 'index.php?quanly=chatluong';
				}
			}

		});
	}
	
});
//xoa chat luong

$('#table_chat_luong').on('click','[id^="btn_xoa_chat_luong_"]', function(e){
	e.preventDefault();
	var id_chat_luong = $(this).attr('id').substring(19);
	$.ajax({
		url: 'modules/maincontent/right/chat_luong/xoa.php',
		method: 'POST',
		data: {id_quanlity: id_chat_luong},
		cache: false,
		beforeSend: function(){

		},
		success: function(data){
			if(data){
				alert(data);
			}else{
				$('#table_chat_luong').find('#row_'+id_chat_luong).remove();
			}
			
		}
	});
});

$(document).on('click','[id^="btn_sua_chat_luong_"]', function(e){
	e.preventDefault();
	var id_chat_luong = $(this).attr('id').substring(19);
	var quanlity = $.trim($('#input_sua_chat_luong').val());
	$.ajax({
		url: 'modules/maincontent/right/chat_luong/sua.php',
		method: 'POST',
		data: {id_quanlity: id_chat_luong, quanlity: quanlity},
		cache: false,
		beforeSend: function(){

		},
		success: function(data){
			if(data){
				alert(data);
			}else
			window.location = 'index.php?quanly=chatluong';
		}
	});
});