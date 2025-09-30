<?php
$pageTitle = "關於我們";
include "00/header.php";
?>
<h1>關於我們</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $status = $_POST['status'] ?? '';
  $dinner = isset($_POST['dinner']);
  $dinnerText = $dinner ? '需要晚餐' : '不需要晚餐';
  $total = 0;
  if ($status === 'student' && $dinner) {
    $total = 60;
  }
  echo '<div class="alert alert-info">';
  echo '名字：' . htmlspecialchars($username) . '<br>';
  
  if ($status === 'faculty') {
    echo '總費用：免費';
  } else {
    echo '總費用：' . $total . ' 元';
  }
  echo '</div>';
}
?>

<form class="mb-4" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">名字：</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="請輸入名字">
  </div>
  <label class="form-label">身份:</label><br/>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="status" id="faculty" value="faculty" checked />
    <label class="form-check-label" for="faculty">教職員</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="status" id="student" value="student" />
    <label class="form-check-label" for="student">學生</label >
  <form class="mb-4" method="post">
  </div>
  <div class="mb-2"></div>
  <label class="form-label d-block">晚餐:</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="dinner" id="dinner" value="yes" />
    <label class="form-check-label" for="dinner">需要晚餐</label>
  </div>
  <button type="submit" class="btn btn-primary mt-3">送出</button></form>
</form>
<p>這是關於我們的介紹頁面。</p>
<?php include "00/footer.php"; ?>