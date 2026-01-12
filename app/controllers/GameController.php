<?php
require_once '../app/models/Game.php';

class GameController {
    private $game;

    public function __construct() {
        $this->game = new Game();
    }

    private function adminOnly() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            die("Akses ditolak. Halaman ini hanya untuk admin.");
        }
    }

    public function index() {
        $search = $_GET['search'] ?? '';
        $page = $_GET['p'] ?? 1;
        $limit = 6;
        $offset = ($page - 1) * $limit;

        $games = $this->game->getAll($search, $limit, $offset);
        $total = $this->game->count($search);

        require '../app/views/game/index.php';
    }

    public function create() {
        $this->adminOnly();
        require '../app/views/game/create.php';
    }

    public function store() {
        $this->adminOnly();
        $this->game->insert([
            $_POST['title'],
            $_POST['genre'],
            $_POST['price'],
            $_POST['cover']
        ]);
        header("Location: index.php");
    }

    public function edit($id) {
        $this->adminOnly();
        $game = $this->game->find($id);
        require '../app/views/game/edit.php';
    }

    public function update($id) {
        $this->adminOnly();
        $this->game->update($id, [
            $_POST['title'],
            $_POST['genre'],
            $_POST['price']
        ]);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->adminOnly();
        $this->game->delete($id);
        header("Location: index.php");
    }
}