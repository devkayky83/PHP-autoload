<?php
namespace APP\Modelo;
use App\config\Conexao;
use PDO;

class Cliente {

    public function listar() {
        $db = Conexao::conectar();
        return $db->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inserir($nome, $descricao, $idade) {
        $db = Conexao::conectar();
        $stmt = $db->prepare("INSERT INTO usuarios (nome, descricao, idade) VALUES (?, ?, ?)");
        return $stmt->execute([$nome, $descricao, $idade]);
    }

    public function alterar( $nome, $descricao, $idade) {
        $db = Conexao::conectar();
        $stmt = $db->prepare("UPDATE usuarios SET nome=?, descricao=?, idade=? WHERE id=?");
        return $stmt->execute([$nome, $descricao, $idade]);
    }

    public function deletar($id) {
        $db = Conexao::conectar();
        $stmt = $db->prepare("DELETE FROM usuarios WHERE id=?");
        return $stmt->execute([$id]);
    }
}