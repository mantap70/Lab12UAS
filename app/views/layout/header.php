<!DOCTYPE html>
<html>
<head>
    <title>Game Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">🎮 GameStore</a>

    <div class="ms-auto d-flex align-items-center gap-2">
        <?php if (isset($_SESSION['user'])): ?>
            <span class="text-white">
                <?= $_SESSION['user']['username'] ?>
                (<?= $_SESSION['user']['role'] ?>)
            </span>
            <a href="index.php?page=logout" class="btn btn-sm btn-danger">
                Logout
            </a>
        <?php else: ?>
            <a href="index.php?page=login" class="btn btn-sm btn-success">
                Login
            </a>
        <?php endif; ?>
    </div>
  </div>
</nav>
