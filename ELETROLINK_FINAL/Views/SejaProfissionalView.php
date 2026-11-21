<?php

$beneficios = [
    [
        "icone" => "fa-briefcase",
        "titulo" => "Novas oportunidades",
        "descricao" => "Encontre clientes que precisam dos seus serviços e amplie suas possibilidades de trabalho."
    ],
    [
        "icone" => "fa-chart-line",
        "titulo" => "Crescimento profissional",
        "descricao" => "Conquiste experiência, desenvolva suas habilidades e construa sua reputação no mercado."
    ],
    [
        "icone" => "fa-users",
        "titulo" => "Mais conexões",
        "descricao" => "Aproxime-se de pessoas e empresas que procuram profissionais da área elétrica."
    ],
    [
        "icone" => "fa-clock",
        "titulo" => "Mais praticidade",
        "descricao" => "Encontre oportunidades de maneira simples, organizada e acessível."
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/Global.css">
    <link rel="stylesheet" href="../assets/css/Navbar.css">
    <link rel="stylesheet" href="../assets/css/Footer.css">
    <link rel="stylesheet" href="../assets/css/SejaProfissional.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Seja um Profissional | EletroLink</title>


</head>

<body>

    <!-- NAVBAR -->

    <nav class="nav-bar">

        <div class="logo-area">

            <a href="homeView.php"
               style="text-decoration:none;color:inherit;">

                <div class="logo">EletroLink</div>

            </a>

        </div>

        <div class="user-actions">

            <div id="userProfileIcon"
                 style="display:none;align-items:center;gap:6px;">


                <a href="ProfileView.php">

                    <i class="fa-solid fa-user-circle"
                       style="font-size:32px;color:white;"></i>

                </a>

            </div>

           
        </div>

    </nav>


    <!-- BANNER -->

    <section class="professional-banner">

        <div class="banner-content">

            <h1>
                Sua profissão merece
                <span>novas oportunidades!</span>
            </h1>

            <p>
                Faça parte da EletroLink e conecte seus conhecimentos
                a novas oportunidades de trabalho. Mostre seu talento,
                conquiste clientes e desenvolva sua carreira na área elétrica.
            </p>

            <a href="#cadastro" class="banner-button">

                Quero fazer parte

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>


        <div class="banner-image">

            <img
                src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&fit=crop&w=1000&q=85"
                alt="Eletricista profissional realizando instalação elétrica">

        </div>

    </section>


    <!-- BENEFÍCIOS -->

    <section class="benefits-section">

        <h2 class="section-title">
            Por que fazer parte da EletroLink?
        </h2>

        <p class="section-description">
            Uma plataforma criada para aproximar profissionais
            de novas possibilidades.
        </p>


        <div class="benefits-grid">

            <?php foreach ($beneficios as $beneficio): ?>

                <div class="benefit-card">

                    <i class="fa-solid <?php echo $beneficio['icone']; ?>"></i>

                    <h3>
                        <?php echo htmlspecialchars($beneficio['titulo']); ?>
                    </h3>

                    <p>
                        <?php echo htmlspecialchars($beneficio['descricao']); ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- COMO FUNCIONA -->

    <section class="how-section">

        <h2 class="section-title">
            Como funciona?
        </h2>

        <p class="section-description">
            Começar na EletroLink é simples!
        </p>


        <div class="steps-container">

            <div class="step">

                <div class="step-number">1</div>

                <h3>Faça seu cadastro</h3>

                <p>
                    Informe seus dados pessoais e profissionais
                    para criar sua conta na plataforma.
                </p>

            </div>


            <div class="step">

                <div class="step-number">2</div>

                <h3>Apresente suas habilidades</h3>

                <p>
                    Informe suas especialidades, experiências
                    e os serviços que você está preparado para realizar.
                </p>

            </div>


            <div class="step">

                <div class="step-number">3</div>

                <h3>Encontre oportunidades</h3>

                <p>
                    Conecte-se com clientes interessados
                    em contratar seus serviços elétricos.
                </p>

            </div>

        </div>

    </section>


    <!-- CADASTRO INICIAL -->

    <section class="register-section" id="cadastro">

        <div class="register-container">

            <h2>Comece sua jornada na EletroLink!</h2>

            <p>
                Preencha as informações iniciais
                e dê o primeiro passo para fazer parte da plataforma.
            </p>


        <form id="professionalForm"
      action="CadastroProfissional.php"
      method="POST">

                <div class="form-group">

                    <label for="nome">
                        Nome completo
                    </label>

                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome completo"
                        required>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="email">
                            E-mail
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="seuemail@email.com"
                            required>

                    </div>


                    <div class="form-group">

                        <label for="telefone">
                            Telefone
                        </label>

                        <input
                            type="tel"
                            id="telefone"
                            name="telefone"
                            placeholder="(21) 99999-9999"
                            required>

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="especialidade">
                            Especialidade
                        </label>

                        <select id="especialidade"
                                name="especialidade"
                                required>

                            <option value="">
                                Selecione sua especialidade
                            </option>

                            <option value="Instalação Elétrica">
                                Instalação Elétrica
                            </option>

                            <option value="Manutenção Elétrica">
                                Manutenção Elétrica
                            </option>

                            <option value="Reparos Elétricos">
                                Reparos Elétricos
                            </option>

                            <option value="Instalação Residencial">
                                Instalação Residencial
                            </option>

                            <option value="Instalação Comercial">
                                Instalação Comercial
                            </option>

                            <option value="Outros">
                                Outros
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="experiencia">
                            Tempo de experiência
                        </label>

                        <select id="experiencia"
                                name="experiencia"
                                required>

                            <option value="">
                                Selecione
                            </option>

                            <option value="Iniciante">
                                Estou começando
                            </option>

                            <option value="1 a 2 anos">
                                1 a 2 anos
                            </option>

                            <option value="3 a 5 anos">
                                3 a 5 anos
                            </option>

                            <option value="Mais de 5 anos">
                                Mais de 5 anos
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-group">

                    <label for="localizacao">
                        Cidade / Região de atuação
                    </label>

                    <input
                        type="text"
                        id="localizacao"
                        name="localizacao"
                        placeholder="Ex: Duque de Caxias - RJ"
                        required>

                </div>


                <div class="form-group">

                    <label for="descricao">
                        Fale um pouco sobre você
                    </label>

                    <textarea
                        id="descricao"
                        name="descricao"
                        placeholder="Conte sobre suas habilidades, conhecimentos e serviços oferecidos..."
                        required></textarea>

                </div>


                <button type="submit" class="submit-button">

                    Enviar informações

                    <i class="fa-solid fa-arrow-right"></i>

                </button>


                <div class="form-message" id="formMessage">

                    <i class="fa-solid fa-circle-check"></i>

                    Informações recebidas! Continue seu cadastro
                    para fazer parte da EletroLink.

                </div>

            </form>

        </div>

    </section>


    <!-- CHAMADA FINAL -->

    <section class="final-section">

        <h2>Seu talento pode chegar ainda mais longe!</h2>

        <p>
            A EletroLink acredita no potencial dos profissionais
            da área elétrica. Venha fazer parte dessa conexão.
        </p>


    </section>



    <!-- JAVASCRIPT -->
  <script src="../assets/JS/SejaProfissional.js"></script>

</body>

</html>