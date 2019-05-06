<!-- Dashboard bài viết -->
<h3>Bài viết</h3>
<div class="row">
  <?php

  if ($data_user['position'] == '1') {
    // Lấy tổng số bài viết
    $sql_get_count_post = "SELECT id_post FROM posts";   
    $label = 'total posts';
  } else {
    // Lấy số bài viết của tác giả
    $sql_get_count_post = "SELECT id_post FROM posts WHERE author_id = '$data_user[id_acc]'";
    $label = 'posts';
  }

  $count_post = $db->num_rows($sql_get_count_post);

  echo 
  '
    <div class="col-md-4">
      <div class="alert alert-info">
        <h1>' . $count_post . '</h1>
        <p>' . $label . '</p>
      </div>
    </div>
  ';

  ?>

  <?php

  if ($data_user['position'] == '1') {
    // Lấy tổng bài viết xuất bản
    $sql_get_count_post_public = "SELECT id_post FROM posts WHERE status = '1'";
    $label = 'total posted';   
  } else {
    // Lấy các bài viết xuất bản của tài khoản đó 
    $sql_get_count_post_public = "SELECT id_post FROM posts WHERE status = '1' AND author_id = '$data_user[id_acc]'";
    $label = 'posted';
  }

  $count_post_public = $db->num_rows($sql_get_count_post_public);

  echo 
  '
    <div class="col-md-4">
      <div class="alert alert-success">
        <h1>' . $count_post_public . '</h1>
        <p>' . $label . '</p>
      </div>
    </div>
  ';

  ?>
  
  <?php

  if ($data_user['position'] == '1') {
    // Lấy tổng bài viết ẩn
    $sql_get_count_post_hide = "SELECT id_post FROM posts WHERE status = '0'";
    $label = 'total hidden post';   
  } else {
    // Lấy các bài viết ẩn của tài khoản đó 
    $sql_get_count_post_hide = "SELECT id_post FROM posts WHERE status = '0' AND author_id = '$data_user[id_acc]'";
    $label = 'hidden post';
  }

  $count_post_hide = $db->num_rows($sql_get_count_post_hide);

  echo 
  '
    <div class="col-md-4">
      <div class="alert alert-warning">
        <h1>' . $count_post_hide . '</h1>
        <p>' . $label . '</p>
      </div>
    </div>
  ';

  ?>
</div>

<?php

if ($data_user['position'] == '1') {

?>

<!-- Dashboard chuyên mục -->
<h3>Category</h3>
<div class="row">
  <?php

  // Lấy tổng chuyên mục
  $sql_get_count_cate = "SELECT id_cate FROM categories";   
  $count_cate = $db->num_rows($sql_get_count_cate);

  echo 
  '
    <div class="col-md-3">
      <div class="alert alert-info">
        <h1>' . $count_cate . '</h1>
        <p>Category</p>
      </div>
    </div>
  ';

  ?>

  <?php

  // Lấy số chuyên mục lớn
  $sql_get_count_cate_1 = "SELECT id_cate FROM categories WHERE type = '1'";   
  $count_cate_1 = $db->num_rows($sql_get_count_cate_1);

  echo 
  '
    <div class="col-md-3">
      <div class="alert alert-success">
        <h1>' . $count_cate_1 . '</h1>
        <p>Large category</p>
      </div>
    </div>
  ';

  ?>

  <?php

  // Lấy số chuyên mục vừa
  $sql_get_count_cate_2 = "SELECT id_cate FROM categories WHERE type = '2'";   
  $count_cate_2 = $db->num_rows($sql_get_count_cate_2);

  echo 
  '
    <div class="col-md-3">
      <div class="alert alert-warning">
        <h1>' . $count_cate_2 . '</h1>
        <p>medium category</p>
      </div>
    </div>
  ';

  ?>

  <?php

  // Lấy số chuyên mục nhỏ
  $sql_get_count_cate_3 = "SELECT id_cate FROM categories WHERE type = '3'";   
  $count_cate_3 = $db->num_rows($sql_get_count_cate_3);

  echo 
  '
    <div class="col-md-3">
      <div class="alert alert-danger">
        <h1>' . $count_cate_3 . '</h1>
        <p>Small category</p>
      </div>
    </div>
  ';

  ?>
</div>

<!-- Dashboard tài khoản -->
<h3>Accounts</h3>
<div class="row">
  <?php

  // Lấy tổng tài khoản
  $sql_get_count_acc = "SELECT id_acc FROM accounts WHERE position = '0'";   
  $count_acc = $db->num_rows($sql_get_count_acc);

  echo 
  '
    <div class="col-md-4">
      <div class="alert alert-info">
        <h1>' . $count_acc . '</h1>
        <p>total account</p>
      </div>
    </div>
  ';

  ?>

  <?php

  // Lấy số tài khoản hoạt động
  $sql_get_count_acc_active = "SELECT id_acc FROM accounts WHERE status = '0' AND position = '0'";   
  $count_acc_active = $db->num_rows($sql_get_count_acc_active);

  echo 
  '
    <div class="col-md-4">
      <div class="alert alert-success">
        <h1>' . $count_acc_active . '</h1>
        <p>online accounts</p>
      </div>
    </div>
  ';

  ?>

  <?php

  // Lấy số tài khoản bị khoá
  $sql_get_count_acc_locked = "SELECT id_acc FROM accounts WHERE status = '1' AND position = '0'";   
  $count_acc_locked = $db->num_rows($sql_get_count_acc_locked);

  echo 
  '
    <div class="col-md-4">
      <div class="alert alert-warning">
        <h1>' . $count_acc_locked . '</h1>
        <p>locked accounts</p>
      </div>
    </div>
  ';

  ?>
</div>

<?php

}

?>