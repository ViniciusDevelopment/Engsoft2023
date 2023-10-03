<?php
require_once '..\..\..\app\Controller\Pages\Servicos.php'; // Verifique o caminho correto
use \App\Controller\Pages\Servico;
$Servico = new Servico;

if(isset($_GET['id'])){
    $id_servico = $_GET['id'];
} else {
    // Lidere com o caso em que o ID não é fornecido
    echo "ID do serviço não fornecido.";
    exit;
}

// Exclua o serviço com base no ID fornecido
if ($Servico->ExcluirServicos($id_servico)) {
    // Serviço excluído com sucesso, você pode redirecionar para a página de lista de serviços ou exibir uma mensagem de sucesso
    header("Location: ListaServicos.php"); // Redirecionamento para a lista de serviços
    exit;
} else {
    // Lidere com o caso de erro na exclusão
    echo "Erro ao excluir o serviço.";
    exit;
}
?>
