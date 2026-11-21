
<?php

require_once __DIR__ . '/../Views/Conexao.php';
require_once __DIR__ . '/../Models/Usuario.php';

class UsuarioDAO {

    private $conexao;

    public function __construct() {
        global $conexao;
        $this->conexao = $conexao;
    }

    public function cadastrar(Usuario $usuario) {

        $sql = "INSERT INTO usuarios
                (usuario, email, cpf, cep, senha)
                VALUES
                (:usuario, :email, :cpf, :cep, :senha)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':usuario', $usuario->getUsuario());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':cpf', $usuario->getCpf());
        $stmt->bindValue(':cep', $usuario->getCep());
        $stmt->bindValue(':senha', password_hash($usuario->getSenha(), PASSWORD_DEFAULT));

        return $stmt->execute();
    }

    public function buscarPorEmail($email) {

        $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarPorCPF($cpf) {

        $sql = "SELECT * FROM usuarios WHERE cpf = :cpf LIMIT 1";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':cpf', $cpf);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
