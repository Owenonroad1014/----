<?php
require __DIR__ . '/includes/session.php';
$title = "商品列表";
$pageName = "c-list";
$perPage = 25; # 每一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

if ($page < 1) {
    header('Location: ?page=1');
    exit;
}

$t_sql = "SELECT COUNT(1) FROM `address_book`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage);
$rows = [];

if ($totalRows > 0) {
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    
    $sql = sprintf("SELECT * FROM address_book ORDER BY ab_id DESC LIMIT %s, %s", 
        ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}
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
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                                                <a class="page-link" href="?page=1">
                                                    <i class="fa-solid fa-angles-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                                                <a class="page-link" href="?page=<?= $page - 1 ?>">
                                                    <i class="fa-solid fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <?php for ($i = $page - 5; $i <= $page + 5; $i++):
                                                if ($i >= 1 and $i <= $totalPages):
                                            ?>
                                                <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                                </li>
                                            <?php endif;
                                            endfor; ?>
                                            <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                                                <a class="page-link" href="?page=<?= $page + 1 ?>">
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </li>
                                            <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                                                <a class="page-link" href="?page=<?= $totalPages ?>">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>手機</th>
                                            <th>姓名</th>
                                            <th>電郵</th>
                                            <th>生日</th>
                                            <th>地址</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rows as $r): ?>
                                            <tr>
                                                <td><?= $r['ab_id'] ?></td>
                                                <td><?= $r['mobile'] ?></td>
                                                <td><?= htmlentities($r['name']) ?></td>
                                                <td><?= $r['email'] ?></td>
                                                <td><?= $r['birthday'] ?></td>
                                                <td><?= htmlentities($r['address']) ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>