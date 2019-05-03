<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['username'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    require_once '../admin/classes/DB.php';

    // Kết nối database
$db = new DB();
$db->connect();
$db->set_char('utf8');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = $_POST['username'];
    $password   = md5($_POST['pass']);
    $email      = $_POST['email'];
    $name   =  $_POST['name'];
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$name  )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    $sql = "SELECT username FROM accounts WHERE username='$username'";

    if ($db->num_rows($sql) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Lưu thông tin thành viên vào bảng
    $sql = "INSERT INTO accounts(username, password, email ,display_name) VALUES ('$username','$password','$email','$name')";
    $db->query($sql);
                          
    //Thông báo quá trình lưu
    $sql = "SELECT username FROM accounts WHERE username='$username'";
    if ($db->num_rows($sql) > 0)
        echo "Quá trình đăng ký thành công. <a href='http://localhost/blogWebsite/'>Travling Blog</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Try again</a>";
?>