<?php
class Database {
    private static $instance;
    private $db;

    private function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=catalogo', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function __wakeup() {
    }

    public function getConnection() {
        return $this->db;
    }
}
