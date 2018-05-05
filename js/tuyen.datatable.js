$(document).ready(function() {
	$('#table_tuyen').DataTable();
	// $(document).on('click','.sua_tuyen', function(){
	// 	var id = $(this).closest('tr').find('td:eq(0)').text();
	// 	var tuyen = $(this).closest('tr').find('td:eq(1)').text();
	// 	$('#input_sua_tuyen').val(tuyen);
	// 	$('[id^="btn_sua_tuyen_"]').attr('id',"btn_sua_tuyen_" + id);
	// });
	$(document).on('keyup','#input_sua_dia_diem_1',function(){
		check_input();
	});
	$(document).on('keyup','#input_sua_dia_diem_1',function(){
		check_input();
	});
	$(document).on('keyup','#input_sua_do_dai',function(){
		check_input();
	});
	// $(document).on('keyup','#input_tao_tuyen',function(){
	// 	var tuyen = $.trim($(this).val());
	// 	if(tuyen.length == 0){
	// 		$('#error_tao_tuyen').text('Tên phòng ban không được để trống.').css('color','red');
	// 		$('#btn_tao_tuyen').css('pointer-events', 'none');
	// 	}else{
	// 		$.ajax({
	// 			url: 'modules/maincontent/right/tuyen/error.php',
	// 			method: "POST",
	// 			data:{name_them:tuyen},
	// 			cache: false,
	// 			success: function(data){
	// 				if(data){
	// 					$('#error_tao_tuyen').text(data).css('color','red');
	// 					$('#btn_tao_tuyen').css('pointer-events', 'none');
	// 				}else{
	// 					$('#error_tao_tuyen').text('Có thể sử dụng.').css('color','red');
	// 					$('#btn_tao_tuyen').css('pointer-events', 'auto');
	// 				}
	// 			}

	// 		});
	// 	}
	// });
	// $(document).on('click','[id^="btn_sua_tuyen_"]',function(){
	// 	var id = $(this).attr('id').substring(18);
	// 	var tuyen = $.trim($('#input_sua_tuyen').val());
	// 	$.ajax({
	// 		url: 'modules/maincontent/right/tuyen/sua.php',
	// 		method: 'POST',
	// 		cache:false,
	// 		data: {ten: tuyen,id:id},
	// 		beforeSend: function(){

	// 		},
	// 		success: function(data){
	// 			if(data){
	// 				alert(data);
	// 			}else
	// 			window.location = 'index.php?quanly=phongban';
	// 		}
	// 	});
	// });
	// $(document).on('click', "#btn_tao_tuyen", function(){
	// 	var name = $.trim($("#input_tao_tuyen").val());
	// 	$.ajax({
	// 		url: "modules/maincontent/right/tuyen/tao_moi.php",
	// 		method: "POST",
	// 		cache: false,
	// 		data: {name_them: name},
	// 		beforeSend: function(){
	// 			$(this).text("Đang xử lý..");
	// 		},
	// 		success: function(data){
	// 			if(data){
	// 				alert(data);	
	// 			}else{
	// 				window.location = 'index.php?quanly=phongban';
	// 			}

	// 		}

	// 	});
	// });
	// $(document).on('click',"#btn_xoa_tuyen", function(){
	// 	var id = $(this).closest('tr').find('td:eq(0)').text();
	// 	$.ajax({
	// 		url: "modules/maincontent/right/tuyen/xoa.php",
	// 		method: "POST",
	// 		cache: false,
	// 		data: {id:id},
	// 		success:function(){
	// 			$('#'+id).closest("tr").remove();
	// 		}
	// 	});
	// });
});
function check_input(){
	var diem_1 = $.trim($("#input_sua_dia_diem_1").val());
	var diem_2 = $.trim($("#input_sua_dia_diem_2").val());
	var do_dai = $.trim($("#input_sua_do_dai").val());
	if(diem_1.length == 0){
		$('#error_sua_dia_diem_1').text('Tên địa điểm 1 không được để trống.').css('color','red');
		$('[id^="btn_sua_tuyen_"]').css('pointer-events', 'none');
	}else if(diem_2.length ==0){
		$('#error_sua_dia_diem_2').text('Tên địa điểm 2 không được để trống.').css('color','red');
		$('[id^="btn_sua_tuyen_"]').css('pointer-events', 'none');
	}else if(parseFloat(do_dai)==0||do_dai.length==0){
		$('#error_sua_do_dai').text('Độ dài phải lớn hơn 0.').css('color','red');
		$('[id^="btn_sua_tuyen_"]').css('pointer-events', 'none');
	}else{
		$.ajax({
			url: 'modules/maincontent/right/tuyen/error.php',
			method: "POST",
			data:{diem_1:diem_1,diem_2:diem_2,do_dai:do_dai},
			cache: false,
			success: function(data){
				if(data){
					$('#error_sua_tuyen').text(data).css('color','red');
					$('[id^="btn_sua_tuyen_"]').css('pointer-events', 'none');
				}else{
					$('#error_sua_tuyen').text('Có thể sử dụng.').css('color','red');

					$('[id^="btn_sua_tuyen_"]').css('pointer-events', 'auto');
				}
			}

		});
	}
};
$(document).on("wheel", "input[type=number]", function (e){
	$(this).blur();
})