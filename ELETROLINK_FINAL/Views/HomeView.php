<?php
session_start();

$usuarioLogado = $_SESSION['usuario'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/Global.css">
    <link rel="stylesheet" href="../assets/css/Navbar.css">
    <link rel="stylesheet" href="../assets/css/Footer.css">
    <link rel="stylesheet" href="../assets/css/produtos.css">
    <link rel="stylesheet" href="../assets/css/Dashboard.css">
     <link rel="stylesheet" href="../assets/css/Home.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>EletroLink - Conectando profissionais e clientes</title>

</head>

<body>

    <!-- NAVBAR -->

  
<!-- NAVBAR -->
 <!-- NAVBAR -->
<nav class="nav-bar">

    <div class="logo-area">
        <a href="HomeView.php" style="text-decoration:none;color:inherit;">
            <div class="logo">EletroLink</div>
        </a>
    </div>

    <div class="user-actions">

        <?php if ($usuarioLogado): ?>

            <div id="userProfileIcon"
                 style="display:flex;align-items:center;gap:10px;">

                <span id="navbarUserName"
                      style="color:white;font-weight:bold;">
                    Olá, <?= htmlspecialchars(explode(' ', $usuarioLogado['usuario'])[0]) ?>
                </span>

                <a href="ProfileView.php" title="Meu Perfil">
                    <i class="fa-solid fa-user-circle"
                       style="font-size:32px;color:white;"></i>
                </a>

            </div>

        <?php endif; ?>

    </div>

</nav>



    <!-- HOME / BANNER PRINCIPAL -->

    <section class="hero" id="home">

        <div class="hero-content">

            <h1>
                Conectando você aos melhores
                <span>profissionais elétricos.</span>
            </h1>

            <p>
                Na EletroLink, clientes encontram profissionais
                qualificados para seus serviços elétricos,
                enquanto eletricistas descobrem novas oportunidades
                para crescer profissionalmente.
            </p>

            <div class="hero-buttons">

                <a href="ProfissionalView.php" class="btn-primary">
                    Encontrar profissional
                </a>

                <a href="SejaProfissionalView.php" class="btn-secondary">
                    Seja um profissional
                </a>

            </div>

        </div>

        <div class="hero-image">

            <img
                src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&fit=crop&w=1000&q=85"
                alt="Eletricista profissional realizando instalação elétrica">

        </div>

    </section>


    <!-- SERVIÇOS E OPORTUNIDADES -->

    <section class="services-section" id="services">

        <h2>O que você encontra na EletroLink?</h2>

        <p class="services-description">
            Uma plataforma que conecta necessidades a oportunidades.
        </p>

        <div class="services-container">

            <div class="service-card">

                <img
                    src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?auto=format&fit=crop&w=800&q=85"
                    alt="Profissional trabalhando em instalação elétrica">

                <div class="service-card-content">

                    <h3>Serviços Elétricos</h3>

                    <p>
                        Encontre profissionais preparados para
                        realizar instalações, manutenções e reparos
                        elétricos com qualidade e segurança.
                    </p>

                </div>

            </div>


            <div class="service-card">

                <img
                    src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&q=85"
                    alt="Profissional técnico trabalhando">

                <div class="service-card-content">

                    <h3>Oportunidades Profissionais</h3>

                    <p>
                        Tenha acesso a novas oportunidades de trabalho,
                        desenvolva suas habilidades e amplie sua
                        experiência no mercado.
                    </p>

                </div>

            </div>


            <div class="service-card">

                <img
                    src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=85"
                    alt="Eletricista realizando manutenção">

                <div class="service-card-content">

                    <h3>Conexões e Confiança</h3>

                    <p>
                        Aproximamos clientes e profissionais,
                        facilitando o contato e a contratação
                        de serviços elétricos.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- SOBRE A ELETROLINK -->

    <section class="about-section" id="about">

        <h2>Sobre a EletroLink</h2>

        <p>
            A EletroLink nasceu com o propósito de transformar
            a conexão entre profissionais da área elétrica e clientes.
            Nossa plataforma busca facilitar o acesso a serviços
            especializados e criar oportunidades para profissionais
            que desejam ingressar ou crescer no mercado de trabalho.
            Acreditamos que conectar pessoas é o primeiro passo
            para construir novas oportunidades.
        </p>

    </section>

    <!-- JAVASCRIPT ORIGINAL -->

    <script src="assets/JS/AddCart.js"></script>
    <script src="assets/JS/Forms.js"></script>


</body>
</html>