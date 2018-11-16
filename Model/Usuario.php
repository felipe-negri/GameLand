<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

class Usuario {
    private $nome, $cpf, $endereco, $email, $senha, $cidade, $estado, $cep, $aceitacaoTermo;
    
    public function setNome($novo) {
        $this->nome = $novo;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setCpf($novo) {
        $this->cpf = $novo;
    }
    
    public function getCpf() {
        return $this->cpf;
    }
    
    public function setEndereco($novo) {
        $this->endereco = $novo;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setEmail($novo) {
        $this->email = $novo;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setSenha($novo) {
        $this->senha = $novo;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function setCidade($novo) {
        $this->cidade = $novo;
    }
    
    public function getCidade() {
        return $this->cidade;
    }
    
    public function setEstado($novo) {
        $this->estado = $novo;
    }
    
    public function getEstado() {
        return $this->estado;
    }
    
    public function setCep($novo) {
        $this->cep = $novo;
    }
    
    public function getCep() {
        return $this->cep;
    }
    
    public function setTermoAceitacao($novo) {
        $this->aceitacaoTermo = $novo;
    }
    
    public function getTermoAceitacao() {
        return $this->aceitacaoTermo;
    }    
}