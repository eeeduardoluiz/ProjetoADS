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

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Seja um Profissional | EletroLink</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f7f9f8;
            font-family: Arial, sans-serif;
        }

        /* BANNER PRINCIPAL */

        .professional-banner {
            min-height: 460px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 8%;
            gap: 40px;
            background: #edf5f0;
        }

        .banner-content {
            max-width: 540px;
        }

        .banner-content h1 {
            color: #183b32;
            font-size: 40px;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .banner-content h1 span {
            color: #16a36a;
        }

        .banner-content p {
            color: #555;
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 28px;
        }

        .banner-button {
            display: inline-block;
            padding: 14px 25px;
            background: #16a36a;
            color: white;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
            transition: .3s;
        }

        .banner-button:hover {
            background: #128454;
        }

        .banner-image {
            width: 48%;
        }

        .banner-image img {
            width: 100%;
            height: 340px;
            object-fit: cover;
            border-radius: 15px;
        }

        /* BENEFÍCIOS */

        .benefits-section {
            padding: 70px 8%;
            text-align: center;
        }

        .section-title {
            color: #183b32;
            font-size: 30px;
            margin-bottom: 12px;
        }

        .section-description {
            color: #777;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .benefit-card {
            background: white;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,.07);
            transition: .3s;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
        }

        .benefit-card i {
            font-size: 35px;
            color: #16a36a;
            margin-bottom: 20px;
        }

        .benefit-card h3 {
            color: #183b32;
            font-size: 18px;
            margin-bottom: 12px;
        }

        .benefit-card p {
            color: #777;
            font-size: 14px;
            line-height: 1.7;
        }

        /* COMO FUNCIONA */

        .how-section {
            background: #edf5f0;
            padding: 65px 8%;
            text-align: center;
        }

        .steps-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .step {
            background: white;
            padding: 30px 20px;
            border-radius: 12px;
        }

        .step-number {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #16a36a;
            color: white;
            font-size: 21px;
            font-weight: bold;
            border-radius: 50%;
            margin: 0 auto 18px;
        }

        .step h3 {
            color: #183b32;
            margin-bottom: 12px;
        }

        .step p {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
        }

        /* FORMULÁRIO */

        .register-section {
            padding: 70px 8%;
        }

        .register-container {
            max-width: 750px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 3px 18px rgba(0,0,0,.08);
        }

        .register-container h2 {
            color: #183b32;
            text-align: center;
            margin-bottom: 12px;
        }

        .register-container > p {
            color: #777;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #333;
            font-weight: bold;
            margin-bottom: 9px;
            font-size: 14px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 7px;
            outline: none;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #16a36a;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 110px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .submit-button {
            width: 100%;
            padding: 15px;
            background: #16a36a;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        .submit-button:hover {
            background: #128454;
        }

        .form-message {
            display: none;
            margin-top: 18px;
            padding: 13px;
            background: #e2f8ec;
            color: #16834f;
            border-radius: 7px;
            text-align: center;
        }

        /* CHAMADA FINAL */

        .final-section {
            background: #183b32;
            padding: 55px 8%;
            text-align: center;
            color: white;
        }

        .final-section h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .final-section p {
            line-height: 1.7;
            margin-bottom: 25px;
            color: #e0eee7;
        }

        .final-section a {
            display: inline-block;
            padding: 14px 25px;
            background: #16a36a;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
        }

        /* RESPONSIVIDADE */

        @media(max-width: 900px) {

            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width: 700px) {

            .professional-banner {
                flex-direction: column;
                padding: 45px 6%;
            }

            .banner-content h1 {
                font-size: 32px;
            }

            .banner-image {
                width: 100%;
            }

            .banner-image img {
                height: 260px;
            }

            .steps-container {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .register-container {
                padding: 25px 18px;
            }

        }

        @media(max-width: 480px) {

            .benefits-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

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

        <a href="LoginView.php">

            Acessar minha conta

            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </section>



    <!-- JAVASCRIPT -->

    <script>

<?php if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'sucesso'): ?>

    <div class="form-message" style="display:block;">

        <i class="fa-solid fa-circle-check"></i>

        Cadastro realizado com sucesso!
        Seus dados foram registrados na EletroLink.

    </div>

<?php endif; ?>

        // IDENTIFICAÇÃO DO USUÁRIO

        document.addEventListener('DOMContentLoaded', () => {

            const usuario = JSON.parse(
                localStorage.getItem('usuarioLogado')
            );

            const userIcon =
                document.getElementById('userProfileIcon');

            const loginBtns =
                document.getElementById('btns_login');

            const navbarName =
                document.getElementById('navbarUserName');

            if (usuario && usuario.usuario) {

                const primeiroNome =
                    usuario.usuario.split(' ')[0];

                navbarName.textContent = primeiroNome;

                userIcon.style.display = 'flex';

                if (loginBtns) {

                    loginBtns.style.display = 'none';

                }

            }

        });

    </script>

</body>

</html>