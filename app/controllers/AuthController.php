<?php
require_once '../app/config/database.php';

class AuthController {
    public function loginForm() {
        require '../app/views/auth/login.php';
    }

    public function login() {
        session_start();
        $db = Database::connect();

        $stmt = $db->prepare(
            "SELECT * FROM users WHERE username=? AND password=?"
        );
        $stmt->execute([
            $_POST['username'],
            md5($_POST['password'])
        ]);

        $user = $stmt->fetch();

        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
        } else {
            echo "Login gagal";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php?page=login");
    }
}