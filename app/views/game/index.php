<?php include '../app/views/layout/header.php'; ?>

<div class="container mt-4">
    <h2 class="mb-3">🎮 Game Store</h2>

    <form class="d-flex mb-3" method="GET">
        <input type="text" class="form-control me-2" name="search" placeholder="Cari game...">
        <button class="btn btn-primary">Cari</button>
    </form>

    <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin'): ?>
        <a href="index.php?page=create" class="btn btn-primary mb-3">
            ➕ Tambah Game
        </a>
    <?php endif; ?>

    <div class="row">
        <?php foreach ($games as $g): ?>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="assets/img/<?= $g['cover'] ?>" class="card-img-top">

                <div class="card-body d-flex flex-column">
                    <h5><?= $g['title'] ?></h5>
                    <p class="text-muted"><?= $g['genre'] ?></p>
                    <strong class="mb-3">
                        Rp <?= number_format($g['price']) ?>
                    </strong>

                    <!-- Tombol AKSI PER GAME -->
                    <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin'): ?>
                    <div class="mt-auto d-flex gap-2">
                        <a href="index.php?page=edit&id=<?= $g['id'] ?>"
                        class="btn btn-sm btn-warning w-50">
                        ✏ Edit
                        </a>

                        <a href="index.php?page=delete&id=<?= $g['id'] ?>"
                        class="btn btn-sm btn-danger w-50"
                        onclick="return confirm('Yakin ingin menghapus <?= $g['title'] ?>?')">
                        🗑 Hapus
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-4 d-flex justify-content-center gap-1">
        <?php for ($i = 1; $i <= ceil($total / 6); $i++): ?>
            <a href="?p=<?= $i ?>"
            class="btn <?= ($_GET['p'] ?? 1) == $i 
                ? 'btn-primary' 
                : 'btn-outline-secondary' ?>">
            <?= $i ?>
            </a>
        <?php endfor; ?>
    </div>

</div>

<?php include '../app/views/layout/footer.php'; ?>