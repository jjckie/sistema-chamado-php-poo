<?php
require_once 'model/Chamado.php';

class ChamadoController {
    private $model;

    public function __construct($db) {
        $this->model = new Chamado($db);
    }

    public function indexCliente() {
        $chamados = $this->model->getAll();
        include 'view/cliente.php';
    }

    public function indexTecnico() {
        $chamados = $this->model->getAll();
        include 'view/tecnico.php';
    }

    public function create($post) {
        $this->model->create($post['codigo_cliente'], $post['descricao'], $post['prioridade'], $post['categoria']);
        header("Location: index.php?view=cliente");
    }

    public function update($post) {
        $this->model->update($post['id'], $post['codigo_cliente'], $post['descricao'], $post['status'], $post['prioridade'], $post['categoria']);
        header("Location: index.php?view=tecnico");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php?view=tecnico");
    }
}
