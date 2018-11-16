<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

class Login {
    
    private $email, $senha;
    
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
}

