<h1>Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>Descrição</th>";
            print "<th>Preço</th>";
            print "<th>Quantidade</th>";
            print "<th>Comprar</th>";
            print "<tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_produto."</td>";
            print "<td>".$row->nome_produto."</td>";
            print "<td>".$row->descricao_produto."</td>";
            print "<td>".$row->preco_produto."</td>";
            print "<td>".$row->quantidade_estoque."</td>";
            print "<td><a href='?page=novoPedido&id=" . $row->id_produto .  "&nomeProduto=" . $row->nome_produto . "' type='submit' class='btn btn-primary'>Comprar</a></td>";
            print "<tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultados!</p>";
    }
?>