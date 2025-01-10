<!-- Menu -->
<div id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!-- 您的 Logo -->
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">管理系統</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- 首頁 -->
        <li class="menu-item active">
            <a href="index_.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>首頁</div>
            </a>
        </li>

        <!-- 商品管理 -->
        <li class="menu-item">
            <a href="./c-list.php" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div>商品管理</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="products.php" class="menu-link">
                        <div>商品列表</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="product-add.php" class="menu-link">
                        <div>新增商品</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- 文章管理 -->
        <li class="menu-item">
            <a href="./a-list.php" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>文章管理</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="articles.php" class="menu-link">
                        <div>文章列表</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="article-add.php" class="menu-link">
                        <div>新增文章</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    
</div>
<!-- / Menu -->