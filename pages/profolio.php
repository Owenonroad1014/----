<?php
require __DIR__. 'includes/session.php';
require __DIR__. 'includes/config.php';

// 檢查是否登入
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>個人資料</title>
    <!-- 引入 CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css">
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css">
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper container-p-y">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-2">個人資料</h4>
                    <div class="mb-3">
                        <label class="form-label">用戶名稱</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user']['name']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">角色</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user']['role']; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>