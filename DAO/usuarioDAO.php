<?php

class UsuarioDAO {
    public $nome;
	public $email;
    public $senha;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO 
            usuario (nome, email, senha)
            VALUES ('$this->nome', '$this->email', '$this->senha');";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }

    public function consultarUsuarioPorEmail(){
        $objeto = new Conexao();
        $SQL = "SELECT nome, email, senha FROM usuario WHERE email = '$this->email';";
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }
    
    public function set($prop, $value) {
        $this->$prop = $value;
    }
}