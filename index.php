<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>MakeUp</title>
        <link rel="icon" href="images/logo.png" type="image/png">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <img src="images/logo.png" style="width: 90px; height: auto;"></img>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                     aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Novo Cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">Listar Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novoV">Novo Vendedor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listarV">Listar Vendedor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novoP">Cadastrar Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listarP">Listar Produtos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include("config.php");
                        switch(@$_REQUEST["page"]){
                            case "novo":
                                include("novo-usuario.php");
                            break;
                            case "listar":
                                include("listar-usuario.php");
                            break;
                            case "salvar":
                                include("salvar-usuario.php");
                                break;
                            case "editar":
                                include("editar-usuario.php");
                                break;   
                            case "salvar":
                                include("salvar-usuario.php");
                                break;
                            case "novoV":
                                include("novo-vendedor.php");
                                break;
                            case "listarV":
                                include("listar-vendedor.php");
                                break;                             
                            case "salvarV":
                                include("salvar-vendedor.php");
                                break;   
                            case "novoP":
                                include("novo-produto.php");
                                break;
                            case "listarP":
                                include("listar-produto.php");
                                break;                             
                            case "salvarP":
                                include("salvar-produto.php");
                                break;
                            case "novoPedido":
                                if (isset($_REQUEST["id"]) && isset($_REQUEST["nomeProduto"])) {
                                    include("novo-pedido.php");
                                } else {
                                    include("listar-produto.php");
                                }
                                break;
                            case "salvarPedido":
                                include("salvar-produto.php");
                                break;
                            default:
                                print "<h1>Bem-vindo a MakeUp!</h1>
                                <h4>Seja nosso cliente e compre os melhores produtos de maquiagem</h4>";
                        }
                    ?>
                </div>
            </div>
        </div>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>