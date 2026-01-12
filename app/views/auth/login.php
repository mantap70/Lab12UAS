<?php include '../app/views/layout/header.php'; ?>

<div class="container mt-5 col-md-4">
    <h3>🔐 Login</h3>

    <form action="index.php?page=doLogin" method="POST">
        <div class="mb-3">
            <input name="username" class="form-control" placeholder="Username">
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?php include '../app/views/layout/footer.php'; ?>
