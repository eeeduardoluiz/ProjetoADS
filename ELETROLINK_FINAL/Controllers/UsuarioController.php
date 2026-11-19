
<?php

session_start();

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../DAO/UsuarioDAO.php';

class UsuarioController {

    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function cadastrar() {

        $usuario = trim($_POST['usuario'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $cpf = preg_replace('/\D/', '', $_POST['cpf'] ?? '');
        $cep = preg_replace('/\D/', '', $_POST['cep'] ?? '');
        $senha = $_POST['senha'] ?? '';

        if (
            $usuario === '' ||
            !filter_var($email, FILTER_VALIDATE_EMAIL) ||
            strlen($cpf) !== 11 ||
            strlen($cep) !== 8 ||
            strlen($senha) < 8
        ) {
            $this->responder(false, 'Preencha os campos corretamente.');
        }

        if ($this->usuarioDAO->buscarPorEmail($email)) {
            $this->responder(false, 'Este email já está cadastrado.');
        }

        if ($this->usuarioDAO->buscarPorCPF($cpf)) {
            $this->responder(false, 'Este CPF já está cadastrado.');
        }

        $novoUsuario = new Usuario(
            $usuario,
            $email,
            $cpf,
            $cep,
            $senha
        );

        if ($this->usuarioDAO->cadastrar($novoUsuario)) {
            $this->responder(true, 'Cadastro realizado com sucesso!');
        }

        $this->responder(false, 'Não foi possível realizar o cadastro.');
    }

    public function login() {

        $email = trim($_POST['email'] ?? '');
        $senha = $_POST['senha'] ?? '';

        $usuario = $this->usuarioDAO->buscarPorEmail($email);

        if (!$usuario || !password_verify($senha, $usuario['senha'])) {
            $this->responder(false, 'Email ou senha incorretos.');
        }

        session_regenerate_id(true);

        $_SESSION['usuario'] = [
            'id' => $usuario['id'],
            'usuario' => $usuario['usuario'],
            'email' => $usuario['email'],
            'cpf' => $usuario['cpf'],
            'cep' => $usuario['cep'],
            'data_cadastro' => $usuario['data_cadastro']
        ];

        $this->responder(true, 'Login realizado com sucesso!');
    }

    private function responder($sucesso, $mensagem) {

        echo json_encode([
            'sucesso' => $sucesso,
            'mensagem' => $mensagem
        ]);

        exit;
    }
}

try {

    $controller = new UsuarioController();

    $acao = $_POST['acao'] ?? '';

    if ($acao === 'cadastro') {
        $controller->cadastrar();

    } elseif ($acao === 'login') {
        $controller->login();

    } else {
        http_response_code(400);

        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Ação inválida.'
        ]);
    }

} catch (Throwable $erro) {

    error_log($erro->getMessage());

    http_response_code(500);

    echo json_encode([
        'sucesso' => false,
        'mensagem' => 'Ocorreu um erro interno. Tente novamente.'
    ]);
}
