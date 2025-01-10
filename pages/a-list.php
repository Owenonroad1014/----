<?php
require __DIR__. "/includes/session.php";
?>
<div class="layout-wrapper">
    <div class="layout-container">
        <!-- Sidebar -->
        <?php include "includes/sidebar.php"; ?>
        
        <!-- Main content -->
        <div class="layout-page">
            <!-- Header -->
            <?php include "includes/head.php"; ?>
            
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h1>歡迎使用後台管理系統</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>