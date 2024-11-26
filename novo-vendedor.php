<h1>Novo Cliente</h1>
    <form action="?page=salvarV" method="POST">
        <input type="hidden" name="acaoVendedor" value="cadastrarV">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome_vendedor" class="form-control">
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email_vendedor" class="form-control">
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="integer" name="telefone_vendedor" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>