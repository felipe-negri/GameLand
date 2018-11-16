<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

class Contato {
 
    private $nome, $email, $assunto, $mensagem;
    
    public function setNome($novo) {
        $this->nome = $novo;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setEmail($novo) {
        $this->email = $novo;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setAssunto($novo) {
        $this->assunto = $novo;
    }
    
    public function getAssunto() {
        return $this->assunto;
    }
    
    public function setMensagem($novo) {
        $this->mensagem = $novo;
    }
    
    public function getMensagem() {
        return $this->mensagem;
    }
    
}