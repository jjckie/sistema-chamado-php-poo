<link rel="stylesheet" href="public/css/style.css">
<nav> 
<a href="index.php?view=cliente">Cliente</a> |
<a href="index.php?view=tecnico">Técnico</a>

</nav>


<h2>Cliente</h2>
<form method="POST" action="index.php?action=create">
    <input type="text" name="codigo_cliente" placeholder="Código Cliente" required>
    <input type="text" name="descricao" placeholder="Descrição" required>
    <input type="text" name="prioridade" placeholder="Prioridade (Alta, Média, Baixa)" required>
    <input type="text" name="categoria" placeholder="Categoria" required>
    <button type="submit">Novo Chamado</button>
</form>

<table>
    <tr><th>ID</th><th>Cliente</th><th>Descrição</th><th>Status</th><th>Prioridade</th><th>Categoria</th><th>Data Abertura</th></tr>
    <?php foreach ($chamados as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= htmlspecialchars($c['codigo_cliente']) ?></td>
            <td><?= htmlspecialchars($c['descricao']) ?></td>
            <td><?= $c['status'] ?></td>
            <td><?= $c['prioridade'] ?></td>
            <td><?= $c['categoria'] ?></td>
            <td><?= $c['data_abertura'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
