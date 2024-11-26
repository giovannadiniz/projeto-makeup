<?php
    switch ($_REQUEST["acaoVendedor"]) {
        case 'cadastrarV':
            $nome = $_POST["nome_vendedor"];
            $email = $_POST["email_vendedor"];
            $telefone = $_POST["telefone_vendedor"];
            
            $sql = "INSERT INTO vendedores (nome_vendedor, email_vendedor, telefone_vendedor) VALUES ('{$nome}', '{$email}', '{$telefone}')";

            $res = $conn->query($sql);                               

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listarV';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='page=listar';</script>";
            }
        break;
    }