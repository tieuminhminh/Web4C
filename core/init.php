<?php

// Require các thư viện PHP
require_once 'admin/classes/Database.php';
require_once 'admin/classes/Session.php';
require_once 'admin/classes/Redirect.php';

// Kết nối database
$db = new Database();
$db->connect();
$db->set_char('utf8');

$_DOMAIN = 'http://web.net:8080/';
// Lấy thông tin website
$sql_get_data_web = "SELECT * FROM website";
if ($db->num_rows($sql_get_data_web)) {
	$data_web = $db->fetch_assoc($sql_get_data_web, 1);
}
