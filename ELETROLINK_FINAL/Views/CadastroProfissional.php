<?php

require_once "Conexao.php";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recebe os dados do formulário
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $especialidade = trim($_POST["especialidade"] ?? "");
    $experiencia = trim($_POST["experiencia"] ?? "");
    $localizacao = trim($_POST["localizacao"] ?? "");
    $descricao = trim($_POST["descricao"] ?? "");

    // Verifica se os campos estão preenchidos
    if (
        $nome === "" ||
        $email === "" ||
        $telefone === "" ||
        $especialidade === "" ||
        $experiencia === "" ||
        $localizacao === "" ||
        $descricao === ""
    ) {

        die("Preencha todos os campos!");

    }

    // Verifica se o e-mail é válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        die("Digite um e-mail válido!");

    }

    try {

        // Comando SQL para inserir os dados
        $sql = "INSERT INTO profissionais
        (nome, email, telefone, especialidade,
        experiencia, localizacao, descricao)

        VALUES
        (:nome, :email, :telefone, :especialidade,
        :experiencia, :localizacao, :descricao)";

        // Prepara a consulta
        $comando = $conexao->prepare($sql);

        // Envia os valores para o banco
        $comando->execute([
            ":nome" => $nome,
            ":email" => $email,
            ":telefone" => $telefone,
            ":especialidade" => $especialidade,
            ":experiencia" => $experiencia,
            ":localizacao" => $localizacao,
            ":descricao" => $descricao
        ]);

        // Redireciona após o cadastro
        header("Location: SejaProfissionalView.php?cadastro=sucesso");
        exit;

    } catch (PDOException $erro) {

        if ($erro->getCode() == "23000") {

            die("Este e-mail já está cadastrado!");

        }

        die("Erro ao cadastrar profissional.");

    }

}

?>