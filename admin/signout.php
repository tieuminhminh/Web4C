<?php

// Require database & thông tin chung
require_once 'core/init.php';

// Xoá session
$session->destroy();
echo "<script> window.confirm('Are you sure to logout?');</script>";
new Redirect($_DOMAIN); // Trở về trang index

?>