<?php
class Chamado {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM chamados")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM chamados WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($codigo_cliente, $descricao, $prioridade, $categoria) {
        $stmt = $this->conn->prepare("INSERT INTO chamados (codigo_cliente, descricao, status, prioridade, categoria, data_abertura) VALUES (?, ?, 'Aguardando', ?, ?, NOW())");
        return $stmt->execute([$codigo_cliente, $descricao, $prioridade, $categoria]);
    }

    public function update($id, $codigo_cliente, $descricao, $status, $prioridade, $categoria) {
        $stmt = $this->conn->prepare("UPDATE chamados SET codigo_cliente = ?, descricao = ?, status = ?, prioridade = ?, categoria = ? WHERE id = ?");
        return $stmt->execute([$codigo_cliente, $descricao, $status, $prioridade, $categoria, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM chamados WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
