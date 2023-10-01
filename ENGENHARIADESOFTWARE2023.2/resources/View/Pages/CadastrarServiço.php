<?php
require_once '..\..\..\app\Controller\Pages\Servicos.php';
use \App\Controller\Pages\Servico;
$Servico = new Servico;
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
    
<?php
if(isset($_POST['nomeServico']))
{
    $nome = $_POST['nomeServico'];
    $valor = $_POST['valorServico'];
    $descricao = $_POST['descricaoServico'];
    $id_prestador = $decoded->id;

    echo $descricao;

    $retornoCadastroServico = $Servico->CadastrarServiço($nome, $valor, $descricao,$id_prestador);

    echo '<div class="d-flex justify-content-center mt-3">';

    if($retornoCadastroServico)
    {
        // Mensagem de sucesso (verde)
        echo '<div class="alert alert-success  w-50">
                <strong>Sucesso:</strong> Serviço cadastrado com sucesso!
              </div>';
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
