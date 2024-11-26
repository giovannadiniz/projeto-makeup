<h1>Listar Vendedores</h1>
<?php
    $sql = "SELECT * FROM vendedores";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>Id</th>";
            print "<th>Nome</th>";
            print "<th>Telefone</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_vendedor."</td>";
            print "<td>".$row->nome_vendedor."</td>";
            print "<td>".$row->telefone_vendedor."</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultados! </p>";
    }
?>
