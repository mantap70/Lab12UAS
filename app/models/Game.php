<?php
require_once '../app/config/database.php';

class Game {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll($search, $limit, $offset) {
        $sql = "SELECT * FROM games WHERE title LIKE :search LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':search', "%$search%");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function count($search) {
        $stmt = $this->db->prepare(
            "SELECT COUNT(*) FROM games WHERE title LIKE :search"
        );
        $stmt->execute(['search' => "%$search%"]);
        return $stmt->fetchColumn();
    }

    public function insert($data) {
        $stmt = $this->db->prepare(
            "INSERT INTO games (title, genre, price, cover) VALUES (?,?,?,?)"
        );
        return $stmt->execute($data);
    }

    public function find($id) {
        return $this->db->query("SELECT * FROM games WHERE id=$id")->fetch();
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare(
            "UPDATE games SET title=?, genre=?, price=? WHERE id=?"
        );
        return $stmt->execute([...$data, $id]);
    }

    public function delete($id) {
        return $this->db->exec("DELETE FROM games WHERE id=$id");
    }
}