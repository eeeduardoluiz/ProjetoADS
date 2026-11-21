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
