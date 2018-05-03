$(document).ready(function(){
	$(document).on('keyup','#username_login',function(){
		var username = $(this).val().trim();
		if(username.length<5){
			$('#error_username_login').text('Bạn phải nhập lớn hơn 5 chữ cái.').css('color','red');
		}else{
			$('#error_username_login').text('');
		}
	});
	$(document).on('keyup','#password_login',function(){
		var password = $(this).val().trim();
		if(password.length<5){
			$('#error_password_login').text('Bạn phải nhập lớn hơn 5 chữ cái.').css('color','red');
		}
		else{
			$('#error_password_login').text('');
		}
	});
	
});

$(document).on('click','#btn_login_admin',function(){
	var username = $.trim($('#username_login').val());
	var password = $.trim($('#password_login').val());
	if(username.length>5 && password.length>5){
		$.ajax({
			url: 'modules/xu_ly/login.php',
			method: 'POST',
			data: {username: username, password: password},
			cache:false,
			beforeSend:function(){
				$('#btn_login_admin').text('Đang xử lý..');
			}, 
			success: function(data){
				if(data == '3'){
					$('#error_login').text('Câu truy vấn lỗi: '+data).css('color','red');
					return false;
					
				}else if(data == '2'){
					$('#error_login').text('Đăng nhập không thành công!').css('color','red');
					return false;				}else{
						window.location ='index.php';				
					}
				}
			});
	}else{
		if(username.length ==0){
			$('#error_username_login').text('Không được để trống').css('color','red');
		}
		if(password.length ==0){
			$('#error_password_login').text('Không được để trống').css('color','red');
		}
	}
});