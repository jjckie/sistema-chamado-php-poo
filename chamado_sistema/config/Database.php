<?php
class Database {
    public static function connect() {
        try {
            return new PDO("mysql:host=localhost;dbname=chamado_db", "root", "");
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}
