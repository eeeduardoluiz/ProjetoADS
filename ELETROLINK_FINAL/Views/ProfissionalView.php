
<?php

require_once "Conexao.php";

// Busca os profissionais cadastrados no banco
$sql = "SELECT * FROM profissionais ORDER BY data_cadastro DESC";

$consulta = $conexao->prepare($sql);

$consulta->execute();

// Armazena os resultados em um array
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);


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

    <title>Encontrar Profissionais | EletroLink</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f7f9f8;
            font-family: Arial, sans-serif;
        }

        /* BANNER */

        .professional-hero {
            background: linear-gradient(120deg, #183b32, #16a36a);
            padding: 65px 8%;
            color: white;
            text-align: center;
        }

        .professional-hero h1 {
            font-size: 38px;
            margin-bottom: 15px;
        }

        .professional-hero p {
            font-size: 17px;
            max-width: 650px;
            margin: auto;
            line-height: 1.6;
        }

        /* PESQUISA */

        .search-section {
            max-width: 1000px;
            margin: -30px auto 45px;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.09);
            position: relative;
        }

        .search-section h2 {
            color: #183b32;
            margin-bottom: 20px;
            font-size: 21px;
        }

        .search-fields {
            display: flex;
            gap: 15px;
        }

        .search-input {
            flex: 1;
            position: relative;
        }

        .search-input i {
            position: absolute;
            left: 15px;
            top: 17px;
            color: #16a36a;
        }

        .search-input input,
        .search-fields select {
            width: 100%;
            padding: 15px 15px 15px 42px;
            border: 1px solid #ddd;
            border-radius: 7px;
            outline: none;
            font-size: 14px;
        }

        .search-fields select {
            padding-left: 15px;
            max-width: 240px;
            background: white;
        }

        .search-input input:focus,
        .search-fields select:focus {
            border-color: #16a36a;
        }

        /* PROFISSIONAIS */

        .professionals-section {
            padding: 0 8% 70px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
        }

        .section-header h2 {
            color: #183b32;
            font-size: 27px;
        }

        .section-header span {
            color: #777;
            font-size: 14px;
        }

        .professionals-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .professional-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.07);
            transition: 0.3s;
        }

        .professional-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.12);
        }

        .professional-image {
            height: 190px;
            position: relative;
        }

        .professional-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .available {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #e2f8ec;
            color: #16834f;
            padding: 6px 10px;
            font-size: 11px;
            border-radius: 20px;
            font-weight: bold;
        }

        .professional-info {
            padding: 18px;
        }

        .professional-info h3 {
            color: #183b32;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .specialty {
            color: #16a36a;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .professional-details {
            color: #777;
            font-size: 13px;
            line-height: 2;
        }

        .professional-details i {
            color: #16a36a;
            width: 19px;
        }

        .rating {
            margin: 12px 0;
            color: #f0ad24;
            font-size: 14px;
        }

        .rating span {
            color: #555;
            margin-left: 5px;
        }

        .professional-button {
            display: block;
            width: 100%;
            background: #16a36a;
            color: white;
            text-align: center;
            padding: 12px;
            border-radius: 7px;
            text-decoration: none;
            margin-top: 15px;
            font-weight: bold;
            transition: 0.3s;
        }

        .professional-button:hover {
            background: #128454;
        }

        .no-results {
            display: none;
            text-align: center;
            padding: 40px;
            color: #777;
            grid-column: 1 / -1;
        }

        /* CHAMADA FINAL */

        .join-section {
            background: #edf5f0;
            padding: 55px 8%;
            text-align: center;
        }

        .join-section h2 {
            color: #183b32;
            font-size: 28px;
            margin-bottom: 15px;
        }

        .join-section p {
            color: #666;
            margin-bottom: 25px;
        }

        .join-button {
            display: inline-block;
            background: #16a36a;
            color: white;
            padding: 14px 25px;
            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
        }

        /* RESPONSIVIDADE */

        @media(max-width: 1000px) {

            .professionals-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width: 600px) {

            .professional-hero h1 {
                font-size: 29px;
            }

            .search-section {
                margin: -20px 15px 35px;
            }

            .search-fields {
                flex-direction: column;
            }

            .search-fields select {
                max-width: 100%;
            }

            .professionals-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                align-items: flex-start;
                flex-direction: column;
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


                <a href="ProfileView.php" title="Meu Perfil">

                    <i class="fa-solid fa-user-circle"
                       style="font-size:32px;color:white;"></i>

                </a>

            </div>

        </div>

    </nav>


    <!-- BANNER PRINCIPAL -->

    <section class="professional-hero">

        <h1>Encontre o profissional ideal!</h1>

        <p>
            Encontre eletricistas qualificados para atender
            suas necessidades. Na EletroLink, conectamos você
            a profissionais preparados para transformar
            suas necessidades em soluções.
        </p>

    </section>


    <!-- PESQUISA E FILTROS -->

    <section class="search-section">

        <h2>Encontre um profissional</h2>

        <div class="search-fields">

            <div class="search-input">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input
                    type="text"
                    id="searchName"
                    placeholder="Pesquise por nome ou especialidade">

            </div>

            <select id="filterCategory">

                <option value="todos">Todas as especialidades</option>

                <option value="instalacao">Instalação Elétrica</option>

                <option value="manutencao">Manutenção Elétrica</option>

                <option value="reparos">Reparos Elétricos</option>

            </select>

        </div>

    </section>


    <!-- LISTAGEM DE PROFISSIONAIS -->

    <section class="professionals-section">

        <div class="section-header">

            <h2>Profissionais disponíveis</h2>

        </div>


        <div class="professionals-grid" id="professionalsGrid">

            <?php foreach ($profissionais as $profissional): ?>

    <?php

    // Define a categoria para os filtros
    $especialidade = strtolower($profissional['especialidade']);

    if (strpos($especialidade, 'instalação') !== false) {
        $categoria = 'instalacao';

    } elseif (strpos($especialidade, 'manutenção') !== false) {
        $categoria = 'manutencao';

    } else {
        $categoria = 'reparos';
    }

    ?>

    <div class="professional-card"

         data-name="<?php echo htmlspecialchars($profissional['nome']); ?>"

         data-specialty="<?php echo htmlspecialchars($profissional['especialidade']); ?>"

         data-category="<?php echo $categoria; ?>">

        <div class="professional-image">

            <img
                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                alt="Foto ilustrativa do profissional">

            <span class="available">
                <i class="fa-solid fa-circle-check"></i>
                Cadastrado
            </span>

        </div>


        <div class="professional-info">

            <h3>
                <?php echo htmlspecialchars($profissional['nome']); ?>
            </h3>

            <div class="specialty">

                <?php echo htmlspecialchars($profissional['especialidade']); ?>

            </div>


            <div class="professional-details">

                <div>
                    <i class="fa-solid fa-location-dot"></i>

                    <?php echo htmlspecialchars($profissional['localizacao']); ?>
                </div>

                <div>
                    <i class="fa-solid fa-briefcase"></i>

                    <?php echo htmlspecialchars($profissional['experiencia']); ?>
                </div>

            </div>


            <div class="rating">

                <i class="fa-solid fa-user-check"></i>

                <span>Perfil cadastrado</span>

            </div>


            <a href="LoginView.php" class="professional-button">

                Solicitar serviço

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

<?php endforeach; ?>

            <div class="no-results" id="noResults">

                <i class="fa-solid fa-magnifying-glass"
                   style="font-size:35px;margin-bottom:15px;"></i>

                <h3>Nenhum profissional encontrado.</h3>

                <p>Tente pesquisar por outra especialidade ou nome.</p>

            </div>

        </div>

    </section>


    <!-- CHAMADA PARA PROFISSIONAIS -->

    <section class="join-section">

        <h2>Você é um profissional da área elétrica?</h2>

        <p>
            Faça parte da EletroLink e encontre novas oportunidades
            para desenvolver sua carreira.
        </p>

        <a href="SejaProfissionalView.php" class="join-button">

            Quero fazer parte

            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </section>



    <!-- JAVASCRIPT -->

    <script>

        // PESQUISA E FILTRO DE PROFISSIONAIS

        const searchName = document.getElementById('searchName');

        const filterCategory = document.getElementById('filterCategory');

        const cards = document.querySelectorAll('.professional-card');

        const noResults = document.getElementById('noResults');

        const resultsCount = document.getElementById('resultsCount');


        function filterProfessionals() {

            const search = searchName.value.toLowerCase().trim();

            const category = filterCategory.value;

            let visibleCount = 0;

            cards.forEach(card => {

                const name = card.dataset.name.toLowerCase();

                const specialty = card.dataset.specialty.toLowerCase();

                const cardCategory = card.dataset.category;

                const matchesSearch =
                    name.includes(search) || specialty.includes(search);

                const matchesCategory =
                    category === 'todos' || category === cardCategory;

                if (matchesSearch && matchesCategory) {

                    card.style.display = 'block';

                    visibleCount++;

                } else {

                    card.style.display = 'none';

                }

            });


            noResults.style.display =
                visibleCount === 0 ? 'block' : 'none';

            resultsCount.textContent =
                visibleCount + (
                    visibleCount === 1
                    ? ' profissional encontrado'
                    : ' profissionais encontrados'
                );

        }


        searchName.addEventListener('input', filterProfessionals);

        filterCategory.addEventListener('change', filterProfessionals);


        // IDENTIFICAÇÃO DO USUÁRIO

        document.addEventListener('DOMContentLoaded', () => {

            const usuario = JSON.parse(
                localStorage.getItem('usuarioLogado')
            );

            const userIcon = document.getElementById('userProfileIcon');

            const loginBtns = document.getElementById('btns_login');

            const navbarName = document.getElementById('navbarUserName');

            if (usuario && usuario.usuario) {

                const primeiroNome = usuario.usuario.split(' ')[0];

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