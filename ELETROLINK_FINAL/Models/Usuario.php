
<?php

class Usuario {

    private $id;
    private $usuario;
    private $email;
    private $cpf;
    private $cep;
    private $senha;
    private $dataCadastro;

    public function __construct($usuario, $email, $cpf, $cep, $senha) {
        $this->usuario = $usuario;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->cep = $cep;
        $this->senha = $senha;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }
}
