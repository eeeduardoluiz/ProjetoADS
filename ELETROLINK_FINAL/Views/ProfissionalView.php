
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
    <link rel="stylesheet" href="../assets/css/Profissional.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Encontrar Profissionais | EletroLink</title>

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
   <script src="../assets/JS/Login.js"></script>
   
</body>

</html>