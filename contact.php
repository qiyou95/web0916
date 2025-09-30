<?php
$pageTitle = "聯絡我們";
include "00/header.php";
?>
<h1>聯絡我們</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'] ?? '';
	$status = $_POST['status'] ?? '';
	$morning = isset($_POST['morning']);
	$afternoon = isset($_POST['afternoon']);
	$lunch = isset($_POST['lunch']);
	$total = 0;
	if ($status === 'student') {
		if ($morning) $total += 150;
		if ($afternoon) $total += 100;
		if ($lunch) $total += 50;
	}
	echo '<div class="alert alert-info">';
	echo '名字：' . htmlspecialchars($username) . '<br>';
	echo '身份：' . ($status === 'faculty' ? '教職員' : '學生') . '<br>';
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
	</div>
		<div class="mb-2"></div>
		<label class="form-label d-block">資管一日營參加項目：</label>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="morning" id="morning" value="yes" />
			<label class="form-check-label" for="morning">上午場 (150元)</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="afternoon" id="afternoon" value="yes" />
			<label class="form-check-label" for="afternoon">下午場 (100元)</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="lunch" id="lunch" value="yes" />
			<label class="form-check-label" for="lunch">午餐 (50元)</label>
		</div>
		<button type="submit" class="btn btn-primary mt-3">送出</button>
</form>
<p>這是聯絡我們的頁面。</p>
<?php include "00/footer.php"; ?>