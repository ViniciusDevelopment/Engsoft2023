<?php
require_once '..\..\..\app\Controller\Pages\Servicos.php';
use \App\Controller\Pages\Servico;
$Servico = new Servico;
$result = $Servico->ConsultarServicos();

if ($result->num_rows > 0) {

    // Iniciar a saída HTML
    echo '<div class="row">';

    // Loop através dos resultados
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4">';
        echo '<div class="card mb-4 box-shadow">';

        // $imagem_url = $row["imagem_url"];
        $imagem_path = '..\\Assets\\serviço.jpg'; // Caminho padrão da imagem

        // if (file_exists($imagem_url)) {
        //   echo '<img class="card-img-top" src="' . $imagem_url . '" alt="Imagem do Serviço">';
        // } else {
          echo '<img class="card-img-top" src="' . $imagem_path . '" alt="Imagem Padrão">';
        // }
        echo '<div class="card-body">';
        echo '<h5>' . $row["Nome"] . '</h5>';
        echo '<p class="card-text">' . $row["Descricao"] . '</p>';
        echo '<div class="d-flex justify-content-between align-items-center">';
        echo '<div class="btn-group">';
        echo '<button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>';
        echo '<button type="button" class="btn btn-sm btn-outline-secondary">Solicitar serviço</button>';
        echo '</div>';
        // Exibir a disponibilidade e o valor no canto direito como "R$"
        echo '<div class="d-flex justify-content-between align-items-center">';
        // echo '<small class="text-muted" style="margin-right: 5px;">' . $row["disponibilidade"] . '</small>';
        echo '<span class="text-success font-weight-bold" style="margin-left: 5px;">R$ ' . number_format($row['Valor'], 2, ',', '.') . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    // Fechar a saída HTML
    echo '</div>';
} else {
    echo "Nenhum serviço encontrado na base de dados.";
}

?>
