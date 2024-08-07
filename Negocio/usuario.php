<?php

class Usuario {
    public $nome;
	public $email;
    public $senha;

    public function cadastrar() {
        $objeto = new UsuarioDAO();
        $objeto->set("nome", $this->nome);
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        return $objeto->cadastrar();
    }

    public function consultarUsuarioPorEmail() {
        $objeto = new UsuarioDAO();
        $objeto->set("email", $this->email);
        return $objeto->consultarUsuarioPorEmail();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}