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