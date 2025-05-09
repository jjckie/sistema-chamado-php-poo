<link rel="stylesheet" href="public/css/style.css">

<nav> 
<a href="index.php?view=cliente">Cliente</a> |
<a href="index.php?view=tecnico">Técnico</a>
</nav>

<h2>Operador Técnico</h2>
<table>
    <tr><th>ID</th><th>Cliente</th><th>Descrição</th><th>Status</th><th>Prioridade</th><th>Categoria</th><th>Data Abertura</th><th>Ações</th></tr>
    <?php foreach ($chamados as $c): ?>
        <tr>
            <form method="POST" action="index.php?action=update">
                <td><?= $c['id'] ?></td>
                <td><input name="codigo_cliente" value="<?= htmlspecialchars($c['codigo_cliente']) ?>"></td>
                <td><input name="descricao" value="<?= htmlspecialchars($c['descricao']) ?>"></td>
                <td>
                    <select name="status">
                        <option <?= $c['status'] === 'Aguardando' ? 'selected' : '' ?>>Aguardando</option>
                        <option <?= $c['status'] === 'Liberado' ? 'selected' : '' ?>>Liberado</option>
                    </select>
                </td>
                <td><input name="prioridade" value="<?= htmlspecialchars($c['prioridade']) ?>"></td>
                <td><input name="categoria" value="<?= htmlspecialchars($c['categoria']) ?>"></td>
                <td><?= $c['data_abertura'] ?></td>
                <td>
                    <input type="hidden" name="id" value="<?= $c['id'] ?>">
                    <button type="submit">Salvar</button>
                    <a href="index.php?action=delete&id=<?= $c['id'] ?>" class="btn-excluir" onclick="return confirm('Excluir?')">Excluir</a>

                </td>
            </form>
        </tr>
    <?php endforeach; ?>
</table>
