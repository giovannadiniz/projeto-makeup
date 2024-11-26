<?php
    switch ($_REQUEST["acaoProduto"]) {
        case 'cadastrarP':
            $nome = $_POST["nome_produto"];
            $descricao = $_POST["descricao_produto"];
            $preco = $_POST["preco_produto"];
            $quantidade = $_POST["quantidade_estoque"];

            
            $sql = "INSERT INTO produtos (nome_produto, descricao_produto, preco_produto, quantidade_estoque) VALUES ('{$nome}', '{$descricao}', '{$preco}', '{$quantidade}')";

            $res = $conn->query($sql);                               

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listarP';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='page=listar';</script>";
            }
        break;
    }