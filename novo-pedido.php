<?php
include "config.php" ;

$sql = "SELECT * FROM vendedores";
$res_vendedores = $conn->query($sql);

$sql = "SELECT * FROM usuarios";
$res_usuarios = $conn->query($sql);
?>

<h1>Comprar <?= htmlspecialchars($_REQUEST["nomeProduto"], ENT_QUOTES, 'UTF-8'); ?></h1>

<form action="?page=salvarPedido" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Vendedor</label>
        <select name="vendedor_pedido" class="form-select">
            <?php
                if ($res_vendedores && $res_vendedores->num_rows > 0) {
                    while($row = $res_vendedores->fetch_object()){
                        print "<option value=" . $row->nome_vendedor . ">" . $row->nome_vendedor . "</option>";
                    }
                } else {
                    echo "<option value=''>Nenhum vendedor encontrado</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_pedido" class="form-select">
            <?php
                if ($res_usuarios && $res_usuarios->num_rows > 0) {
                    while($row = $res_usuarios->fetch_object()){
                        print "<option value=" . $row->id . ">" . $row->nome . "</option>";
                    }
                } else {
                    echo "<option value=''>Nenhum vendedor encontrado</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Quantidade</label>
        <input type="text" value="1" class="form-control" readonly />
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Comprar</button>
    </div>
</form>