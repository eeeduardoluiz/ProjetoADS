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
