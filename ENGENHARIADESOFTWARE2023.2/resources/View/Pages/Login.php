<?php
require_once '..\..\..\app\Controller\Pages\Autenticacao.php';

use \App\Controller\Pages\Autenticacao;

$Autenticacao = new Autenticacao;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyllsync</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-container {
            display: flex;
            justify-content: stretch;
        }

        .card {
            border-radius: 0;
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mx-auto">
        <div class="row no-margin">
            <div class="col-md-6 p-0">
                <div class="card card-container">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <h2>Login</h2>
                            <img src="..\Assets\logo.png" alt="Logo da Empresa" width="200" height="200">
                        </div>
                        <form action="Login.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary w-100">Entrar</button>
                        </form>
                        <div class="d-flex flex-column align-items-center">
                            <p class="mt-3">Ainda não tem uma conta? <a href="SignUp.php">Cadastre-se</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 bg-primary d-flex align-items-center justify-content-center" style="height: 515px;">
                <div class="card card-container bg-primary text-white" style="border: none; box-shadow: none;">
                    <div class="card-body text-center">
                        <h3 class="card-title">Bem-vindo ao Skyllsync</h3>
                        <p class="card-text">Faça login para acessar sua conta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $retornoLoginUsuario = $Autenticacao->Login($email, $senha);
    echo '<div class="d-flex justify-content-center mt-3">';
    if ($retornoLoginUsuario) {
        // Mensagem de sucesso (verde)
        echo '<div class="alert alert-success  w-50">
                <strong>Sucesso:</strong> Autenticação realizada com sucesso!
              </div>';
    } else {
        // Mensagem de erro (vermelho)
        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Email e/ou senha incorretos.
              </div>';
    }
    echo '</div>';
}
?>