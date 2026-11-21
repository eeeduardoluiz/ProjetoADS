
document.addEventListener("DOMContentLoaded", () => {

    const container = document.getElementById("sl-container");
    const registerBtn = document.getElementById("btn-register");
    const loginBtn = document.getElementById("btn-login");
    const body = document.querySelector(".body-sl");

    const form = document.getElementById("form-registro");
    const formLogin = document.getElementById("form-login");

    const usuario = document.getElementById("registro-usuario");
    const email = document.getElementById("registro-email");
    const cpf = document.getElementById("registro-cpf");
    const cep = document.getElementById("registro-cep");
    const senha = document.getElementById("registro-senha");
    const confSenha = document.getElementById("registro-conf-senha");

    const modal = document.getElementById("modal-cep");
    const resultado = document.getElementById("resultado-endereco");
    const btnFechar = document.getElementById("btn-fechar");
    const btnConfirmar = document.getElementById("btn-confirmar");

    // Alternância entre login e cadastro

    function ativarRegistro() {
        container?.classList.add("active");
        body?.classList.add("active-bg");
    }

    function ativarLogin() {
        container?.classList.remove("active");
        body?.classList.remove("active-bg");
    }

    registerBtn?.addEventListener("click", ativarRegistro);
    loginBtn?.addEventListener("click", ativarLogin);

    // Busca de CEP

    if (cep) {
        cep.addEventListener("blur", () => {
            const cepLimpo = cep.value.replace(/\D/g, "");

            if (cepLimpo.length === 8) {
                modal.style.display = "block";
                buscarCep(cepLimpo);
            }
        });
    }

    btnFechar?.addEventListener("click", () => {
        modal.style.display = "none";
        cep.value = "";
    });

    btnConfirmar?.addEventListener("click", () => {
        modal.style.display = "none";
    });

    async function buscarCep(cepValor) {
        resultado.innerHTML = "Buscando...";

        try {
            const response = await fetch(
                `https://viacep.com.br/ws/${cepValor}/json/`
            );

            const data = await response.json();

            if (data.erro) {
                resultado.textContent = "CEP não encontrado!";
                return;
            }

            resultado.innerHTML = `
                <p><strong>Rua:</strong> ${data.logradouro || "Não informado"}</p>
                <p><strong>Bairro:</strong> ${data.bairro || "Não informado"}</p>
                <p><strong>Cidade:</strong> ${data.localidade} - ${data.uf}</p>
            `;

        } catch (erro) {
            resultado.textContent = "Erro ao buscar CEP!";
        }
    }

    // Validações

    function mostrarErro(input, mensagem) {
        const box = input.parentElement;

        input.classList.add("input-erro");

        let erro = box.querySelector(".erro-msg");

        if (!erro) {
            erro = document.createElement("span");
            erro.classList.add("erro-msg");
            box.appendChild(erro);
        }

        erro.textContent = mensagem;
    }

    function limparErros() {
        document.querySelectorAll(".input-box input").forEach(input => {
            input.classList.remove("input-erro");
        });

        document.querySelectorAll(".erro-msg").forEach(el => el.remove());
    }

    function validarEmail(emailValor) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValor);
    }

    function validarCPF(cpfValor) {
        cpfValor = cpfValor.replace(/\D/g, "");

        if (cpfValor.length !== 11) return false;
        if (/^(\d)\1+$/.test(cpfValor)) return false;

        let soma = 0;
        let resto;

        for (let i = 0; i < 9; i++) {
            soma += parseInt(cpfValor[i]) * (10 - i);
        }

        resto = (soma * 10) % 11;
        if (resto === 10 || resto === 11) resto = 0;

        if (resto !== parseInt(cpfValor[9])) return false;

        soma = 0;

        for (let i = 0; i < 10; i++) {
            soma += parseInt(cpfValor[i]) * (11 - i);
        }

        resto = (soma * 10) % 11;
        if (resto === 10 || resto === 11) resto = 0;

        return resto === parseInt(cpfValor[10]);
    }

    // Cadastro

    async function validarFormulario(e) {
        e.preventDefault();
        limparErros();

        let valido = true;

        if (!usuario.value.trim()) {
            mostrarErro(usuario, "Preencha o nome de usuário");
            valido = false;
        }

        if (!validarEmail(email.value.trim())) {
            mostrarErro(email, "Email inválido");
            valido = false;
        }

        if (!validarCPF(cpf.value)) {
            mostrarErro(cpf, "CPF inválido");
            valido = false;
        }

        if (cep.value.replace(/\D/g, "").length !== 8) {
            mostrarErro(cep, "CEP inválido");
            valido = false;
        }

        if (senha.value.length < 8) {
            mostrarErro(senha, "A senha precisa ter 8 dígitos");
            valido = false;
        }

        if (senha.value !== confSenha.value) {
            mostrarErro(confSenha, "As senhas estão diferentes");
            valido = false;
        }

        if (!valido) return;

        const dados = new FormData();

        dados.append("acao", "cadastro");
        dados.append("usuario", usuario.value.trim());
        dados.append("email", email.value.trim());
        dados.append("cpf", cpf.value.replace(/\D/g, ""));
        dados.append("cep", cep.value.replace(/\D/g, ""));
        dados.append("senha", senha.value);

        try {
            const resposta = await fetch("../Controllers/UsuarioController.php", {
                method: "POST",
                body: dados
            });

            const resultado = await resposta.json();

            if (resultado.sucesso) {
                alert(resultado.mensagem);
                form.reset();
                limparErros();
                ativarLogin();
            } else {
                alert(resultado.mensagem);
            }

        } catch (erro) {
            console.error(erro);
            alert("Não foi possível conectar ao servidor.");
        }
    }

    form?.addEventListener("submit", validarFormulario);

    // Login

    formLogin?.addEventListener("submit", async (e) => {
        e.preventDefault();

        const emailLogin = document.getElementById("Login-usuario").value.trim();
        const senhaLogin = document.getElementById("Login-senha").value;

        if (!validarEmail(emailLogin)) {
            alert("Digite um email válido.");
            return;
        }

        const dados = new FormData();

        dados.append("acao", "login");
        dados.append("email", emailLogin);
        dados.append("senha", senhaLogin);

        try {
            const resposta = await fetch("../Controllers/UsuarioController.php", {
                method: "POST",
                body: dados
            });

            const resultado = await resposta.json();

            if (resultado.sucesso) {
                window.location.href = "HomeView.php";
            } else {
                alert(resultado.mensagem);
            }

        } catch (erro) {
            console.error(erro);
            alert("Não foi possível conectar ao servidor.");
        }
    });

});
