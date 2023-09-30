<?php

namespace App\Controller\Pages;
require_once __DIR__ . '/../../Config/config.php';
require __DIR__ . '/../../../vendor/autoload.php';
use \App\Utils\View;
use \App\Config\Conexao;

class Servico
{
    public static function CadastrarServiço($nome, $valor, $descricao)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        
        $sql = "INSERT INTO servicos (nome, valor, descricao) VALUES (?, ?, ?)";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("ssd", $nome, $valor, $descricao);

        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }

    }


}

