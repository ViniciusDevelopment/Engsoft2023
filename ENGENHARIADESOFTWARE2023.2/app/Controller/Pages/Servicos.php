<?php

namespace App\Controller\Pages;

require_once __DIR__ . '/../../Config/config.php';
require __DIR__ . '/../../../vendor/autoload.php';

use \App\Utils\View;
use \App\Config\Conexao;

class Servico
{
    public static function CadastrarServiço($nome, $valor, $descricao, $id_prestador)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "INSERT INTO servicos (Nome, Valor, Descricao, disponibilidade, prestador_id) VALUES (?, ?, ?, 1, ?)";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("sdsi", $nome, $valor, $descricao, $id_prestador);

        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }
    public static function ConsultarServicos()
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM servicos WHERE disponibilidade = 1";
        $result = $conectado->query($sql);
        return $result;
    }
    public static function ConsultarServicosPrestador($id_prestador)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM servicos WHERE prestador_id = $id_prestador";
        $result = $conectado->query($sql);
        return $result;
    }

    public static function ConsultarServicosid($id)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM servicos WHERE id = $id";
        $result = $conectado->query($sql);
        return $result;
    }

    public static function alterarservico($id, $nome, $valor, $descricao, $disponibilidade)
    {
      $conexao = new Conexao;
      $conectado = $conexao->conectarBancoDeDados();

      $sql = "UPDATE servicos SET Nome = ?, Valor = ?, Descricao = ?, disponibilidade = ? WHERE id = ?";
      $stmt = $conectado->prepare($sql);
      $stmt->bind_param("sdssi", $nome, $valor, $descricao, $disponibilidade, $id);

      if ($stmt->execute()) {
          return true; // Atualização bem-sucedida
      } else {
          return false; // Erro na atualização
      }
  }
    public static function ObterNomePrestador($prestador_id)
{
    $conexao = new Conexao;
    $conectado = $conexao->conectarBancoDeDados();

    $sql = "SELECT Nome FROM usuarios WHERE Id = ?";
    $stmt = $conectado->prepare($sql);
    $stmt->bind_param("i", $prestador_id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['Nome']; // Retorna o nome do prestador
        } else {
            return "Prestador não encontrado";
        }
    } else {
        return "Erro na consulta";
    }
}
}
