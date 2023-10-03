<?php
require_once '..\..\..\app\Controller\Pages\Servicos.php';
use \App\Controller\Pages\Servico;
$Servico = new Servico;

if(isset($_POST['nomeServico']))
{
    $nome = $_POST['nomeServico'];
    $valor = $_POST['valorServico'];
    $descricao = $_POST['descricaoServico'];
    $id_prestador = $decoded->id;

    $retornoCadastroServico = $Servico->CadastrarServiço($nome, $valor, $descricao,$id_prestador);

    echo '<div class="d-flex justify-content-center mt-3">';

    if ($retornoCadastroServico) {
        // Redireciona para a mesma página com um parâmetro "success"
        header('Location: page.php?arquivo=CadastrarServiço&id=&success=true');
    }
    
    else
    {
        // Mensagem de erro (vermelho)
        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Erro ao cadastrar serviço.
              </div>';
    }

    echo '</div>';
}

?>

<div class="container mt-5">
        <h1>Cadastro de Serviço</h1>
        <form method="POST" enctype="multipart/form-data">
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

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <div class="container p-3">
    <div class="card p-3 table-responsive">
    <h2>Minha Lista de Serviços</h2>
        <table class="table table-bordered table-hover">
            <thead>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $Servico->ConsultarServicosPrestador($decoded->id);
                

                if ($result->num_rows > 0) {
                    // Exibe os dados na tabela
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Id'] . "</td>";
                        echo "<td>" . $row['Nome'] . "</td>";
                        echo "<td>R$" . number_format($row['Valor'], 2, ',', '.') . "</td>";
                        echo "<td>" . $row['Descricao'] . "</td>";
                        echo "<td class='col-auto'>";
                        // Botão para acionar modal
                        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalExemplo" . $row['Id'] . "'>";
                        echo "Detalhes";
                        echo "</button>";

                        // Modal
                        echo "<div class='modal fade' id='modalExemplo" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Detalhes do Serviço:</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";

                        $nomePrestador = Servico::ObterNomePrestador($row['prestador_id']);
                        echo "<p>Aqui está todos os dados do serviço desde a sua última alteração:</p>";
                        echo "<p>ID: " . $row['Id'] . "</p>";
                        echo "<p>Serviço: " . $row['Nome'] . "</p>";
                        echo "<p>Preço: R$" . $row['Valor'] . "</p>";
                        echo "<p>Descrição: " . $row['Descricao'] . "</p>";
                        echo "<p>Prestador: " . $nomePrestador . "</p>";
                        echo "<p>Disponibilidade: Está visível para o público</p>";

                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";

                        echo "<a href='AlterarServico.php?id=" . $row['Id'] . "' class='btn btn-sm btn-warning'>Alterar</a>";
                        echo "<a href='DeletarServico.php?id=" . $row['Id'] . "' class='btn btn-sm btn-danger'>Deletar</a>";
                        echo "</td>";
                        echo "</tr>";
                
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhum serviço cadastrado.</td></tr>";
                }

                ?>
            </tbody>
        </table>

        </div>
        </div>
    


    

