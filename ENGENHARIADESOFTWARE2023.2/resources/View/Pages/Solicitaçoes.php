<?php
require_once '..\..\..\app\Controller\Pages\Servicos.php';

use \App\Controller\Pages\Servico;

$Servico = new Servico;

if (isset($_POST['nomeServico'])) {
    $nome = $_POST['nomeServico'];
    $valor = $_POST['valorServico'];
    $descricao = $_POST['descricaoServico'];
    $status = $_POST['status'];
    $id_prestador = $decoded->id;

    echo '<div class="d-flex justify-content-center mt-3">';

    echo '</div>';
}

if (isset($_POST['confirmarExclusao'])) {
    $idServico = $_POST['id_servico'];
    $retornoExclusaoServico = $Servico->ExcluirServico($idServico);

    // Verifique o retorno da função e exiba uma mensagem correspondente
    if ($retornoExclusaoServico === 1) {
        echo '<div class="alert alert-success" role="alert">Serviço excluído com sucesso!</div>';
    } elseif ($retornoExclusaoServico === -1) {
        echo '<div class="alert alert-danger" role="alert">O serviço não foi encontrado.</div>';
    } elseif ($retornoExclusaoServico === 0) {
        echo '<div class="alert alert-danger" role="alert">Erro ao excluir o serviço.</div>';
    }
}

?>

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
                    <th>Status</th>
                    <th>Disponibilidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $Servico->ConsultarServicosSolicitados($decoded->id);


                if ($result->num_rows > 0) {
                    // Exibe os dados na tabela
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Id'] . "</td>";
                        echo "<td>" . $row['Nome'] . "</td>";
                        echo "<td>R$" . number_format($row['Valor'], 2, ',', '.') . "</td>";
                        echo "<td>" . $row['Descricao'] . "</td>";
                        echo "<td>";
                                            if ($row['Status_id'] == 0) 
                                            {
                                                echo '<strong><span class="text-success">Em analíse</span></strong>'; // Verde para disponível
                                            } else 
                                            {
                                                if ($row['Status_id'] == 1) {
                                                echo '<strong><span class="text-danger">Solicitação cancelada</span></strong>';
                                                 } else 
                                                 {
                                                    if ($row['Status_id'] == 2) 
                                                    {
                                                        echo '<strong><span class="text-success">Serviço em andamento</span></strong>'; // Verde para disponível
                                                    } else 
                                                    {
                                                        if ($row['Status_id'] == 3) 
                                                        {
                                                            echo '<strong><span class="text-success">Serviço Concluído!</span></strong>'; // Verde para disponível
                                                        } else 
                                                        {
                                                            echo '<strong><span class="text-danger">Serviço com Problema!</span></strong>';
                                                        }
                                                    }
                                                 }
                                            }

                                            echo "</td>";
                        echo"<td>";
                        if ($row['disponibilidade'] == 1) {
                            echo '<strong><span class="text-success">Disponível</span></strong>'; // Verde para disponível
                        } else {
                            echo '<strong><span class="text-danger">Indisponível</span></strong>'; // Vermelho para indisponível
                        }
                        
                        echo "</td>";
                        
                        echo "<td class='col-auto'>";
                        // Botão para acionar modal DETALHES
                        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalExemplo" . $row['Id'] . "'>";
                        echo "Detalhes";
                        echo "</button>";

                        echo "<button type='button' class='ml-3 btn btn-danger' data-toggle='modal' data-target='#modaldeletar" . $row['Id'] . "'>";
                        echo "Deletar";
                        echo "</button>";

                        // Modal Detalhes
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
                        echo "<p>ID do serviço: " . $row['Id'] . "</p>";
                        echo "<p>Prestador: " . $nomePrestador . "</p>";
                        echo "<p>ID do Prestador: " . $row['$id_prestador'] . "</p>";
                        echo "<p>Serviço: " . $row['Nome'] . "</p>";
                        echo "<p>Preço: R$" . $row['Valor'] . "</p>";
                        echo "<p>Descrição: " . $row['Descricao'] . "</p>";

                                            if ($row['Status_id'] == 0) 
                                            {
                                                echo '<strong><span class="text-success">Em analíse</span></strong>'; // Verde para disponível
                                            } else 
                                            {
                                                if ($row['Status_id'] == 1) {
                                                echo '<strong><span class="text-danger">Solicitação cancelada</span></strong>';
                                                 } else 
                                                 {
                                                    if ($row['Status_id'] == 2) 
                                                    {
                                                        echo '<strong><span class="text-success">Serviço em andamento</span></strong>'; // Verde para disponível
                                                    } else 
                                                    {
                                                        if ($row['Status_id'] == 3) 
                                                        {
                                                            echo '<strong><span class="text-success">Serviço Concluído!</span></strong>'; // Verde para disponível
                                                        } else 
                                                        {
                                                            echo '<strong><span class="text-danger">Serviço com Problema!</span></strong>';
                                                        }
                                                    }
                                                 }
                                            }

                        if ($row['disponibilidade'] == 1) {
                          echo '<strong><span class="text-success">Disponível</span></strong>'; // Verde para disponível
                      } else {
                          echo '<strong><span class="text-danger">Indisponível</span></strong>'; // Vermelho para indisponível
                      }

                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        //FIM MODAL DETALHES

                        //MODAL DELETAR
                        echo "<div class='modal fade' id='modaldeletar" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Deletar o Serviço</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";

                        echo "<div class='modal-body'>";
                        echo "<p>Tem certeza de que deseja excluir este serviço?</p>";
                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<form action='' method='post'>";
                        echo "<input type='hidden' name='id_servico' value='".$row['Id']."'>";
                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>";
                        echo "<button type='submit' class='btn btn-danger' name='confirmarExclusao'>Confirmar</button>";
                        echo "</form>";
                        
                        echo "</div>";

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        //FIM MODAL DELETAR

                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhum serviço solicitado.</td></tr>";
                }

                ?>
            </tbody>
        </table>

    </div>
</div>
