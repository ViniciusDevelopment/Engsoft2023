<!DOCTYPE html>

    <div class="container mt-5">
        <h1>Alterar Serviço</h1>
        <?php
        require_once '..\..\..\app\Controller\Pages\Servicos.php';
        use \App\Controller\Pages\Servico;


        $mensagem = "";


        if (isset($_GET['id'])) {
        $id = $_GET['id'];


    $result = Servico::ConsultarServicosid($id);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['descricao']) && isset($_POST['disponibilidade'])) {

            $nome = $_POST['nome'];
            $valor = $_POST['valor'];
            $descricao = $_POST['descricao'];
            $disponibilidade = $_POST['disponibilidade'];


            if (Servico::alterarservico($id, $nome, $valor, $descricao, $disponibilidade)) {

      header("Location: page.php?arquivo=CadastrarServiço&id=");
      exit();
  } else {

      $mensagem = "Erro na atualização do serviço.";
  }
        }
                ?>
                <form method="POST" action="">

                    <div class="form-group">
                        <label for="nome">Nome do Serviço</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['Nome']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição do Serviço</label>
                        <textarea class="form-control" id="descricao" name="descricao"><?php echo $row['Descricao']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor do Serviço (R$)</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $row['Valor']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="disponibilidade">Disponibilidade</label>
                        <select class="form-control" id="disponibilidade" name="disponibilidade">
                            <option value="1" <?php echo $row['disponibilidade'] == 1 ? 'selected' : ''; ?>>Disponível</option>
                            <option value="0" <?php echo $row['disponibilidade'] == 0 ? 'selected' : ''; ?>>Indisponível</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                <?php
            } else {
                echo "Serviço não encontrado.";
            }
        } else {
            echo "ID do serviço não especificado.";
        }

        if (!empty($mensagem)) {
            echo '<div class="alert ' . ($mensagem == "Serviço atualizado com sucesso!" ? 'alert-success' : 'alert-danger') . ' mt-3">' . $mensagem . '</div>';
        }
        ?>
    </div>
</body>
</html>
