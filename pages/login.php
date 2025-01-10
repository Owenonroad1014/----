<?php
require_once 'includes/session.php';
require_once 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // 這裡應該要加入資料庫驗證
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['user'] = [
            'name' => $username,
            'role' => 'admin'
        ];
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <!-- 引入 CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css">
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css">
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">歡迎登入 👋</h4>
                        <form method="POST" action="login.php">
                            <div class="mb-3">
                                <label class="form-label">帳號</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">密碼</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary d-grid w-100">登入</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>