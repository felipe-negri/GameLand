<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

include($_SERVER['DOCUMENT_ROOT'] . '/GameLand/DAO/ContatoDAO.php');

class ContatoController {
    
    public function InserirContato($objContato){
        $contatoDAO = new ContatoDAO();
        $contatoDAO->InserirContato($objContato);
    }
}
