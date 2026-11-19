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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>EletroLink - Conectando profissionais e clientes</title>

    <style>

        /* HOME PRINCIPAL */

        .hero {
            min-height: 480px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 8%;
            gap: 40px;
            background: #f4f7f5;
        }

        .hero-content {
            max-width: 520px;
        }

        .hero-content h1 {
            font-size: 42px;
            color: #183b32;
            margin-bottom: 20px;
        }

        .hero-content h1 span {
            color: #16a36a;
        }

        .hero-content p {
            font-size: 17px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: #16a36a;
            color: white;
            padding: 14px 25px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-secondary {
            border: 2px solid #16a36a;
            color: #16a36a;
            padding: 12px 23px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
        }

        .hero-image {
            width: 48%;
        }

        .hero-image img {
            width: 100%;
            height: 340px;
            object-fit: cover;
            border-radius: 15px;
        }


        /* SERVIÇOS */

        .services-section {
            padding: 65px 8%;
            text-align: center;
        }

        .services-section h2 {
            font-size: 30px;
            color: #183b32;
            margin-bottom: 12px;
        }

        .services-description {
            color: #666;
            margin-bottom: 35px;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .service-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.09);
            text-align: left;
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
        }

        .service-card-content {
            padding: 20px;
        }

        .service-card h3 {
            color: #183b32;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #666;
            line-height: 1.6;
        }


        /* SOBRE A EMPRESA */

        .about-section {
            background: #edf5f0;
            padding: 65px 8%;
            text-align: center;
        }

        .about-section h2 {
            color: #183b32;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .about-section p {
            max-width: 850px;
            margin: auto;
            line-height: 1.8;
            color: #555;
            font-size: 16px;
        }


        /* RESPONSIVIDADE */

        @media(max-width: 768px) {

            .hero {
                flex-direction: column;
                padding: 40px 6%;
            }

            .hero-content h1 {
                font-size: 32px;
            }

            .hero-image {
                width: 100%;
            }

            .hero-image img {
                height: 260px;
            }

            .services-container {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="nav-bar">

        <div class="logo-area">
            <div class="logo">EletroLink</div>
            <span id="welcomeUser" style="display:none;"></span>
        </div>

        <div class="user-actions">

            <div id="icone" class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
                <p id="count">0</p>
            </div>

            <div id="userProfileIcon"
                 style="display:none;align-items:center;gap:6px;">

                <span id="navbarUserName"
                      style="color:white;font-weight:bold;"></span>

                <a href="ProfileView.php" title="Meu Perfil">
                    <i class="fa-solid fa-user-circle"
                       style="font-size:32px;color:white;"></i>
                </a>

            </div>

            <div class="btns_navbar" id="btns_login">
                <a href="LoginView.php">
                    <button class="btn_login">Login</button>
                </a>
            </div>

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

                <a href="LoginView.php" class="btn-primary">
                    Encontrar profissional
                </a>

                <a href="LoginView.php" class="btn-secondary">
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


    <script>

    document.addEventListener('DOMContentLoaded',()=>{

        const usuario = JSON.parse(
            localStorage.getItem('usuarioLogado')
        );

        const welcome = document.getElementById('welcomeUser');

        const userIcon = document.getElementById('userProfileIcon');

        const loginBtns = document.getElementById('btns_login');

        const navbarName = document.getElementById('navbarUserName');

        if(usuario && usuario.usuario){

            const primeiroNome = usuario.usuario.split(' ')[0];

            welcome.textContent = 'Bem-vindo, ' + primeiroNome;

            welcome.style.display = 'inline';

            navbarName.textContent = '';

            userIcon.style.display = 'flex';

            if(loginBtns) {
                loginBtns.style.display = 'none';
            }

        }

    });

    </script>

</body>
</html>