<?php

// Kết nối database và thông tin chung
require_once 'core/init.php';

// Nếu có tồn tại phương thức post
if (isset($_POST['user_signin']) && isset($_POST['pass_signin']))
{
	// Xử lý các giá trị 
	$user_signin = trim(htmlspecialchars(addslashes($_POST['user_signin'])));
	$pass_signin = trim(htmlspecialchars(addslashes($_POST['pass_signin'])));

	// Các biến xử lý thông báo
	$show_alert = '<script>$("#formSignin .alert").removeClass("hidden");</script>';
	$hide_alert = '<script>$("#formSignin .alert").addClass("hidden");</script>';
	$success = '<script>$("#formSignin .alert").attr("class", "alert alert-success");</script>';

	// Nếu giá trị rỗng
	if ($user_signin == '' || $pass_signin == '')
	{
		echo $show_alert.'Please fill in all fields!';
	}
	// Ngược lại
	else
	{
		$sql_check_user_exist = "SELECT username FROM accounts WHERE username = '$user_signin'";
		// Nếu tồn tại username
		if ($db->num_rows($sql_check_user_exist))
		{
			$pass_signin = md5($pass_signin);
			$sql_check_signin = "SELECT username, password FROM accounts WHERE username = '$user_signin' AND password = '$pass_signin'";
			if ($db->num_rows($sql_check_signin))
			{
				$sql_check_stt = "SELECT username, password, status FROM accounts WHERE username = '$user_signin' AND password = '$pass_signin' AND status = '0'";
				// Nếu username và password khớp và tài khoản không bị khoá (status = 0)
				if ($db->num_rows($sql_check_stt))
				{
					// Lưu session
					$session->send($user_signin);
					$db->close(); // Giải phóng
					
					echo $show_alert.$success.'Login successfully!';
					new Redirect($_DOMAIN); // Trở về trang index
				}
				else
				{
					echo $show_alert.'Your account has been disabled. Please see your Administrator!';
				}
			}
			else
			{
				echo $show_alert.'Incorrect password! Back to <a href = "http://web.net:8080/"> Home page</a>';
			}
		}
		// Ngược lại không tồn tại username
		else
		{
			echo $show_alert.'Username does not exist!';
		}
	}
}
// Ngược lại không tồn tại phương thức post
else
{
	new Redirect($_DOMAIN); // Trở về trang index
}

?>