<?php
$pageTitle = "首頁";
include "00/header.php";
?>
<h1>歡迎來到首頁</h1>
<div class="container mt-5">
  <div class="row">
    <!-- 第一個框 -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">迎新茶會</h5>
          <p class="card-text">x來玩好玩</p>
          <a href="about.php" class="btn btn-primary">按此查看</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">資管一日營</h5>
          <p class="card-text">來玩</p>
          <a href="contact.php" class="btn btn-primary">按此查看</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "00/footer.php"; ?>