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

    public static function SolicitarServiço($nome, $valor, $descricao, $id_solicitador)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "INSERT INTO solicitarservico (Nome, Valor, Descricao, disponibilidade, solicitador_id) VALUES (?, ?, ?, 1, ?)";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("sdsi", $nome, $valor, $descricao, $id_solicitador);

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


    public static function ConsultarServicosSolicitados($id_solicitador)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM solicitarservico WHERE solicitador_id = $id_solicitador";
        $result = $conectado->query($sql);
        return $result;
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


    public static function ObterNomeSolicitador($solicitador_id)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "SELECT Nome FROM usuarios WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("i", $solicitador_id);

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

    public static function ExcluirServico($idServico)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "DELETE FROM servicos WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("i", $idServico);

        // Execute a consulta SQL
        if ($stmt->execute()) {
            // Verifique se algum registro foi afetado (ou seja, se a exclusão foi bem-sucedida)
            if ($stmt->affected_rows > 0) {
                return 1;
            } else {
                return -1;
            }
        } else {
            return 0;
        }
    }

    public static function ExcluirSolicitacao($idServico)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "DELETE FROM solicitarservico WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("i", $idServico);

        // Execute a consulta SQL
        if ($stmt->execute()) {
            // Verifique se algum registro foi afetado (ou seja, se a exclusão foi bem-sucedida)
            if ($stmt->affected_rows > 0) {
                return 1;
            } else {
                return -1;
            }
        } else {
            return 0;
        }
    }

    public static function AlterarServico($idServico, $nome, $valor, $descricao, $disponibilidade)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "UPDATE servicos SET Nome = ?, Valor = ?, Descricao = ?, Disponibilidade = ? WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("ssssi", $nome, $valor, $descricao, $disponibilidade, $idServico);

        // Execute a consulta SQL
        if ($stmt->execute()) {
            // Verifique se algum registro foi afetado (ou seja, se a atualização foi bem-sucedida)
            if ($stmt->affected_rows > 0) {
                return 1; // Sucesso
            } else {
                return -1; // Nenhum registro foi atualizado (talvez o ID não exista)
            }
        } else {
            return 0; // Erro na execução da consulta SQL
        }
    }


    public static function AlterarSolicitacao($idServico, $nome, $valor, $descricao, $disponibilidade)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "UPDATE solicitarservico SET Nome = ?, Valor = ?, Descricao = ?, Disponibilidade = ? WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("ssssi", $nome, $valor, $descricao, $disponibilidade, $idServico);

        // Execute a consulta SQL
        if ($stmt->execute()) {
            // Verifique se algum registro foi afetado (ou seja, se a atualização foi bem-sucedida)
            if ($stmt->affected_rows > 0) {
                return 1; // Sucesso
            } else {
                return -1; // Nenhum registro foi atualizado (talvez o ID não exista)
            }
        } else {
            return 0; // Erro na execução da consulta SQL
        }
    }

    public static function PesquisarServicos($pesquisa)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM servicos WHERE Nome LIKE '%$pesquisa%' OR Valor LIKE '%$pesquisa%' OR Descricao LIKE '%$pesquisa%' AND disponibilidade = 1";
        $result = $conectado->query($sql);
        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public static function PesquisarServicosPrestador($id_prestador, $pesquisa)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM servicos WHERE (Nome LIKE '%$pesquisa%' OR Valor LIKE '%$pesquisa%' OR Descricao LIKE '%$pesquisa%') AND prestador_id = $id_prestador";
        $result = $conectado->query($sql);
        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public static function PesquisarSolicitacoesPrestador($id_prestador, $pesquisa)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM solicitarservico WHERE (Nome LIKE '%$pesquisa%' OR Valor LIKE '%$pesquisa%' OR Descricao LIKE '%$pesquisa%') AND solicitador_id = $id_prestador";
        $result = $conectado->query($sql);
        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public static function ConsultarSolicitacoes()
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM solicitarservico WHERE disponibilidade = 1";
        $result = $conectado->query($sql);
        return $result;
    }

    public static function PesquisarSolicitacoes($pesquisa)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT * FROM solicitarservico WHERE Nome LIKE '%$pesquisa%' OR Valor LIKE '%$pesquisa%' OR Descricao LIKE '%$pesquisa%' AND disponibilidade = 1";
        $result = $conectado->query($sql);
        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }

}
