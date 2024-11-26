<h1>Cadastrar Produto</h1>
    <form action="?page=salvarP" method="POST">
        <input type="hidden" name="acaoProduto" value="cadastrarP">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome_produto" class="form-control">
        </div>
        <div class="mb-3">
            <label>Descrição do Produto</label>
            <input type="text" name="descricao_produto" class="form-control">
        </div>
        <div class="mb-3">
            <label>Preço do Produto</label>
            <input type="number" step="0.01" name="preco_produto" class="form-control">
        </div>
        <div class="mb-3">
            <label>Quantidade no Estoque</label>
            <input type="number" name="quantidade_estoque" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>