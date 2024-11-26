<?php
include "config.php";

$sql = "SELECT * FROM vendedores";
$res_vendedores = $conn->query($sql);

if ($res_vendedores && $res_vendedores->num_rows > 0) {
    // A consulta de vendedores foi bem-sucedida
} else {
    // Caso não haja vendedores, você pode exibir uma mensagem ou tomar alguma ação
    echo "Nenhum vendedor encontrado.";
}

?>

<h1>Comprar <?= htmlspecialchars($_REQUEST["nomeProduto"], ENT_QUOTES, 'UTF-8'); ?></h1>

<form action="?page=salvarPedido" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Vendedor</label>
        <select name="vendedor_pedido" class="form-select">
            <?php 
                if ($res_vendedores) {
                    while($row = $res_vendedores->fetch_object()){
                        print "<option value=" . $row->id_vendedor . ">" . $row->nome_vendedor . "</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Cliente</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="text" value="1" class="form-control" readonly />
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Comprar</button>
    </div>
</form>
