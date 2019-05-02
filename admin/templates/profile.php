<?php

// Nếu đăng nhập
if ($user) 
{
	// URL ảnh đại diện tài khoản
	if ($data_user['url_avatar'] == '')
	{
		$data_user['url_avatar'] = $_DOMAIN.'images/profile.png';
	}
	else
	{
		$data_user['url_avatar'] = str_replace('admin/', '', $_DOMAIN).$data_user['url_avatar'];
	}

	// Form Upload ảnh đại diện
	echo 
	'
		<h3>Profile</h3>
		<div class="panel panel-default">
			<div class="panel-heading">Upload avata</div>
			<div class="panel-body">
				<form action="' . $_DOMAIN . 'profile.php" method="POST" onsubmit="return false;" id="formUpAvt" enctype="multipart/form-data">
					<div class="form-group box-current-img">
                        <p><strong>Ảnh hiện tại</strong></p>
                        <img src="' . $data_user['url_avatar'] . '" alt="avata of ' . $data_user['display_name'] . '" width="80" height="80">
                    </div>
					<div class="alert alert-info">Choose .jpg, .png, .gif file and small than 5MB.</div>
					<div class="form-group">
						<label>Choose</label>
						<input type="file" class="form-control" id="img_avt" name="img_avt" onchange="preUpAvt();">
					</div>
					<div class="form-group box-pre-img hidden">
                        <p><strong>Image Demo</strong></p>
                    </div>            
                    <div class="form-group hidden box-progress-bar">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"></div>
                        </div>
                    </div>
					<div class="form-group">
						<button class="btn btn-primary pull-left" type="submit">Upload</button>
						<a class="btn btn-danger pull-right" id="del_avt"><span class="glyphicon glyphicon-trash"></span> Delete</a>
					</div>
					<div class="clearfix"></div><br>
					<div class="alert alert-danger hidden"></div>
				</form>
			</div>
		</div>
	';

	// Form Cập nhật các thông tin còn lại
	echo 
	'
		<div class="panel panel-default">
			<div class="panel-heading">Edit Profile</div>
			<div class="panel-body">
				<form method="POST" onsubmit="return false;" id="formUpdateInfo">
					<div class="form-group">
						<label>Name *</label>
						<input type="text" class="form-control" id="dn_update" value="' . $data_user['display_name'] . '">
					</div>
					<div class="form-group">
						<label>Email *</label>
						<input type="text" class="form-control" id="email_update" value="' . $data_user['email'] . '">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					<div class="alert alert-danger hidden"></div>
				</form>
			</div>
		</div>
	';	
/** 
	// Form đổi mật khẩu
	echo 
	'
		<div class="panel panel-default">
			<div class="panel-heading">Đổi mật khẩu</div>
			<div class="panel-body">
				<form method="POST" id="formChangePw" onsubmit="return false;">
					<div class="form-group">
						<label>Mật khẩu cũ</label>
						<input type="password" class="form-control" id="old_pw_change">
					</div>
					<div class="form-group">
						<label>Mật khẩu mới</label>
						<input type="password" class="form-control" id="new_pw_change">
					</div>
					<div class="form-group">
						<label>Nhập lại mật khẩu mới</label>
						<input type="password" class="form-control" id="re_new_pw_change">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Lưu thay đổi</button>
					</div>
					<div class="alert alert-danger hidden"></div>
				</form>
			</div>
		</div>
	';
	*/	
}
// Ngược lại chưa đăng nhập
else
{
    new Redirect($_DOMAIN); // Trở về trang index
}

?>