<?php
require_once 'includes/session.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理後台</title>

    <!-- CSS 檔案 -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css">
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css">
    <link rel="stylesheet" href="../assets/css/demo.css">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .layout-container {
            display: flex;
            min-height: 100vh;
        }

        .layout-menu {
            flex: 0 0 16rem;
            width: 16rem;
        }

        .layout-page {
            flex: 1;
            min-width: 0;
        }

        .content-wrapper {
            padding: 1.5rem;
        }
        
    </style>
</head>

<body>
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0">
           
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- 搜尋 -->
            <div class="navbar-nav align-items-center">
                <!-- <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" class="form-control border-0 shadow-none" placeholder="搜尋..."> -->
                <!-- </div> -->
            </div>

            <!-- 使用者選單 -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <?php if (isset($_SESSION['user'])): ?>
                    <!-- 已登入狀態 -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block"><?php echo $_SESSION['user']['name']; ?></span>
                                            <small class="text-muted">會員</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">個人資料</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">登出</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <!-- 未登入狀態 -->
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="bx bx-log-in me-2"></i>登入
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>