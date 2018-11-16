<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

include($_SERVER['DOCUMENT_ROOT'] . '/GameLand/DAO/UsuarioDAO.php');

class UsuarioController {
    
    public function InserirUsuario($objUsuario){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->InserirUsuario($objUsuario);
    }
    
    public function AlterarSenhaUsuario($objUsuario) {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->AtualizarSenha($objUsuario);
    }
}