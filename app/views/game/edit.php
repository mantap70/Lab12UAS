<?php include '../app/views/layout/header.php'; ?>

<div class="container mt-5">
    <h3>✏ Edit Game</h3>

    <form action="index.php?page=update&id=<?= $game['id'] ?>" method="POST">
        <div class="mb-3">
            <label>Judul Game</label>
            <input type="text" name="title" value="<?= $game['title'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Genre</label>
            <input type="text" name="genre" value="<?= $game['genre'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" value="<?= $game['price'] ?>" class="form-control">
        </div>

        <button class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?php include '../app/views/layout/footer.php'; ?>
