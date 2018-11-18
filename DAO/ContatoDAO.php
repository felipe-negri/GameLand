<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

//$_SERVER['DOCUMENT_ROOT'] -> serve para obter o caminho raíz do projeto.
include($_SERVER['DOCUMENT_ROOT'] . '/GameLand/DataSource/DataSource.php');

class ContatoDAO {
    
    private $linkConnection;

    public function __construct() {        
        $this->linkConnection = new DataSource("gameland");
    }

    public function InserirContato($novoContato) {
       

        //deixa engatilhado a execução da query
        

        $nome = $novoContato->getNome();
        $email = $novoContato->getEmail();
        $assunto = $novoContato->getAssunto();
        $mensagem = $novoContato->getMensagem();

       
        $querySql = 'INSERT INTO CONTATO(NOME, EMAIL, ASSUNTO, MENSAGEM) VALUES ($nome, $email, $assunto, $mensagem)';

        mysqli_query($this->linkConnection->getConnection(), $querySql);
        
        //setando valores do VALUES da query
        $stn->bind_param("ssss", $nome, $email, $assunto, $mensagem);

        //executa o bind
        $stn->execute();
    }
}