<div class="container mt-5">
        <h1>Cadastro de Serviço</h1>
        <form action="processar_formulario.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nomeServico" class="form-label">Nome do Serviço</label>
                <input type="text" class="form-control" id="nomeServico" name="nomeServico" required>
            </div>
            <div class="mb-3">
                <label for="valorServico" class="form-label">Valor do Serviço</label>
                <input type="number" class="form-control" id="valorServico" name="valorServico" required>
            </div>
            <div class="mb-3">
                <label for="descricaoServico" class="form-label">Descrição do Serviço</label>
                <textarea class="form-control" id="descricaoServico" name="descricaoServico" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagemServico" class="form-label">Imagem do Serviço</label>
                <input type="file" class="form-control" id="imagemServico" name="imagemServico" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>