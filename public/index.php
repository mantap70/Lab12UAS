<?php
session_start();

/* REQUIRE CONTROLLER */
require_once '../app/controllers/GameController.php';
require_once '../app/controllers/AuthController.php';

/* INIT CONTROLLER */
$game = new GameController();
$auth = new AuthController();

/* ROUTING */
$page = $_GET['page'] ?? 'home';

switch ($page) {

    /* AUTH */
    case 'login':
        $auth->loginForm();
        break;

    case 'doLogin':
        $auth->login();
        break;

    case 'logout':
        $auth->logout();
        break;

    /* GAME CRUD */
    case 'create':
        $game->create();
        break;

    case 'store':
        $game->store();
        break;

    case 'edit':
        $game->edit($_GET['id']);
        break;

    case 'update':
        $game->update($_GET['id']);
        break;

    case 'delete':
        $game->delete($_GET['id']);
        break;

    /* HOME */
    case 'home':
    default:
        $game->index();
        break;
}