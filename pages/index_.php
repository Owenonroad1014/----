<?php
require __DIR__. "/includes/session.php";
?>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Sidebar -->
        <?php include __DIR__ . '/includes/sidebar.php'; ?>
        
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Header -->
            <?php include __DIR__ . '/includes/head.php'; ?>
            
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h1>歡迎來到後台管理系統</h1>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>