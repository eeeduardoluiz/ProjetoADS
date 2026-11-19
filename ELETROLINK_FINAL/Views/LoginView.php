<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/Global.css">
    <link rel="stylesheet" href="../assets/css/Navbar.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/Footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Login - EletroLink</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="nav-bar">
        <div class="logo">EletroLink</div>

        <ul class="nav-list">
            <li class="nav-links">
                <a class="nav-link" href="HomeView.php">Home</a>
            </li>
        </ul>
    </nav>

    <!-- LOGIN E CADASTRO -->
    <main class="body-sl">

        <div class="sl-container" id="sl-container">

            <!-- FORMULÁRIO DE LOGIN -->
            <div class="form-box">

                <form action="" id="form-login" class="form-login">

                    <h1>LOGIN</h1>

                    <p class="form-subtitle">
                        Acesse sua conta na EletroLink
                    </p>

                    <div class="input-box">
                        <input
                            type="email"
                            id="Login-usuario"
                            placeholder="Email"
                            required
                        >
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="input-box">
                        <input
                            type="password"
                            id="Login-senha"
                            placeholder="Senha"
                            required
                        >
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="forgot-link">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>

                    <button type="submit" class="btn-form">
                        Entrar
                    </button>

                </form>
            </div>

            <!-- FORMULÁRIO DE CADASTRO -->
            <div class="form-box register">

                <form action="" id="form-registro" class="form-registro" novalidate>

                    <h1>CADASTRE-SE</h1>

                    <p class="form-subtitle">
                        Crie sua conta gratuitamente
                    </p>

                    <div class="input-box">
                        <label for="registro-usuario" class="sr-only">
                            Nome de usuário
                        </label>

                        <input
                            type="text"
                            id="registro-usuario"
                            placeholder="Nome de usuário"
                            required
                        >

                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="input-box">
                        <label for="registro-email" class="sr-only">
                            Email
                        </label>

                        <input
                            type="email"
                            id="registro-email"
                            placeholder="Email"
                            required
                        >

                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="linha-dupla">

                        <div class="input-box">
                            <label for="registro-cpf" class="sr-only">
                                CPF
                            </label>

                            <input
                                type="text"
                                id="registro-cpf"
                                placeholder="CPF"
                                required
                            >

                            <i class="fa-solid fa-id-card"></i>
                        </div>

                        <div class="input-box">
                            <label for="registro-cep" class="sr-only">
                                CEP
                            </label>

                            <input
                                type="text"
                                id="registro-cep"
                                placeholder="CEP"
                                required
                            >

                            <i class="fa-solid fa-location-crosshairs"></i>
                        </div>

                    </div>

                    <div class="input-box">
                        <label for="registro-senha" class="sr-only">
                            Senha
                        </label>

                        <input
                            type="password"
                            id="registro-senha"
                            placeholder="Senha"
                            required
                            minlength="8"
                        >

                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="input-box">
                        <label for="registro-conf-senha" class="sr-only">
                            Confirmar senha
                        </label>

                        <input
                            type="password"
                            id="registro-conf-senha"
                            placeholder="Confirmar senha"
                            required
                            minlength="8"
                        >

                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <button
                        type="submit"
                        id="btn-registro"
                        class="btn-form"
                    >
                        Cadastrar
                    </button>

                </form>
            </div>

            <!-- PAINEL ANIMADO -->
            <div class="toggle-box">

                <div class="toggle-panel toggle-left">

                    <div class="toggle-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <h1>Olá, seja bem-vindo!</h1>

                    <p>
                        Ainda não possui uma conta?
                        Cadastre-se e faça parte da EletroLink.
                    </p>

                    <button
                        class="btn-register btn-form"
                        id="btn-register"
                        type="button"
                    >
                        Registre-se
                    </button>

                </div>

                <div class="toggle-panel toggle-right">

                    <div class="toggle-icon">
                        <i class="fa-solid fa-plug"></i>
                    </div>

                    <h1>Bem-vindo de volta!</h1>

                    <p>
                        Já possui uma conta?
                        Entre e continue conectado.
                    </p>

                    <button
                        class="btn-login btn-form"
                        id="btn-login"
                        type="button"
                    >
                        Entrar
                    </button>

                </div>

            </div>

        </div>

    </main>

    <!-- MODAL DE CONFIRMAÇÃO DO CEP -->
    <div id="modal-cep" class="modal">

        <div class="modal-content">

            <h2>Confirmar endereço</h2>

            <div id="resultado-endereco"></div>

            <div class="modal-buttons">

                <button id="btn-confirmar" type="button">
                    Confirmar
                </button>

                <button id="btn-fechar" type="button">
                    Corrigir
                </button>

            </div>

        </div>

    </div>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById("sl-container");

    const btnRegister = document.getElementById("btn-register");
    const btnLogin = document.getElementById("btn-login");

    btnRegister.addEventListener("click", function () {
        container.classList.add("active");
    });

    btnLogin.addEventListener("click", function () {
        container.classList.remove("active");
    });

});
</script>
    <!-- MANTENHA A REFERÊNCIA AO SCRIPT QUE IMPLEMENTA AS VALIDAÇÕES -->
    <script src="../assets/JS/Forms.js"></script>

</body>
</html>