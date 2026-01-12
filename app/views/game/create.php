<?php include '../app/views/layout/header.php'; ?>

<div class="container mt-5">
    <h3>➕ Tambah Game</h3>

    <form action="index.php?page=store" method="POST">
        <div class="mb-3">
            <label>Judul Game</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Genre</label>
            <input type="text" name="genre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama File Cover</label>
            <input type="text" name="cover" class="form-control" placeholder="eldenring.jpg">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include '../app/views/layout/footer.php'; ?>
