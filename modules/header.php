<div class="jumbotron ">
	<div class="container text-center bg-primary" >
		<div class="row" >
			<div class="col-md-10">
				<h2>Quản lý bến xe </h2>
			</div>
			<div class="col-md-2">
				<div style="height: 50px">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"><img src="image/avatar.jpg" width="30px" height="30px" class="img-circle"> &nbsp;<span style="color: white; font-size: 16px" "><?php session_start(); if(isset($_SESSION['dang_nhap_quan_ly_ben_xe']))echo $_SESSION['dang_nhap_quan_ly_ben_xe']['ten_dang_nhap']; ?></span>
							<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
								<li role="presentation"><a id="dang_xuat" href="modules/xu_ly/logout.php"><span style="color: black; font-size: 16px" ">Đăng xuất</span></a></li>
							</ul>
						</div>
						

					</div>
				</div>
			</div>
			
		</div>
	</div>