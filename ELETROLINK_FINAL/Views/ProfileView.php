
<?php
session_start();

// Verifica se existe um usuário logado
if (!isset($_SESSION['usuario'])) {
    header("Location: LoginView.php");
    exit;
}

// Recupera os dados do usuário
$usuario = $_SESSION['usuario'];

// Formata a data de cadastro
$dataCadastro = 'Não informada';

if (!empty($usuario['data_cadastro'])) {
    $dataCadastro = date(
        'd/m/Y H:i',
        strtotime($usuario['data_cadastro'])
    );
}

// Encerra a sessão ao clicar em sair
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    $_SESSION = [];
    session_destroy();

    header("Location: LoginView.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/Global.css">
    <link rel="stylesheet" href="../assets/css/Navbar.css">
    <link rel="stylesheet" href="../assets/css/profile.css?v=2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Meu Perfil - EletroLink</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="nav-bar">

        <div class="logo-area">
            <div class="logo">EletroLink</div>
        </div>

        <ul class="nav-list">
            <li class="nav-links">
                <a class="nav-link" href="HomeView.php">Home</a>
            </li>
        </ul>

    </nav>

    <!-- ÁREA DO PERFIL -->
    <main class="profile-page">

        <!-- CABEÇALHO DO PERFIL -->
        <section class="profile-header">

            <div class="profile-info">

                <i class="fa-solid fa-circle-user profile-avatar"></i>

                <div class="profile-user-data">

                    <h1>
                        <?= htmlspecialchars($usuario['usuario']) ?>
                    </h1>

                    <p>
                        <?= htmlspecialchars($usuario['email']) ?>
                    </p>

                    <p>
                        Cadastro: <?= htmlspecialchars($dataCadastro) ?>
                    </p>

                    <span class="profile-badge">
                        Minha conta
                    </span>

                </div>

            </div>

            <div class="profile-actions">

                <button
                    class="profile-btn secondary"
                    onclick="window.location.href='HomeView.php'"
                    type="button">

                    <i class="fa-solid fa-house"></i>
                    Voltar para Home

                </button>

                <form method="POST">

                    <button
                        class="profile-btn secondary"
                        id="logoutBtn"
                        type="submit"
                        name="logout"
                        value="1">

                        <i class="fa-solid fa-right-from-bracket"></i>
                        Sair da conta

                    </button>

                </form>

            </div>

        </section>

        <!-- CONTEÚDO DO PERFIL -->
        <section class="profile-content">

            <div class="profile-section-title">

                <i class="fa-solid fa-user-gear"></i>

                <div>
                    <h2>Meu Perfil</h2>

                    <p>
                        Consulte suas informações cadastrais.
                    </p>
                </div>

            </div>

            <!-- INFORMAÇÕES DA CONTA -->
            <div class="profile-card">

                <h3>
                    <i class="fa-solid fa-address-card"></i>
                    Dados da conta
                </h3>

                <div class="profile-details">

                    <div class="profile-detail-item">

                        <span>Nome de usuário</span>

                        <strong>
                            <?= htmlspecialchars($usuario['usuario']) ?>
                        </strong>

                    </div>

                    <div class="profile-detail-item">

                        <span>E-mail</span>

                        <strong>
                            <?= htmlspecialchars($usuario['email']) ?>
                        </strong>

                    </div>

                    <div class="profile-detail-item">

                        <span>CPF</span>

                        <strong>
                            <?= htmlspecialchars($usuario['cpf']) ?>
                        </strong>

                    </div>

                    <div class="profile-detail-item">

                        <span>CEP</span>

                        <strong>
                            <?= htmlspecialchars($usuario['cep']) ?>
                        </strong>

                    </div>

                    <div class="profile-detail-item">

                        <span>Data de cadastro</span>

                        <strong>
                            <?= htmlspecialchars($dataCadastro) ?>
                        </strong>

                    </div>

                </div>

            </div>

            <!-- INFORMAÇÕES DA PLATAFORMA -->
            <div class="profile-card profile-about">

                <div class="profile-about-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <div>
                    <h3>Bem-vindo à EletroLink!</h3>

                    <p>
                        Sua plataforma de conexão com profissionais
                        da área elétrica. Encontre serviços e
                        profissionais de maneira simples e prática.
                    </p>
                </div>

            </div>

        </section>

    </main>

</body>
</html>
